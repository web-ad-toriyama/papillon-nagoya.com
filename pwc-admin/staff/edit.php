<?php

require __DIR__.'/../common/start.php';

// テンプレート設定
$templateFile = '/admin/staff/edit.html';

// 基本情報取得
$model = new Model(TBL_STAFF);
$data = h($model->find($params['id']));

// クラス情報取得
$data['class_flg'] = getAdStaffClass($params['id']);
// チェック情報取得
$data['check_flg'] = getAdStaffCheck($params['id']);
// プロフィール情報取得
$data['item'] = getAdItem($form);
$data['staff_item'] = getAdStaffItem($params['id']);

// デフォルトスケジュール用
$xxx = array(''=>'未設定');
$form['hour'] = $xxx + $form['hour'];
$form['min']  = $xxx + $form['min'];
$smarty->assign('day_of_week',getDayOfWeek());

// デフォルトスケジュール取得
$data['sch'] = getStaffScheduleDef($params['id']);

require __DIR__ . '/../common/display.php';
