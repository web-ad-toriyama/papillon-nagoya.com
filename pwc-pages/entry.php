<?php

/*
    お問合せページ
 */

$mode = getParamMode();

// 不正なパラメーターが引き渡されたらトップページにリダイレクト
if ($mode === false) {
	redirect(ROOT_URL);
}

// CSRF対策用トークン
Token::getInstance();
Token::init();

$template_file = '/'.$dir.'/entry/'.$mode.'.html';
$mail_template_file = '/pc/entry/mail.html';
$posts = h($_POST);
// チェックボックス文字列連結
if (count($posts['site'])>0) {
	foreach ($posts['site'] as $value) {
		$site_value .= $value.',';
	}
	$posts['site_value'] = substr($site_value, 0, -1);
}
$smarty->assign('posts',$posts);

// 内容確認
if ($posts['confirm']) {
	// バリデーション実行
	$rules = array(
		'name' => array(
			array('rule' => 'required'),
		),
		'mail' => array(
			array('rule' => 'required'),
			array('rule' => 'email'),
		),
		'tel' => array(
			array('rule' => 'tel'),
		),
		'age' => array(
			array('rule' => 'required'),
			array('rule' => 'numeric'),
		),
		'exp' => array(
			array('rule' => 'required'),
		),
		'career' => array(
			array('rule' => 'length' , 'max' => 500),
		),
		'site' => array(
			array('rule' => 'required_arr'),
		),
		'detail' => array(
			array('rule' => 'length' , 'max' => 500),
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
	    $result = sendEmail('応募フォーム', $body, null, array(SHOP_MAIL_RECRUIT => '応募フォーム'));
	}
	$smarty->assign('csrf', $csrf);
	$smarty->assign('result', $result);
}

$smarty->assign('token', Token::fetch());

