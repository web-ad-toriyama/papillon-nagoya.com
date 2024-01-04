<?php
/*
    お客様の声ページ
 */

$mode = getParamMode();

// 不正なパラメーターが引き渡されたらトップページにリダイレクト
if ($mode === false) {
	redirect(ROOT_URL);
}

// CSRF対策用トークン
Token::getInstance();
Token::init();

$template_file = '/'.$dir.'/voice/'.$mode.'.html';
$mail_template_file = '/pc/voice/mail.html';

$posts = h($_POST);
$smarty->assign('posts',$posts);

// 内容確認
if ($posts['confirm']) {
	$file_name = "";
	// バリデーション実行
	$rules = array(
		'name' => array(
			array('rule' => 'required')
		),
		'detail' => array(
			array('rule' => 'required')
		),
		'h_image' => array(
			array('rule' => 'file_ext', 'permit' => array('jpg','jpeg','gif','png'))
		),
    );
    $validator = new Validator();
	$validator->setRules($rules);
	$validator->validate($posts);
	$error = $validator->getError();
	// ファイルアップロード
	if($error['h_image'] =='' && $_FILES['image']['name'] != '') {
		$result = file_check($file_name);
		if ($result !== true) {
			$error['h_image'] = $result;
		}
	}
	$smarty->assign('file_name',$file_name);
	$smarty->assign('error',$error);
}

// 内容送信
if ($posts['send']) {
	$csrf = $result = false;
	if (Token::check()) {
	    $csrf = true;
		// DB登録
		$result = add($posts);
	    $body = $smarty->fetch(VIEW_DIR.$mail_template_file);
	    $result = sendEmail('お客様の声投稿フォーム', $body, null, array(SHOP_MAIL_VOICE => 'お客様の声投稿フォーム'));
	}
	$smarty->assign('csrf', $csrf);
	$smarty->assign('result', $result);
}

$smarty->assign('voice', getVoice($dir));
$smarty->assign('year',date('y'));
$smarty->assign('month',date('n'));
$smarty->assign('day',date('j'));
$smarty->assign('token', Token::fetch());


////////////////////////////////////////////////////////////////////////////////
function add($posts)
{
	$model = new Model(TBL_VOICE);
	$values = array(
		'show_flg' => SHOW_OFF,
		'year'     => $posts['year'],
		'month'    => $posts['month'],
		'day'      => $posts['day'],
		'name'     => $posts['name'],
		'detail'   => $posts['detail'],
		'file_name'=> $posts['file_name'],
		'created'  => date(DATE_FORMAT_STR),
		'updated'  => date(DATE_FORMAT_STR)
	);
	$ins = $model->insert();
	$ins->values($values);
	return $ins->execute();
}

function file_check(&$baseFileName)
{
	// ファイルサイズ確認
	if ($_FILES['image']['size'] > IMAGE_FILE_MAX) {
		return "ファイルサイズが大きすぎます。".(IMAGE_FILE_MAX/1000)."KBまでのファイルを選択して下さい。";
	}

	if ($_FILES['image']['size'] <= 0) {
		return "何らかの理由でファイルを正しく認識することができませんでした。";
	}

	$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
	$baseFileName = date('mdHis') . mt_rand(1, 99) . "." . $ext;
	$file_name = IMG_VOICE_DIR .'/'. $baseFileName;

	// ファイルアップロード
	move_uploaded_file($_FILES['image']['tmp_name'], $file_name);

	if (file_exists($file_name) == false) {
		return "ファイルの送信に失敗しました。もう一度送信してみてください。";
	}
	//PHP攻撃コードを正規表現でチェック
	mb_regex_encoding('ASCII');
	if (mb_eregi('<\\?php', $file_name)) {
		@ unlink($file_name);
		return "申し訳ございません。そのファイルは使えない様です。";
	}
	if (mb_eregi('^.*<\\?php.*$', $file_name)) {
		@ unlink($file_name);
		return "申し訳ございません。そのファイルは使えない様です。";
	}
	//画像サイズチェック
	list($width, $height) = getimagesize($file_name);
	if ($width < IMAGE_SIZE_W || $height < IMAGE_SIZE_H) {
		@ unlink($file_name);
		return "横幅" . IMAGE_SIZE_W . "px以上、高さ" . IMAGE_SIZE_H . "px以上の画像をご登録ください。";
	}

	if (imageSizeConvert($file_name, $file_name, IMAGE_SIZE_W, "", 0) !== true) {
		return "ファイルの送信に失敗しました。もう一度送信してみてください。";
	}

	return true;
}


