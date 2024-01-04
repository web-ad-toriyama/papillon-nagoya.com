<?php

require __DIR__.'/../common/start.php';

// テンプレート設定
$templateFile = '/admin/ranking/index.html';

$form['staff_list'] = getFormStaffList(true);

// データ件数取得
$model = new Model(TBL_RANKING);
// データ一覧取得
$sel = $model->select();
$data = h($sel->fields('no,staff_id,free_text')
              ->where('pid', $params['pid'])
              ->fetchAll());

require __DIR__ . '/../common/display.php';
