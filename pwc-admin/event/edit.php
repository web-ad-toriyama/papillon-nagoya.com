<?php

require __DIR__ . '/../common/start.php';

// テンプレート設定
$templateFile = '/admin/event/edit.html';

// データ取得
$model = new Model(TBL_EVENT);
$data = h($model->find($params['id']));

require __DIR__ . '/../common/display.php';
