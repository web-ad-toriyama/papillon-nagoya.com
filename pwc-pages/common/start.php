<?php

/*
    オフィシャル共通開始ファイル
 */

require_once __DIR__ . '/../../autoload.php';

// ページ情報の取得
list($dir, $file, $suffix) = getPageInfo();

// SP版の時はSPページへリダイレクト
// if (get_device_type() == 'sp' && $dir == 'pc') {
//		redirect(ROOT_URL.'/s'.$_SERVER['REQUEST_URI']);
// }

// アクセス解析データ登録
// require_once __DIR__ . '/analyze.php';

// META情報取得
$page['name']        = getMetaInfo('name', $file, false);
$page['title']       = getMetaInfo('title', $file, true);
$page['keywords']    = getMetaInfo('keywords', $file, true);
$page['description'] = getMetaInfo('description', $file, true);
$page['h1']          = getMetaInfo('h1', $file, true);
$page['h2']          = getMetaInfo('h2', $file, true);

// テンプレート設定
$template_file = '/'.$dir.'/'.$file.'.html';

// ヘッドラインニュース取得
$smarty->assign('headline', getHeadLineNews());

// カバーガール取得(常にPC版のサイズを取得する)
$smarty->assign('covergirl', getCoverGirl($dir));

// 新人情報
$smarty->assign('newface', getNewFace($suffix));

// 新着情報
$smarty->assign('topics', getTopics($dir));


