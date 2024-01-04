<?php

require __DIR__ . '/../common/start.php';

// テンプレート設定
$templateFile = '/admin/link/free.html';

// データ取得
$model = new Model(TBL_LINK_FREE);
$data = h($model->find($params['pid']));

require __DIR__ . '/../common/display.php';
