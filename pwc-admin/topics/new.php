<?php

require __DIR__.'/../common/start.php';

// テンプレート設定
$templateFile = '/admin/topics/edit.html';

// テンプレート取得
$model = new Model(TBL_TOPICS_TPL);
$data = h($model->find($params['template_id']));

$sel = $model->select();
$data2 = h($sel->fetchAll());

$a_template = array(
    ''  => '未選択',
    '1' => 'テンプレート1',
    '2' => 'テンプレート2',
    '3' => 'テンプレート3',
    '4' => 'テンプレート4',
    '5' => 'テンプレート5',
);
if (count($data2) > 0 ) {
    foreach ($data2 as $value) {
        $a_template[$value['id']] .= ' ['.$value['title'].']';
    }
}

// IDをクリアしないと編集処理になる為
$data['id'] = '';

$smarty->assign('a_template', $a_template);
$smarty->assign('template_id', $params['template_id']);

require __DIR__ . '/../common/display.php';
