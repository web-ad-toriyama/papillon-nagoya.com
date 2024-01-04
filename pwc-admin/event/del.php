<?php

require __DIR__.'/../common/start.php';

// データ削除
$model = new Model(TBL_EVENT);
$del = $model->delete();
$del->where('id', $params['id']);
$del->execute();

// 3枚分(PC/MB/SP)の画像を削除する
$delFileName[] = IMG_EVENT_DIR.'/'.$params['file_name'];
$delFileName[] = IMG_EVENT_DIR.'/'.IMAGE_MB_SUFFIX.$params['file_name'];
$delFileName[] = IMG_EVENT_DIR.'/'.IMAGE_SP_SUFFIX.$params['file_name'];
foreach ($delFileName as $v) {
    if (File::exists($v)) {
        $file = new File($v);
        if ($file->delete() === false) {
            Logger::info(sprintf("イベント画像の削除に失敗しました。(ファイル名=%s)", $v));
        }
    }
}

redirect(AD_URL . '/event/');
