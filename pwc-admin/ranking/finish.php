<?php

require __DIR__.'/../common/start.php';

// テンプレート設定
$templateFile = '/admin/ranking/finish.html';

$csrf = $result = false;
$model = new Model(TBL_RANKING);

// 登録処理
if (Token::check()) {
    $csrf = true;
    if ($posts['edit']) {
        // 新規
        $result = add($model, $posts);
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
    $model->begin();
    if (del($model, $posts) === false) {
        $model->rollback();
        Logger::error(sprintf('ランキング情報の削除に失敗しました。 (PID=%s)', $posts['pid']));
        return false;
    }

    for ($i=1; $i<DISPLAY_RANKING_NO+1;$i++) {
        $values = array(
            'pid'       => $posts['pid'],
            'no'        => $i,
            'staff_id'  => $posts['staff_id_'.$i],
            'free_text' => $posts['free_text_'.$i],
            'created'   => date(DATE_FORMAT_STR),
            'updated'   => date(DATE_FORMAT_STR)
        );
        $ins = $model->insert();
        $ins->values($values);
        if ($ins->execute() === false) {
            $model->rollback();
            Logger::error(sprintf('ランキング情報の登録に失敗しました。 (PID=%s / NO=%s)', $posts['pid']), $i);
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
    $del->where('pid', $posts['pid']);
    return $del->execute();
}
