<?php

/*
    システムページ
 */

// データ取得
$model = new Model(TBL_SYSTEM);
$system = $model->find(1);

$smarty->assign('system', $system);    // システム
