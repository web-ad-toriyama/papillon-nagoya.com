<?php

require __DIR__.'/../common/start.php';

// テンプレート設定
$templateFile = '/admin/line/edit.html';

$smarty->assign('result', $result);

require __DIR__ . '/../common/display.php';
