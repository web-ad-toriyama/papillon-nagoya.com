<?php

require __DIR__.'/../common/start.php';

// テンプレート設定
$templateFile = '/admin/system/index.html';

// データ取得
$model = new Model(TBL_SYSTEM);
$data = h($model->find(1));

if ($posts['register']) {
	$values = array(
		'id'   => 1,
		'detail' => $posts['detail'],
		'created'   => date(DATE_FORMAT_STR),
		'updated'   => date(DATE_FORMAT_STR)
	);
	// 削除
	$del = $model->delete();
	$del->where('id', 1);
	if ($del->execute() === false) {
		Logger::error(sprintf('システム情報の削除に失敗しました。'));
	}
	// 登録
	$ins = $model->insert();
	$ins->values($values);
	if ($ins->execute() === false) {
		Logger::error(sprintf('システム情報の登録に失敗しました。'));
	}
	redirect(AD_URL . '/system/');
}

require __DIR__ . '/../common/display.php';