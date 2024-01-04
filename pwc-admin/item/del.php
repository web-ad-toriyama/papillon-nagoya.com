<?php

require __DIR__.'/../common/start.php';

// データ削除
$model = new Model(TBL_ITEM);
$del = $model->delete();
$del->where('id', $params['id']);
$del->execute();

redirect(AD_URL . '/item/?pid='.$params['pid'].'&p='.$params['p']);
