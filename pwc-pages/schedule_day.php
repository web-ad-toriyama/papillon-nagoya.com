<?php

/*
    出勤ページ（日別）
 */

// 日程表示数変更
$max = DEFAULT_DISPLAY_DAYS_PC;
if ($dir === 'mb') {
    $max = DEFAULT_DISPLAY_DAYS_MB;
} elseif ($dir === 'sp') {
    $max = DEFAULT_DISPLAY_DAYS_SP;
}

// パラメータ取得
$day = getParamDays();
$smarty->assign('day', $day-1);
$smarty->assign('week', array_slice(getSchWeek(), 0, $max));   // 週間
$smarty->assign('schedule', getScheduleDay($suffix, $day));    // 出勤情報
