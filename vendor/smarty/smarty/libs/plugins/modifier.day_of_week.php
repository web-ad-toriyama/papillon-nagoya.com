<?php
function smarty_modifier_day_of_week($date)
{
    if ($date == '') return '';
    $datetime   = new DateTime($date);
    $week       = array("日", "月", "火", "水", "木", "金", "土");
    return $week[(int)$datetime->format('w')];
}
