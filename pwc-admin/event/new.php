<?php

require __DIR__ . '/../common/start.php';

// テンプレート設定
$templateFile = '/admin/event/edit.html';

// データ件数取得
$model = new Model(TBL_EVENT);
$sel = $model->select();
$cnt = $sel->fetchCount();

if ($cnt >= EVENT_MAX) {
	redirect(AD_URL . '/event/');
}

require __DIR__ . '/../common/display.php';
