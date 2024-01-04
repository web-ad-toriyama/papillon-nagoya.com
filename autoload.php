<?php

require_once __DIR__ . '/app/configs/app.php';

require_once __DIR__ . '/vendor/autoload.php';

$smarty = new ViewSmarty();
$request = Request::getInstance();

// 店舗の開始時間から日時の時差を算出する
$hour = date("H");
$hour++;
$hour--;
$minute = date("i");

if ($hour < SHOP_TODAY || ($hour == SHOP_TODAY && $minute < SHOP_TODAY2)) {
	$today = date("Ymd", mktime(0, 0, 0, date("n"), date("j")-1, date("Y")));
	$now_hour = $hour + 24;
	$now_minute = $minute;
}
else {
	$today = date("Ymd");
	$now_hour = $hour;
	$now_minute = $minute;
}
define("TODAY", $today);
define("NOW_HOUR", $now_hour);
define("NOW_MINUTE", $now_minute);
if (SLOT_FLG == 1) {define("SLOT_POINT", make_slot_point());}	
