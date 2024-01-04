<?php

require_once __DIR__ . '/../../autoload.php';

$day = $_POST['day'];
$hour = $_POST['hour'];
$min = $_POST['min'];

// datetime → unix_time変換
$date_str = substr($day, 0, 4).substr($day, 7, 2).substr($day, 12, 2);
$date_form_str = mktime($hour, $min, 0, substr($day, 7, 2), substr($day, 12, 2), substr($day, 0, 4));

// 該当出勤者取得
$query = ' select staff.id, staff.name from ' . TBL_STAFF . ' staff ';
$query .= ' left outer join ' . TBL_STAFF_SCH . ' as schedule ';
$query .= ' on staff.id = schedule.staff_id';

$query .= ' where schedule.date = \'' . $date_str . '\'';
$query .= ' and schedule.reserve_icon = '.DEFAULT_RESERVE_ICON;
$query .= ' and  ((schedule.going_time <= '.$date_form_str.' and leave_time >= '.$date_form_str.' )';
$query .= ' or schedule.allow_mode = '.SCH_TYPE_TEL.')';
$query .= ' order by staff.seq';

$db = Db::factory();
$stmt = $db->query($query);
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($data);