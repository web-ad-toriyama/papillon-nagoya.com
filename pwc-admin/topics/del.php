<?php

require __DIR__.'/../common/start.php';

// データ削除
$model = new Model(TBL_TOPICS);
$del = $model->delete();
$del->where('id', $params['id']);
$del->execute();

redirect(AD_URL . '/topics/?p='.$params['p']);
