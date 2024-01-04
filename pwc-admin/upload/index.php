<?php

require __DIR__.'/../common/start.php';

$templateFile = '/admin/upload/index.html';

$params['ext'] = 'jpg/gif/png';
if ($params['field'] == 'banner') {
	$baseWidth = 88;
	$baseHeight = 31;
} elseif ($params['field'] == 'movie_photo') {
	$baseWidth = IMAGE_MOVIE_SIZE_W;
	$baseHeight = IMAGE_MOVIE_SIZE_H;
} elseif ($params['field'] == 'movie') {
	$params['ext'] = 'mp4';
} elseif (strstr($params['field'],'event')) {
	// イベント用追加
	$baseWidth = IMAGE_SIZE_EVENT_PC_W;
	$baseHeight = IMAGE_SIZE_EVENT_PC_H;
} else {
	$baseWidth = IMAGE_SIZE_PC_W;
	$baseHeight = IMAGE_SIZE_PC_H;
}

$smarty->assign('base_width', $baseWidth);
$smarty->assign('base_height', $baseHeight);
require __DIR__ . '/../common/display.php';
