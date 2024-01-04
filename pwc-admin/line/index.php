<?php

require __DIR__.'/../common/start.php';

// テンプレート設定
$templateFile = '/admin/line/index.html';

// データ件数取得
$model = new Model(TBL_LINE);
$sel = $model->select();
$cnt = $sel->fetchCount();
// ページネーション生成
$offset = pagination($cnt, PAGER_ADMIN_LIST);
// データ一覧取得
$sel = $model->select();
if ($params['search_name'] != '') {
    $data = h($sel->order('show_flg,seq')
        ->whereLike('name','%'.$params['search_name'].'%')
        ->limit(PAGER_ADMIN_LIST)
        ->offset($offset)
        ->fetchAll());
} else {
    $data = h($sel->order('show_flg,seq')
        ->limit(PAGER_ADMIN_LIST)
        ->offset($offset)
        ->fetchAll());
}

require __DIR__ . '/../common/display.php';
