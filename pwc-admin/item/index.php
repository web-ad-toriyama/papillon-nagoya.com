<?php

require_once __DIR__ . '/../common/start.php';

$templateFile = '/admin/item/index.html';

// データ件数取得
$model = new Model(TBL_ITEM);
$sel = $model->select();
$cnt = $sel->where('pid', $params['pid'])
           ->fetchCount();
// ページネーション生成
$offset = pagination($cnt, PAGER_ADMIN_LIST, '/?pid='.$params['pid'].'&p=%page%');
// データ一覧取得
$sel = $model->select();
$data = h($sel->order('show_flg,seq')
            ->where('pid', $params['pid'])
            ->limit(PAGER_ADMIN_LIST)
            ->offset($offset)
            ->fetchAll());

require_once __DIR__ . '/../common/display.php';
