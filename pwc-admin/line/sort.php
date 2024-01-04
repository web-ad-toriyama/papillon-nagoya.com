<?php

require __DIR__.'/../common/start.php';

// テンプレート設定
$templateFile = '/admin/line/sort.html';

// データ一覧取得
$model = new Model(TBL_LINE);
$sel   = $model->select();
$data  = h($sel->where('show_flg', SHOW_ON)
               ->order('seq')
               ->fetchAll());

require __DIR__ . '/../common/display.php';
