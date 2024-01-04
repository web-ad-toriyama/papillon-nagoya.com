<?php

require __DIR__.'/../common/start.php';

// テンプレート設定
$templateFile = '/admin/topics/tpl.html';

if (is_null($params['id'])) {
    $params['id'] = 1;
}

// データ取得
$model = new Model(TBL_TOPICS_TPL);
$data = h($model->find($params['id']));

$a_template = array(
    '1' => 'テンプレート1',
    '2' => 'テンプレート2',
    '3' => 'テンプレート3',
    '4' => 'テンプレート4',
    '5' => 'テンプレート5',
);

$smarty->assign('a_template', $a_template);
$smarty->assign('template_id', $params['id']);
require __DIR__ . '/../common/display.php';
