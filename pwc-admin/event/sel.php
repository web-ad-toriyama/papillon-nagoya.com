<?php

require_once __DIR__ . '/../common/start.php';

$templateFile = '/admin/event/sel.html';

// データ一覧取得
$model = new Model(TBL_EVENT);
$sel = $model->select();
$data = h($sel->fetchAll());

require_once __DIR__ . '/../common/display.php';
