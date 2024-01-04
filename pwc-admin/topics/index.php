<?php

require __DIR__.'/../common/start.php';

// テンプレート設定
$templateFile = '/admin/topics/index.html';

// データ件数取得
$model = new Model(TBL_TOPICS);
$sel = $model->select();
$cnt = $sel->fetchCount();

// ページネーション生成
$offset = pagination($cnt, PAGER_ADMIN_LIST);

// データ一覧取得
$sel = $model->select();
$data = h($sel->order('show_flg,published desc,id desc')
            ->limit(PAGER_ADMIN_LIST)
            ->offset($offset)
            ->fetchAll());

require __DIR__ . '/../common/display.php';
