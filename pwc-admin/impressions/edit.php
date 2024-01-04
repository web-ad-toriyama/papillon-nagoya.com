<?php

require __DIR__.'/../common/start.php';

// テンプレート設定
$templateFile = '/admin/impressions/edit.html';

// データ取得
$model = new Model(TBL_IMPRESSIONS);
$data = h($model->find($params['id']));

$smarty->assign('result', $result);
$smarty->assign('staff_list', getReserveStaffList('impressions'));

require __DIR__ . '/../common/display.php';
