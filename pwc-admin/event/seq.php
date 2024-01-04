<?php

require_once __DIR__ . '/../common/start.php';

$templateFile = '/admin/event/seq.html';

// データ一覧取得
$model = new Model(TBL_EVENT);
$sel = $model->select();
$data = h($sel->order('seq desc, id')->fetchAll());

require_once __DIR__ . '/../common/display.php';
