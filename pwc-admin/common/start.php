<?php

require_once __DIR__ . '/../../autoload.php';

// ログインチェック
if (Auth::check() === false) {
    Auth::logout();
}

// CSRF対策用トークン
Token::getInstance();
Token::init();

// POST取得
$posts = $request->getPost();
// GET取得
$params = $request->getQuery();

// テンポラリフォルダ作成
if (!Dir::exists(IMG_TEMP_DIR)) {
    Dir::create(IMG_TEMP_DIR);
}
// スタッフ画像フォルダ作成
if (!Dir::exists(IMG_STAFF_DIR)) {
    Dir::create(IMG_STAFF_DIR);
}

// バナー画像フォルダ作成
if (!Dir::exists(IMG_BANNER_DIR)) {
    Dir::create(IMG_BANNER_DIR);
}

$smarty->assign('base_path',getAdPageInfo());
