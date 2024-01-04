<?php

require __DIR__ . '/../common/start.php';

// テンプレート設定
$templateFile = '/admin/event/finish.html';

$csrf = $result = false;
$model = new Model(TBL_EVENT);

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
    } elseif ($posts['sel']) {
        // イベント選択
        $result = sel($model, $posts);
    } elseif ($posts['btn_seq']) {
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
    // 並び順取得
    $sel = $model->select();
    $seq = $sel->fetchMax('seq')+1;

    $newDir = IMG_EVENT_DIR;
    $values = array(
        'file_name'=> '',
        'selected' => SET_OFF,
        'seq'      => $seq,
        'created'  => date(DATE_FORMAT_STR),
        'updated'  => date(DATE_FORMAT_STR)
    );
    // tempからファイル移動
    if ($posts['event'] != '') {
        $tempFileName = IMG_TEMP_DIR.'/'.$posts['event'];
        if (File::exists($tempFileName)) {
            $file = new File($tempFileName);
            if ($file->move($newDir) === true) {
                $values['file_name'] = $posts['event'];
                // 画像ファイル名
                $newFileName = $newDir.'/'.$posts['event'];
                $newMbFileName = $newDir.'/'.IMAGE_MB_SUFFIX.$posts['event'];
                $newSpFileName = $newDir.'/'.IMAGE_SP_SUFFIX.$posts['event'];
                // 移動したファイルからMB版・SP版の画像を生成
                imageSizeConvert($newDir.'/'.$posts['event'], $newMbFileName, IMAGE_SIZE_EVENT_MB_W, "", 0);
                imageSizeConvert($newDir.'/'.$posts['event'], $newSpFileName, IMAGE_SIZE_EVENT_SP_W, "", 0);
            }
        }
        // 旧ファイルがあれば削除
        delFile($posts['event_old']);
    } else {
        // 旧ファイルのみ存在の場合はそのまま維持する
        $values['file_name'] = $posts['event_old'];
    }

    $ins = $model->insert();
    $ins->values($values);

    return $ins->execute();
}

function delFile($fileName)
{
    // 3枚分(PC/MB/SP)の画像を削除する
    $delFileName[] = IMG_EVENT_DIR.'/'.$fileName;
    $delFileName[] = IMG_EVENT_DIR.'/'.IMAGE_MB_SUFFIX.$fileName;
    $delFileName[] = IMG_EVENT_DIR.'/'.IMAGE_SP_SUFFIX.$fileName;
    foreach ($delFileName as $v) {
        if (File::exists($v)) {
            $file = new File($v);
            if ($file->delete() === false) {
                Logger::info(sprintf("イベント画像の削除に失敗しました。(ファイル名=%s)", $v));
                return false;
            }
        }
    }
}

////////////////////////////////////////////////////////////////////////////////
function save($model, $posts)
{
    $newDir = IMG_EVENT_DIR;
    $values = array(
        'updated'  => date(DATE_FORMAT_STR)
    );
    // tempからファイル移動
    if ($posts['event'] != '') {
        $tempFileName = IMG_TEMP_DIR.'/'.$posts['event'];
        if (File::exists($tempFileName)) {
            $file = new File($tempFileName);
            if ($file->move($newDir) === true) {
                $values['file_name'] = $posts['event'];
                // 画像ファイル名
                $newFileName = $newDir.'/'.$posts['event'];
                $newMbFileName = $newDir.'/'.IMAGE_MB_SUFFIX.$posts['event'];
                $newSpFileName = $newDir.'/'.IMAGE_SP_SUFFIX.$posts['event'];
                // 移動したファイルからMB版・SP版の画像を生成
                imageSizeConvert($newDir.'/'.$posts['event'], $newMbFileName, IMAGE_SIZE_EVENT_MB_W, "", 0);
                imageSizeConvert($newDir.'/'.$posts['event'], $newSpFileName, IMAGE_SIZE_EVENT_SP_W, "", 0);
            }
        }
        // 旧ファイルがあれば削除
        delFile($posts['event_old']);
    } else {
        // 旧ファイルのみ存在の場合はそのまま維持する
        $values['file_name'] = $posts['event_old'];
    }
    $upd = $model->update();
    $upd->values($values);
    $upd->where('id', $posts['id']);

    return $upd->execute();
}

////////////////////////////////////////////////////////////////////////////////
function sel($model, $posts)
{
    $values = array('selected' => SET_OFF);
    $upd = $model->update();
    $upd->values($values);
    $upd->execute();

    if(count($posts['event_sel'])>0) {
        foreach($posts['event_sel'] as $val) {
            $values = array('selected' => SET_ON);
            $upd = $model->update();
            $upd->values($values);
            $upd->where('id', $val);
            $upd->execute();
        }
    }
    return true;
}

////////////////////////////////////////////////////////////////////////////////
function seq($model, $posts)
{
    if ($posts['seq'] == '') {
        return false;
    }
    $seq = explode(',', $posts['seq']);
    $index = count($seq);
    foreach ($seq as $id) {
        $values = array('seq' => $index);
        $upd = $model->update();
        $upd->values($values);
        $upd->where('id', $id);
        $result = $upd->execute();
        $index--;
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
