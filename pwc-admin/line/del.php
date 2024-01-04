<?php

require __DIR__.'/../common/start.php';

// データ削除
$model = new Model(TBL_LINE);
$del = $model->delete();
$del->where('id', $params['id']);
$del->execute();

redirect(AD_URL . '/line/?p='.$params['p']);
