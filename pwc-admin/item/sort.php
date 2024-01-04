<?php

require __DIR__ . '/../common/start.php';

// テンプレート設定
$templateFile = '/admin/item/sort.html';

// データ一覧取得
$model = new Model(TBL_ITEM);
$sel = $model->select();
$data = h($sel->where('show_flg', SHOW_ON)
    ->where('pid', $params['pid'])
    ->order('seq')
    ->fetchAll());

require __DIR__ . '/../common/display.php';
