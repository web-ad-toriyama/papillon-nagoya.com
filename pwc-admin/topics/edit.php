<?php

require __DIR__.'/../common/start.php';

// テンプレート設定
$templateFile = '/admin/topics/edit.html';

// データ取得
$model = new Model(TBL_TOPICS);
$data = h($model->find($params['id']));

require __DIR__ . '/../common/display.php';
