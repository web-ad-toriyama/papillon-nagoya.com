<?php

require __DIR__.'/../common/start.php';

// テンプレート設定
$templateFile = '/admin/staff/photo.html';

// 画像情報取得
$model = new Model(TBL_STAFF_PHOTO);
$sel = $model->select();
$data = h($sel->fields('file_name')
              ->where('staff_id', $params['id'])
              ->order('seq')
              ->fetchAll());
// 動画情報取得
$model = new Model(TBL_STAFF_MOVIE);
$sel = $model->select();
$temp = h($sel->fields('file_name,movie_file_name')
              ->where('staff_id', $params['id'])
              ->fetchRow());
if (array_key_exists('file_name', (array)$temp)){
	$data['movie']['file_name'] = $temp['file_name'];
} else {
	$data['movie']['file_name'] = '';
}
if (array_key_exists('movie_file_name', (array)$temp)){
	$data['movie']['movie_file_name'] = $temp['movie_file_name'];
} else {
	$data['movie']['movie_file_name'] = '';
}

// スタッフ名称取得
$model = new Model(TBL_STAFF);
$sel = $model->select();
$temp = h($sel->fields('name')->where('id',$params['id'])->fetchRow());
$smarty->assign('staff_name',$temp['name']);

require __DIR__ . '/../common/display.php';
