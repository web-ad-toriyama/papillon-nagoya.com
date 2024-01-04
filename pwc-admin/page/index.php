<?php

require_once __DIR__ . '/../common/start.php';

$templateFile = '/admin/page/index.html';

if (isset($params['name'])) {
    $page_name = $params['name'];
} else {
    $page_name = 'index';
}

// データ取得
$model = new Model(TBL_PAGE);
$sel = $model->select()->where('name', $page_name);
$data = $sel->fetchRow();

if ($posts['edit']) {
    // ページ名のデータが存在するか確認する。
    $sel = $model->select()->where('name', $posts['page_name']);
    $cnt = $sel->fetchCount();
    if ($cnt == 0) {
        // 新規
        $ins = $model->insert();
        $ins->values([
            'name' => $posts['page_name'],
            'title' => $posts['title'],
            'keywords' => $posts['keywords'],
            'description' => $posts['description'],
            'h1' => $posts['h1'],
            'h2' => $posts['h2'],
            'created' => date(DATE_FORMAT_STR),
            'updated' => date(DATE_FORMAT_STR)
        ]);
        $ins->execute();
    } else {
        // 更新
        $upd = $model->update();
        $upd->values([
            'name' => $posts['page_name'],
            'title' => $posts['title'],
            'keywords' => $posts['keywords'],
            'description' => $posts['description'],
            'h1' => $posts['h1'],
            'h2' => $posts['h2'],
            'updated' => date(DATE_FORMAT_STR)
        ]);
        $upd->where('name', $posts['page_name']);
        $result = $upd->execute();
    }
    redirect(AD_URL . '/page/');
}

$smarty->assign('page_name', $page_name);

require_once __DIR__ . '/../common/display.php';
