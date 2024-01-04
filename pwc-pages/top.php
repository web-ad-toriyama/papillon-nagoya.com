<?php

/*
    トップページ
 */

$smarty->assign('newface', getNewFace($suffix));         // 新人情報
$smarty->assign('ranking', getRanking($suffix));         // ランキング情報
$smarty->assign('schedule', getScheduleDay($suffix));    // 本日出勤情報
$smarty->assign('events', getEventImg());    // イベント
//$smarty->assign('blog_list', getBlogList());    // ブログ一覧


// ブログ読み込み
$blog_list = [];
if(file_exists(__DIR__."/../rss/rss.json")){
	$blog_list = file_get_contents(__DIR__."/../rss/rss.json");
	$blog_list = json_decode($blog_list, true);
	foreach ($blog_list as $key => $blog) {
		$blog_list[$key]['date_time'] = date("Y-m-d H:i",$blog['date']);
	}
}
$smarty->assign('blog_list', $blog_list);