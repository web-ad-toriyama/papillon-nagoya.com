<?php

require_once __DIR__ . '/../autoload.php';

$templateFile = '/admin/login.html';

if (Auth::check() === true) {
    Auth::logined();
}


$posts = $request->getPost();
$result = true;

if ($posts['login_id'] != '' && $posts['login_pass'] != '') {
    if (Auth::login($posts['login_id'], $posts['login_pass'], $posts['remember'])) {
        Auth::logined();
    } else {
        $result = false;
    }
}

$smarty->assign('result', $result);
require_once __DIR__ . '/common/display.php';
