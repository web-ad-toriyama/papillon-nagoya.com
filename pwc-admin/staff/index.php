<?php

require __DIR__.'/../common/start.php';

// テンプレート設定
$templateFile = '/admin/staff/index.html';

// データ件数取得(2015/0622 スタッフ検索対応)
$model = new Model(TBL_STAFF);
$sel = $model->select();
if ($params['search_name'] != '') {
    $sel->whereLike('name','%'.$params['search_name'].'%');
}
$cnt = $sel->fetchCount();


// ページネーション生成
$offset = pagination($cnt, PAGER_ADMIN_LIST,'/?p=%page%&search_name='.$params['search_name']);

// データ一覧取得(2015/0622 スタッフ検索対応)
$sel = $model->select();

if ($params['search_name'] != '') {
    $data = h($sel->order('id DESC')
                ->order('show_flg,seq')
                ->whereLike('name','%'.$params['search_name'].'%')
                ->limit(PAGER_ADMIN_LIST)
                ->offset($offset)
                ->fetchAll());
} else {
    $data = h($sel->order('id DESC')
                ->order('show_flg,seq')
                ->limit(PAGER_ADMIN_LIST)
                ->offset($offset)
                ->fetchAll());
}


if (count($data)>0) {
    foreach ($data as $k => $v) {
		// サムネイル画像(1枚目)取得
        $data[$k]['photo'] = getStaffPhoto($v['id'], 1);
		// クラス情報取得
		$data[$k]['class'] = getStaffClass($v['id']);
		// チェック情報取得
		$data[$k]['check'] = getStaffCheck($v['id']);
    }
}

require __DIR__ . '/../common/display.php';
