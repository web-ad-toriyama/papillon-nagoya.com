<?php

require __DIR__.'/../common/start.php';

// データ削除
$model = new Model(TBL_ENQUETE);
$del = $model->delete();
$del->where('id', $params['id']);
$del->execute();

redirect(AD_URL . '/enquete/?p='.$params['p']);
