<?php

require __DIR__ . '/../common/start.php';

// テンプレート設定
$templateFile = '/admin/staff/sort.html';

// データ一覧取得
$model = new Model(TBL_STAFF);
$sel = $model->select();
$data = h($sel->where('show_flg', SHOW_ON)
              ->order('seq')
              ->fetchAll());

// サムネイル画像(1枚目)取得
if (count($data)>0) {
    foreach ($data as $k => $v) {
        $data[$k]['photo'] = getStaffPhoto($v['id'], 1);
    }
}

require __DIR__ . '/../common/display.php';
