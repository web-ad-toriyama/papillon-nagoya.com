<?php

require __DIR__.'/../common/start.php';

// テンプレート設定
$templateFile = '/admin/topics/finish.html';

$csrf = $result = false;
$model = new Model(TBL_TOPICS);

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
    } elseif ($posts['tpl']) {
        // テンプレート登録
        $result = tpl($posts);
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
    $values = array(
        'show_flg'      => $posts['show_flg'],
        'published'     => $posts['published'],
        'title'         => $posts['title'],
        'detail'        => $posts['detail'],
        'created'       => date(DATE_FORMAT_STR),
        'updated'       => date(DATE_FORMAT_STR)
    );
    $ins = $model->insert();
    $ins->values($values);
    return $ins->execute();
}

////////////////////////////////////////////////////////////////////////////////
function save($model, $posts)
{
    $values = array(
        'show_flg'      => $posts['show_flg'],
        'published'     => $posts['published'],
        'title'         => $posts['title'],
        'detail'        => $posts['detail'],
        'updated'       => date(DATE_FORMAT_STR)
    );
    $upd = $model->update();
    $upd->values($values);
    $upd->where('id', $posts['id']);
    return $upd->execute();
}

////////////////////////////////////////////////////////////////////////////////
function tpl($posts)
{
    $model = new Model(TBL_TOPICS_TPL);
    $model->begin();
    // delete
    $del = $model->delete();
    $del->where('id', $posts['id']);
    if (!$del->execute()) {
        $model->rollback();
        return false;
    }
    if (!array_key_exists('del', $posts)) {
        // insert
        $values = array(
            'id'        => $posts['id'],
            'title'     => $posts['title'],
            'detail'    => $posts['detail'],
            'created'   => date(DATE_FORMAT_STR),
            'updated'   => date(DATE_FORMAT_STR)
        );
        $ins = $model->insert();
        $ins->values($values);
        if ($ins->execute() === false) {
            $model->rollback();
            return false;
        }
    }
    $model->commit();
    return true;
}

////////////////////////////////////////////////////////////////////////////////
function del($model, $posts)
{
    $del = $model->delete();
    $del->where('id', $posts['id']);
    return $del->execute();
}
