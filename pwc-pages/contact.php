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

$template_file = '/'.$dir.'/contact/'.$mode.'.html';
$mail_template_file = '/pc/contact/mail.html';

$posts = h($_POST);
$smarty->assign('posts',$posts);

// 内容確認
if ($posts['confirm']) {
	// バリデーション実行
	$rules = array(
		'name' => array(
			array('rule' => 'required')
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
		'item' => array(
			array('rule' => 'required')
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
	    $result = sendEmail('お問合せフォーム', $body, array(SHOP_MAIL_FROM => 'お問い合わせフォーム'));
	}
	$smarty->assign('csrf', $csrf);
	$smarty->assign('result', $result);
}

$smarty->assign('token', Token::fetch());

