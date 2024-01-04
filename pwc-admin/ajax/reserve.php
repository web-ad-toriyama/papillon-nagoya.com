<?php
require_once __DIR__ . '/../../autoload.php';

$day = $_POST['day'];
$staff_id = $_POST['staff_id'];
$going_hour = $_POST['going_hour'];
$going_min = $_POST['going_min'];
$leave_hour = $_POST['leave_hour'];
$leave_min = $_POST['leave_min'];
$result = true;
$message = null;

if($staff_id == 0){
    $message .= "セラピストを選択してください。\n";
}

$date_str = substr($day, 0, 4).substr($day, 7, 2).substr($day, 12, 2);
$yy  = substr($day, 0, 4);
$mm = substr($day, 7, 2);
$dd   = substr($day, 12, 2);

$going_date_form_str = mktime($going_hour, $going_min, 0, $mm, $dd, $yy);
$leave_date_form_str = mktime($leave_hour, $leave_min, 0, $mm, $dd, $yy);
if($going_date_form_str >= $leave_date_form_str){
    $message .= "開始時間が終了時間よりも同じか後に設定してあります。\n";
}
if(!$message){
    $query1 = ' select * from staff_reserve ';
    $query1 .= ' where date = \'' . $date_str . '\'';
    $query1 .= ' and staff_id = '.$staff_id;
    $query1 .= ' and NOT( (going_time >= '.$going_date_form_str.' and going_time >= '.$leave_date_form_str.')';
    $query1 .= ' or (leave_time <= '.$going_date_form_str.' and leave_time <= '.$leave_date_form_str.'))';
    $db = Db::factory();
    $stmt = $db->query($query1);
    $data1 = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if($data1){
         $message .= "既に予約情報が存在しています。";
    }

    $query2 = ' select * from staff_sch ';
    $query2 .= ' where date = \'' . $date_str . '\'';
    $query2 .= ' and staff_id = '.$staff_id;

    $stmt = $db->query($query2);
    $data2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if($data2){
        $query3 = ' select * from  staff_sch as sch';
        $query3 .= ' where sch.date = \'' . $date_str . '\'';
        $query3 .= ' and sch.staff_id = '.$staff_id;
        $query3 .= ' and (sch.allow_mode = 3 or (sch.allow_mode = 0 and(sch.going_time >'.$going_date_form_str.' or sch.leave_time <'.$leave_date_form_str.'))';
        $query3 .= ' or (sch.allow_mode = '.SCH_TYPE_LAST.' and (sch.going_time >'.$going_date_form_str.')))';
        $stmt = $db->query($query3);
        $data3 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if($data3){
            $message .= "対象のスタッフの出勤時間が勤務外です。";
        }
    }else{
        $message .= "対象のスタッフが勤務外です。";
    }
}
if($message){
   $result = $message;
}

echo json_encode($result);
