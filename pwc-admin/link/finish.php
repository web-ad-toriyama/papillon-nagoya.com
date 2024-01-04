<?php

require __DIR__ . '/../common/start.php';

// テンプレート設定
$templateFile = '/admin/link/finish.html';

$csrf = $result = false;
$model = new Model(TBL_LINK);

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
    } elseif ($posts['edit_free']) {
        // フリースペース
        $result = add_free($posts);
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
    $seq = $sel->where('pid', $posts['pid'])
               ->fetchMax('seq');
    $values = array(
        'pid'       => $posts['pid'],
        'show_flg'  => $posts['show_flg'],
        'seq'       => $seq + 1,
        'title'     => $posts['title'],
        'url'       => $posts['url'],
        'file_name' => '',
        'created'   => date(DATE_FORMAT_STR),
        'updated'   => date(DATE_FORMAT_STR)
    );
    // 画像移動
    $result = moveImage($posts['banner_name']);
    if ($result === false) {
        return false;
    } else {
        $values['file_name'] = $posts['banner_name'];
    }
    // データ登録
    $ins = $model->insert();
    $ins->values($values);
    if ($ins->execute() === false) {
        // データ登録失敗時はアップロード済みサムネイルも削除する
        $result = delImage($posts['banner_name']);
        if ($result === false) {
            return false;
        }
        Logger::error('バナーデータの新規登録に失敗しました。');
        return false;
    }
    return ture;
}

////////////////////////////////////////////////////////////////////////////////
function add_free($posts)
{
    $model = new Model(TBL_LINK_FREE);
    $del = $model->delete();
    $del->where('pid', $posts['pid']);
    if ($del->execute() === false) {
        Logger::error('フリースペースの削除に失敗しました。');
        return false;
    }

    $values = array(
        'pid'       => $posts['pid'],
        'detail_pc' => $posts['detail_pc'],
        'detail_mb' => $posts['detail_mb'],
        'detail_sp' => $posts['detail_sp'],
        'created'   => date(DATE_FORMAT_STR),
        'updated'   => date(DATE_FORMAT_STR)
    );
    // データ登録
    $ins = $model->insert();
    $ins->values($values);
    if ($ins->execute() === false) {
        Logger::error('フリースペースの登録に失敗しました。');
        return false;
    }

    return ture;
}

////////////////////////////////////////////////////////////////////////////////
function save($model, $posts)
{
    $values = array(
        'show_flg'  => $posts['show_flg'],
        'title'     => $posts['title'],
        'url'       => $posts['url'],
        'file_name' => '',
        'updated'   => date(DATE_FORMAT_STR)
    );
    // バナー画像再アップ確認
    if ($posts['banner_name'] != '') {
        // 画像移動
        $result = moveImage($posts['banner_name']);
        if ($result === false) {
            return false;
        }
        // 旧ファイル削除
        $result = delImage($posts['banner_old']);
        if ($result === false) {
            // 旧ファイルの削除に失敗した場合は、新ファイルも削除しておく
            delImage($posts['banner_name']);
            return false;
        }
        // バナー画像設定
        $values['file_name'] = $posts['banner_name'];
    } else {
        // 旧ファイルを維持する
        $values['file_name'] = $posts['banner_old'];
    }
    // データ更新
    $upd = $model->update();
    $upd->values($values);
    $upd->where('id', $posts['id']);
    if ($upd->execute() === false) {
        Logger::error(sprintf('バナーデータの更新に失敗しました。 (ID=%s)', $posts['id']));
        return false;
    }
    return true;
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
    // データ削除
    $model->begin();
    $del = $model->delete();
    $del->where('id', $posts['id']);
    if ($del->execute() === false) {
        $model->rollback();
        Logger::error(sprintf('バナーデータの削除に失敗しました。 (ID=%s)', $posts['id']));
        return false;
    }
    // バナー画像削除
    if (delImage($posts['banner_old']) === false) {
        $model->rollback();
        return false;
    }
    $model->commit();
    return true;
}

////////////////////////////////////////////////////////////////////////////////
function moveImage($fileName)
{
    // バナー画像移動
    $newDir = IMG_BANNER_DIR.'/';
    $tempFileName = IMG_TEMP_DIR.'/'.$fileName;
    if (File::exists($tempFileName)) {
        $file = new File($tempFileName);
        if ($file->move($newDir) === true) {
            // 画像ファイル名
            return true;
        } else {
            Logger::error(sprintf('バナー画像の移動に失敗しました (ファイル名=%s)', $posts['banner_name']));
            return false;
        }
    } else {
        Logger::error('バナー画像が添付ディレクトリに存在していません。');
        return false;
    }
    return false;
}

////////////////////////////////////////////////////////////////////////////////
function delImage($fileName)
{
    $dir = IMG_BANNER_DIR.'/';
    if (File::exists($dir.$fileName)) {
        $file = new File($dir.$fileName);
        if ($file->delete() === true) {
            return true;
        } else {
            Logger::error(sprintf('バナー画像の削除に失敗しました (ファイル名=%s)', $fileName));
            return false;
        }
    } else {
        Logger::error('バナー画像がディレクトリに存在していません。');
        return false;
    }
    return false;
}
