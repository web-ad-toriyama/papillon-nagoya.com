<?php

require __DIR__.'/../common/start.php';

// テンプレート設定
$templateFile = '/admin/line/edit.html';

// データ取得
$model = new Model(TBL_LINE);
$data = h($model->find($params['id']));

$smarty->assign('result', $result);

require __DIR__ . '/../common/display.php';
