<?php

require_once __DIR__ . '/../common/start.php';

$templateFile = '/admin/analyze/index.html';

// パラメータ取得
$params['date'] = getParamDate();
$params['device'] = getParamDevice();
$params['file_name'] = getParamFileName();

// ページリスト取得
$file_list = getAnalyzeFileList();

$model = new Model(TBL_ANALYTICS);

// アクセス総数取得
$access['all'] = getAnalyzeDataAll($model,$params);

// アクセス数取得(時間別)
$access['time'] = getAnalyzeDataForTime($model,$params);

// オペレーティングシステム取得
$os = array('Windows','Mac','Android','iOS','docomo','au','SoftBank');
$access['os'] = getAnalyzeDataForOther($model,'os',$os,$params,$access['all']);

// ブラウザ取得
$browser = array('Internet Explorer','Chrome','Firefox','Safari','docomo','au','SoftBank');
$access['browser'] = getAnalyzeDataForOther($model,'browser',$browser,$params,$access['all']);

// リファラー取得
$access['referer'] = getAnalyzeDataForReferer($params);
// 存在する場合は件数の合計を取得
if (count($access['referer'])>0) {
	$all = 0;
	foreach ($access['referer'] as $v) {
		$all += $v['cnt'];
	}
	foreach ($access['referer'] as $k => $v) {
		$access['referer'][$k]['width'] = ceil(($v['cnt'] / $all) * 100);
	}
}

// キーワード取得
$access['search_words'] = getAnalyzeDataForSearchWords($params);
// 存在する場合は件数の合計を取得
if (count($access['search_words'])>0) {
	$all = 0;
	foreach ($access['search_words'] as $v) {
		$all += $v['cnt'];
	}
	foreach ($access['search_words'] as $k => $v) {
		$access['search_words'][$k]['width'] = ceil(($v['cnt'] / $all) * 100);
	}
}

$smarty->assign('access',$access);
$smarty->assign('file_list',$file_list);

require_once __DIR__ . '/../common/display.php';
