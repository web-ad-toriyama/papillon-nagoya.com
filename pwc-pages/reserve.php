<?php

/*
    WEB予約ページ
 */

$mode = getParamMode();

// 不正なパラメーターが引き渡されたらトップページにリダイレクト
if ($mode === false) {
	redirect(ROOT_URL);
}

// CSRF対策用トークン
Token::getInstance();
Token::init();

$template_file = '/'.$dir.'/reserve/'.$mode.'.html';
$mail_template_file = '/pc/reserve/mail.html';

$posts = h($_POST);
$smarty->assign('posts',$posts);
$smarty->assign('today', date('Y年m月d日', strtotime('today', time())));
// 内容確認
if ($posts['confirm']) {
	// バリデーション実行
	$rules = array(
		'kind' => array(
			array('rule' => 'required')
		),
		'name' => array(
			array('rule' => 'required')
		),
		'kana' => array(
			array('rule' => 'required'),
			array('rule' => 'kana'),
		),
		'mail1' => array(
			array('rule' => 'required'),
			array('rule' => 'email'),
		),
		'mail2' => array(
			array('rule' => 'required'),
			array('rule' => 'email'),
			array('rule' => 'email_check' ,'mail' => $posts['mail1']),
		),
		'tel' => array(
			array('rule' => 'required'),
			array('rule' => 'tel'),
		),
    );
    $validator = new Validator();
	$validator->setRules($rules);
	$validator->validate($posts);
	$error = $validator->getError();
	$smarty->assign('error',$error);
}

// 内容送信
if ($posts['send']) {
	$csrf = $result = false;
	if (Token::check()) {
	    $csrf = true;
	    $body = $smarty->fetch(VIEW_DIR.$mail_template_file);
	    $result = sendEmail('WEB予約フォーム', $body, null, array(SHOP_MAIL_RESERVE => 'WEB予約フォーム'));
		// メールアドレス2へ送信
		if (SHOP_MAIL_RESERVE2 != '') {
			$result = sendEmail('WEB予約フォーム', $body, null, array(SHOP_MAIL_RESERVE2 => 'WEB予約フォーム'));
		}
		// ユーザーへメール送信
		if ($posts['mail1'] != '') {
			$result = sendEmail('WEB予約フォーム 控え', $body, null, array($posts['mail1'] => 'WEB予約フォーム'));
		}
	}
	$smarty->assign('csrf', $csrf);
	$smarty->assign('result', $result);
}

$smarty->assign('staff_list',getReserveStaffList());
$smarty->assign('month',date('n'));
$smarty->assign('day',date('j')+1);
$smarty->assign('token', Token::fetch());
