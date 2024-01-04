<?php

require __DIR__.'/../common/start.php';

// テンプレート設定
$templateFile = '/admin/impressions/finish.html';

$csrf = $result = false;
$model = new Model(TBL_IMPRESSIONS);

// 登録処理
if (Token::check()) {
    $csrf = true;
    if ($posts['edit']) {
        if ($posts['id'] == '') {
            // 新規
            $result = add($model, $posts);
        } else {
            if ($posts['del'] == 1) {
                // 削除
                $result = del($model, $posts);
            } else {
                // 更新
                $result = save($model, $posts);
            }
        }
    } elseif ($posts['sort']) {
        // 並べ替え
        $result = seq($model, $posts);
    } else {
        // 例外
        $result = false;
    }
}

$smarty->assign('csrf', $csrf);
$smarty->assign('result', $result);

require __DIR__ . '/../common/display.php';

////////////////////////////////////////////////////////////////////////////////
function add($model, $posts)
{
    $sel = $model->select();
    $seq = $sel->fetchMax('seq');
    $values = array(
        'name'      => $posts['name'],
        'show_flg'  => $posts['show_flg'],
        'color_flg' => $posts['color_flg'],
        'seq'       => $seq+1,
        'created'   => date(DATE_FORMAT_STR),
        'updated'   => date(DATE_FORMAT_STR)
    );
    $ins = $model->insert();
    $ins->values($values);
    return $ins->execute();
}

////////////////////////////////////////////////////////////////////////////////
function save($model, $posts)
{
    $values = array(
        'name'      => $posts['name'],
        'staff_id'  => $posts['staff_id'],
        'show_flg'  => $posts['show_flg'],
        'age'       => $posts['age'],
        'use_count' => $posts['use_count'],
        'use_year'  => $posts['use_year'],
        'use_month' => $posts['use_month'],
        'use_day'   => $posts['use_day'],
        'massage'   => $posts['massage'],
        'kaishun'   => $posts['kaishun'],
        'service'   => $posts['service'],
        'total'     => $posts['total'],
        'comment'   => $posts['comment'],
        'updated'   => date(DATE_FORMAT_STR)
    );
    $upd = $model->update();
    $upd->values($values);
    $upd->where('id', $posts['id']);
    return $upd->execute();
}

////////////////////////////////////////////////////////////////////////////////
function seq($model, $posts)
{
    if ($posts['seq'] == '') {
        return false;
    }
    $index = 1;
    $seq = explode(',', $posts['seq']);
    foreach ($seq as $id) {
        $values = array('seq' => $index);
        $upd = $model->update();
        $upd->values($values);
        $upd->where('id', $id);
        $result = $upd->execute();
        $index++;
    }
    return $result;
}

////////////////////////////////////////////////////////////////////////////////
function del($model, $posts)
{
    $del = $model->delete();
    $del->where('id', $posts['id']);
    return $del->execute();
}
