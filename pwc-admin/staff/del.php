<?php

require __DIR__.'/../common/start.php';

// クラス情報削除
$model = new Model(TBL_STAFF_CLASS);
$del = $model->delete();
$del->where('staff_id', $params['id']);
$del->execute();

// チェック情報削除
$model = new Model(TBL_STAFF_CHECK);
$del = $model->delete();
$del->where('staff_id', $params['id']);
$del->execute();

// アイテム情報削除
$model = new Model(TBL_STAFF_ITEM);
$del = $model->delete();
$del->where('staff_id', $params['id']);
$del->execute();

// スケジュール情報削除
$model = new Model(TBL_STAFF_SCH);
$del = $model->delete();
$del->where('staff_id', $params['id']);
$del->execute();

// デフォルトスケジュール情報削除
$model = new Model(TBL_STAFF_SCH_DEF);
$del = $model->delete();
$del->where('staff_id', $params['id']);
$del->execute();

// サムネイル情報削除
$model = new Model(TBL_STAFF_PHOTO);
$del = $model->delete();
$del->where('staff_id', $params['id']);
$del->execute();

// 動画情報削除
$model = new Model(TBL_STAFF_MOVIE);
$del = $model->delete();
$del->where('staff_id', $params['id']);
$del->execute();

// 基本情報削除
$model = new Model(TBL_STAFF);
$del = $model->delete();
$del->where('id', $params['id']);
$del->execute();

// ディレクトリ削除
$dirPath = IMG_STAFF_DIR.'/'.$params['id'];
if (Dir::exists($dirPath)) {
    $dir = new Dir($dirPath);
    $dir->delete();
}

redirect(AD_URL . '/staff/?p='.$params['p']);
