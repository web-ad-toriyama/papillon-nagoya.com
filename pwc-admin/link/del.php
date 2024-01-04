<?php

require __DIR__.'/../common/start.php';


// データ削除
$model = new Model(TBL_LINK);
$del = $model->delete();
$del->where('id', $params['id']);
$del->execute();

// バナー削除
$dir = IMG_BANNER_DIR.'/';
if (File::exists($dir.$params['f'])) {
    $file = new File($dir.$params['f']);
    $ret = $file->delete();
}

redirect(AD_URL . '/link/?pid='.$params['pid'].'&p='.$params['p']);
