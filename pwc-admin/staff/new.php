<?php

require __DIR__.'/../common/start.php';

// テンプレート設定
$templateFile = '/admin/staff/edit.html';

$data['item'] = getAdItem($form);

// デフォルトスケジュール用
$xxx = array(''=>'未設定');
$form['hour'] = $xxx + $form['hour'];
$form['min']  = $xxx + $form['min'];
$smarty->assign('day_of_week',getDayOfWeek());

require __DIR__ . '/../common/display.php';
