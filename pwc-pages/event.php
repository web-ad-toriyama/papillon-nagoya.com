<?php

/*
    トップページ
 */

$smarty->assign('newface', getNewFace($suffix));         // 新人情報
$smarty->assign('ranking', getRanking($suffix));         // ランキング情報
$smarty->assign('schedule', getScheduleDay($suffix));    // 本日出勤情報
$smarty->assign('event_img', getEventImg($suffix));    // イベント画像情報