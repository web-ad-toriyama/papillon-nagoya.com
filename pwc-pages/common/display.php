<?php

/*
    オフィシャル共通表示ファイル
 */
$smarty->assign('top_script_name', TEST_DIR.'/index.php');
$smarty->assign('page', $page);
$smarty->assign('form', $form);
$smarty->assign('html', $html);

/* canonicalタグ　alternatoタグ　用 */
$oneurl = pcRootChange(URL_NON_DOMAIN);
$smarty->assign('pc_dir_path',$oneurl['pc']);
$smarty->assign('sp_dir_path',$oneurl['sp']);
$smarty->assign('mb_dir_path',$oneurl['mb']);
// モバイル版固有の処理(半角変換・GA設定)
if ($dir === 'mb') {
	$smarty->loadFilter('output', 'hchar');
	$smarty->assign('ga',getGaUrlForMobile());
}


//パンくず
$bread = array();
$root_url = ROOT_URL;
if($dir == 'sp') {
    $root_url = ROOT_URL.'/s';
}
if ($file === 'index') {
    $bread[] = ["url" => "", "title" => $page['name']];
}elseif ($file === 'profile') {
    $bread[] = array("url" => $root_url."/index.php", "title" => $html['name']['index']);
    $bread[] = array("url" => $root_url."/staff.php", "title" => $html['name']['staff']);
    $bread[] = array("url" => "", "title" => $staff['name']."のプロフィール");
} else {
    $bread[] = array("url" => $root_url."/index.php", "title" => $html['name']['index']);
    $bread[] = array("url" => "", "title" => $page['name']);
}


// 存在しないURLの時はエラーページ表示
if (!file_exists(VIEW_DIR . $template_file)) {
    $template_file = '/pc/err.html';
    if($dir == 'sp') {
        $template_file = '/sp/err.html';        
    }
}
    

$smarty->assign('bread', $bread);
$smarty->display(VIEW_DIR . $template_file);
exit;


