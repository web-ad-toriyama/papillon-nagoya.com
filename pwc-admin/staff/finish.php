<?php

require __DIR__.'/../common/start.php';

// テンプレート設定
$templateFile = '/admin/staff/finish.html';

$csrf = $result = false;
$model = new Model(TBL_STAFF);

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
    } elseif ($posts['img_edit']) {
        // サムネイル登録
        $result = addImage($posts);
    } else {
        // 例外
        $result = false;
    }
}

$smarty->assign('csrf', $csrf);
$smarty->assign('result', $result);

require __DIR__ . '/../common/display.php';

////////////////////////////////////////////////////////////////////////////////
function addScheduleDef($id, $posts)
{
    global $form;

    $model = delScheduleDef($id);
    if (!$model) {
        return false;
    }

    $week = getDayOfWeek();
    // 1週間分ループ
    foreach ($week as $day => $val) {
        // LAST or TEL確認 or お休みの判定
        $allowMode = 0;
        if (is_array($posts['allow_mode'][$day])) {
            $allowMode = max($posts['allow_mode'][$day]);
        }
        if ($posts['reserve_icon'][$day] == NULL) {
            $posts['reserve_icon'][$day] = DEFAULT_RESERVE_ICON;
        }        
        // お休み
        if ($allowMode == SCH_TYPE_REST) {
            $going_hour = "";
            $going_min  = "";
            $leave_hour = "";
            $leave_min  = "";
        } elseif ($allowMode == SCH_TYPE_TEL) {
            // TEL確認
            $going_hour = "";
            $going_min  = "";
            $leave_hour = "";
            $leave_min  = "";
        } elseif ($allowMode == SCH_TYPE_LAST) {
            // LAST
            $going_hour = $posts['going_hour'][$day];
            $going_min  = $posts['going_min'][$day];
            $leave_hour = 24+SHOP_TODAY;
            $leave_min  = max($form['min']);
        } else {
            // 出勤状態
            $going_hour = $posts['going_hour'][$day];
            $going_min  = $posts['going_min'][$day];
            $leave_hour = $posts['leave_hour'][$day];
            $leave_min  = $posts['leave_min'][$day];
        }
        $values = array(
            'staff_id'   => $id,
            'day'        => $day,
            'going_hour' => $going_hour,
            'going_min'  => $going_min,
            'leave_hour' => $leave_hour,
            'leave_min'  => $leave_min,
            'allow_mode' => $allowMode,
            'reserve_icon' => $posts['reserve_icon'][$day],
            // 'free_text'  => $posts['free_text'][$day],
            'created'    => date(DATE_FORMAT_STR),
            'updated'    => date(DATE_FORMAT_STR)
         );
        // 登録
        $ins = $model->insert();
        $ins->values($values);
        if ($ins->execute() === false) {
            Logger::error(sprintf('デフォルトスケジュール情報の登録に失敗しました。 (日付=%s / ID=%s)', $day, $id));
            return false;
        }
    }
    return true;
}

////////////////////////////////////////////////////////////////////////////////
function addImage($posts)
{
    // サムネイル情報削除
    $model = delThumb($posts['id']);
    if (!$model) {
        return false;
    }
    // 画像移動先ディレクトリ作成
    $newDir = IMG_STAFF_DIR.'/'.$posts['id'];
    if (!Dir::exists($newDir)) {
        Dir::create($newDir);
    }
    // 画像枚数分繰り返し
    for ($i=1; $i<IMAGE_COUNT+1; $i++) {
        $values = array(
            'staff_id'  => $posts['id'],
            'no'        => $i,
            'seq'       => $i,
            'file_name' => "",
            'created'   => date(DATE_FORMAT_STR),
            'updated'   => date(DATE_FORMAT_STR)
        );
        // 削除チェック有り
        if (array_key_exists('photo_del'.$i, $posts)) {
            delFile($posts['id'], $posts['photo'.$i.'_old']);
        } else {
            // 画像があればtempからファイル移動
            if ($posts['photo'.$i] != '') {
                $tempFileName = IMG_TEMP_DIR.'/'.$posts['photo'.$i];
                if (File::exists($tempFileName)) {
                    $file = new File($tempFileName);
                    if ($file->move($newDir) === true) {
                        $values['file_name'] = $posts['photo'.$i];
                        // 画像ファイル名
                        $newFileName = $newDir.'/'.$posts['photo'.$i];
                        $newMbFileName = $newDir.'/'.IMAGE_MB_SUFFIX.$posts['photo'.$i];
                        $newSpFileName = $newDir.'/'.IMAGE_SP_SUFFIX.$posts['photo'.$i];
                        // 移動したファイルからMB版・SP版の画像を生成
                        imageSizeConvert($newDir.'/'.$posts['photo'.$i], $newMbFileName, IMAGE_SIZE_MB_W, "", 0);
                        imageSizeConvert($newDir.'/'.$posts['photo'.$i], $newSpFileName, IMAGE_SIZE_SP_W, "", 0);
                    }
                }
                // 旧ファイルがあれば削除
                delFile($posts['id'], $posts['photo'.$i.'_old']);
            } else {
                // 旧ファイルのみ存在の場合はそのまま維持する
                $values['file_name'] = $posts['photo'.$i.'_old'];
            }
        }
        $ins = $model->insert();
        $ins->values($values);
        if ($ins->execute() === false) {
            // データ登録失敗時はアップロード済みサムネイルも削除する
            delFile($posts['id'], $values['file_name']);
            return false;
        }
    }

    // 画像並び替え
    if ($posts['seq'] != '') {
        $index = 1;
        $seq = explode(',', $posts['seq']);
        foreach ($seq as $no) {
            $values = array('seq' => $index);
            $upd = $model->update();
            $upd->values($values);
            $upd->where('staff_id', $posts['id']);
            $upd->where('no', $no);
            if ($upd->execute() === false) {
                return false;
            }
            $index++;
        }
    }

    // 動画ファイル
    $modelMovie = delMovie($posts['id']);
    if (!$modelMovie) {
        return false;
    }

    $values = array(
        'staff_id'  => $posts['id'],
        'file_name' => "",
        'movie_file_name' => "",
        'created'   => date(DATE_FORMAT_STR),
        'updated'   => date(DATE_FORMAT_STR)
    );

    $arr_movie = array('file_name'=>'movie_photo','movie_file_name'=>'movie');
    foreach ($arr_movie as $k => $v) {
        // 削除チェック有り
        if (array_key_exists($v.'_del', $posts)) {
            delFile($posts['id'], $posts[$v.'_old']);
        } else {
            // 画像があればtempからファイル移動
            if ($posts[$v] != '') {
                $tempFileName = IMG_TEMP_DIR.'/'.$posts[$v];
                if (File::exists($tempFileName)) {
                    $file = new File($tempFileName);
                    if ($file->move($newDir) === true) {
                        $newFileName = $newDir.'/'.$posts[$v];
                        $file = new File($newFileName);
                        $file->rename(IMAGE_MOVIE_SUFFIX.$posts[$v]);
                        $values[$k] = IMAGE_MOVIE_SUFFIX.$posts[$v];
                    }
                }
                // 旧ファイルがあれば削除
                delFile($posts['id'], $posts[$v.'_old']);
            } else {
                // 旧ファイルのみ存在の場合はそのまま維持する
                $values[$k] = $posts[$v.'_old'];
            }
        }
    }

    $ins = $modelMovie->insert();
    $ins->values($values);
    if ($ins->execute() === false) {
        // データ登録失敗時はアップロード済みサムネイルも削除する
        delFile($posts['id'], $values['file_name']);
        delFile($posts['id'], $values['movie_file_name']);
        return false;
    }

    return true;
}

////////////////////////////////////////////////////////////////////////////////
function add($model, $posts)
{
    $model->begin();
    // 基本情報登録
    $sel = $model->select();
    $seq = $sel->fetchMax('seq');
    $values = getStaffValue($posts, $seq+1);
    $ins = $model->insert();
    $ins->values($values);
    $id = $ins->execute();
    if ($id === false) {
        $model->rollback();
        return false;
    }

    // クラス情報登録(delete⇒insert)
    if (!addClass($id, $posts)) {
        $model->rollback();
        return false;
    }

    // チェック情報登録(delete⇒insert)
    if (!addCheck($id, $posts)) {
        $model->rollback();
        return false;
    }

    // 項目情報登録(delete⇒insert)
    if (!addItem($id, $posts)) {
        $model->rollback();
        return false;
    }

    // デフォルトスケジュール登録(delete⇒insert)
    if (!addScheduleDef($id, $posts)) {
        $model->rollback();
        return false;
    }

    $model->commit();
    $sel = $model->select();
    $data = h($sel->fetchAll());

    foreach($data as $key =>$value){
        $values = array(
            'seq' => $value['seq'] + 1,
        );             

        $upd = $model->update();
        $upd->values($values);
        $upd->where('id', $value['id']); 
        $upd->execute();
    }    
    
    return true;
}

////////////////////////////////////////////////////////////////////////////////
function save($model, $posts)
{
    $model->begin();
    // 基本情報更新
    $values = getStaffValue($posts);
    $upd = $model->update();
    $upd->values($values);
    $upd->where('id', $posts['id']);
    if ($upd->execute() === false) {
        $model->rollback();
        return false;
    }

    // クラス情報登録(delete⇒insert)
    if (!addClass($posts['id'], $posts)) {
        $model->rollback();
        return false;
    }

    // チェック情報登録(delete⇒insert)
    if (!addCheck($posts['id'], $posts)) {
        $model->rollback();
        return false;
    }

    // 項目情報登録(delete⇒insert)
    if (!addItem($posts['id'], $posts)) {
        $model->rollback();
        return false;
    }

    // デフォルトスケジュール登録(delete⇒insert)
    if (!addScheduleDef($posts['id'], $posts)) {
        $model->rollback();
        return false;
    }

    $model->commit();
    return true;
}

function getStaffValue($posts, $seq = null)
{
    $values = array();
    if (!is_null($seq)) {
        // 新規登録用
        $values = array(
            'show_flg'      => $posts['show_flg'],
            'new_flg'       => $posts['new_flg'],
            'cover_flg'     => $posts['cover_flg'],
            'rest_flg'      => $posts['rest_flg'],
            'seq'           => 0,
            'published'     => $posts['published'],
            'name'          => $posts['name'],
            'age'           => $posts['age'],
            't'             => $posts['t'],
            'b'             => $posts['b'],
            'c'             => $posts['c'],
            'w'             => $posts['w'],
            'h'             => $posts['h'],
            'url'           => $posts['url'],
            'youtube'       => $posts['youtube'],
            'short_comment' => $posts['short_comment'],
            'long_comment1' => $posts['long_comment1'],
            'long_comment2' => $posts['long_comment2'],
            'long_comment3' => $posts['long_comment3'],
            'created'       => date(DATE_FORMAT_STR),
            'updated'       => date(DATE_FORMAT_STR)
        );
    } else {
        // 更新登録用
        $values = array(
            'show_flg'      => $posts['show_flg'],
            'new_flg'       => $posts['new_flg'],
            'cover_flg'     => $posts['cover_flg'],
            'rest_flg'      => $posts['rest_flg'],
            'published'     => $posts['published'],
            'name'          => $posts['name'],
            'age'           => $posts['age'],
            't'             => $posts['t'],
            'b'             => $posts['b'],
            'c'             => $posts['c'],
            'w'             => $posts['w'],
            'h'             => $posts['h'],
            'url'           => $posts['url'],
            'youtube'       => $posts['youtube'],
            'short_comment' => $posts['short_comment'],
            'long_comment1' => $posts['long_comment1'],
            'long_comment2' => $posts['long_comment2'],
            'long_comment3' => $posts['long_comment3'],            
            'updated'       => date(DATE_FORMAT_STR)
        );
    }
    return $values;
}

////////////////////////////////////////////////////////////////////////////////
function addClass($id, $posts)
{
    global $form;
    // クラスデータ削除
    $model = delClass($id);
    if (!$model) {
        return false;
    }
    // クラスデータ新規登録
    if (count($form['class']['name']) > 0) {
        foreach ($form['class']['name'] as $k => $v) {
            if (array_key_exists('class_flg'.$k, $posts)) {
                $values = array(
                    'staff_id' => $id,
                    'no'       => $k,
                    'value'    => $posts['class_flg'.$k],
                    'created'  => date(DATE_FORMAT_STR),
                    'updated'  => date(DATE_FORMAT_STR)
                );
                $ins = $model->insert();
                $ins->values($values);
                if ($ins->execute() === false) {
                    Logger::error(sprintf('スタッフクラス情報の登録に失敗しました。 (ID=%s)', $id));
                    return false;
                }
            }
        }
    }
    return true;
}

////////////////////////////////////////////////////////////////////////////////
function addCheck($id, $posts)
{
    // チェックデータ削除
    $model = delCheck($id);
    if (!$model) {
        return false;
    }
    // チェックデータ新規登録
    if (array_key_exists('check_flg', $posts)) {
        foreach ($posts['check_flg'] as $v) {
            $values = array(
                'staff_id' => $id,
                'value'    => $v,
                'created'  => date(DATE_FORMAT_STR),
                'updated'  => date(DATE_FORMAT_STR)
            );
            $ins = $model->insert();
            $ins->values($values);
            if ($ins->execute() === false) {
                Logger::error(sprintf('スタッフチェック情報の登録に失敗しました。 (ID=%s)', $id));
                return false;
            }
        }
    }
    return true;
}

////////////////////////////////////////////////////////////////////////////////
function addItem($id, $posts)
{
    // 項目データ削除
    $model = delItem($id);
    if (!$model) {
        return false;
    }
    // チェックデータ新規登録
    if (array_key_exists('item_flg', $posts)) {
        foreach ($posts['item_flg'] as $k => $v) {
            $values = array(
                'staff_id' => $id,
                'no'       => $k,
                'value'    => $v,
                'created'  => date(DATE_FORMAT_STR),
                'updated'  => date(DATE_FORMAT_STR)
            );
            $ins = $model->insert();
            $ins->values($values);
            if ($ins->execute() === false) {
                Logger::error(sprintf('スタッフ項目情報の登録に失敗しました。 (ID=%s)', $id));
                return false;
            }
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
function delClass($id)
{
    $model = new Model(TBL_STAFF_CLASS);
    $del = $model->delete();
    $del->where('staff_id', $id);
    if ($del->execute() === false) {
        Logger::error(sprintf('スタッフクラス情報の削除に失敗しました。 (ID=%s)', $id));
        return false;
    }
    return $model;
}

////////////////////////////////////////////////////////////////////////////////
function delCheck($id)
{
    $model = new Model(TBL_STAFF_CHECK);
    $del = $model->delete();
    $del->where('staff_id', $id);
    if ($del->execute() === false) {
        Logger::error(sprintf('スタッフチェック情報の削除に失敗しました。 (ID=%s)', $id));
        return false;
    }
    return $model;
}

////////////////////////////////////////////////////////////////////////////////
function delItem($id)
{
    $model = new Model(TBL_STAFF_ITEM);
    $del = $model->delete();
    $del->where('staff_id', $id);
    if ($del->execute() === false) {
        Logger::error(sprintf('スタッフ項目情報の削除に失敗しました。 (ID=%s)', $id));
        return false;
    }
    return $model;
}

////////////////////////////////////////////////////////////////////////////////
function delSchedule($id)
{
    $model = new Model(TBL_STAFF_SCH);
    $del = $model->delete();
    $del->where('staff_id', $id);
    if ($del->execute() === false) {
        Logger::error(sprintf('スタッフスケジュール情報の削除に失敗しました。 (ID=%s)', $id));
        return false;
    }
    return $model;
}

////////////////////////////////////////////////////////////////////////////////
function delScheduleDef($id)
{
    $model = new Model(TBL_STAFF_SCH_DEF);
    $del = $model->delete();
    $del->where('staff_id', $id);
    if ($del->execute() === false) {
        Logger::error(sprintf('スタッフデフォルトスケジュール情報の削除に失敗しました。 (ID=%s)', $id));
        return false;
    }
    return $model;
}

////////////////////////////////////////////////////////////////////////////////
function delThumb($id)
{
    $model = new Model(TBL_STAFF_PHOTO);
    $del = $model->delete();
    $del->where('staff_id', $id);
    if ($del->execute() === false) {
        Logger::error(sprintf('スタッフサムネイル情報の削除に失敗しました。 (ID=%s)', $id));
        return false;
    }
    return $model;
}

////////////////////////////////////////////////////////////////////////////////
function delMovie($id)
{
    $model = new Model(TBL_STAFF_MOVIE);
    $del = $model->delete();
    $del->where('staff_id', $id);
    if ($del->execute() === false) {
        Logger::error(sprintf('スタッフ動画情報の削除に失敗しました。 (ID=%s)', $id));
        return false;
    }
    return $model;
}

////////////////////////////////////////////////////////////////////////////////
function delFile($id, $fileName)
{
    // 4枚分(PC/MB/SP/MOV)の画像を削除する
    $delFileName[] = IMG_STAFF_DIR.'/'.$id.'/'.$fileName;
    $delFileName[] = IMG_STAFF_DIR.'/'.$id.'/'.IMAGE_MB_SUFFIX.$fileName;
    $delFileName[] = IMG_STAFF_DIR.'/'.$id.'/'.IMAGE_SP_SUFFIX.$fileName;
    $delFileName[] = IMG_STAFF_DIR.'/'.$id.'/'.IMAGE_MOV_SUFFIX.$fileName;
    foreach ($delFileName as $v) {
        if (File::exists($v)) {
            $file = new File($v);
            if ($file->delete() === false) {
                Logger::info(sprintf("スタッフ画像の削除に失敗しました。(ファイル名=%s / ID=%s)", $v, $id));
                return false;
            }
        }
    }
}

////////////////////////////////////////////////////////////////////////////////
function del($model, $posts)
{
    $model->begin();
    Logger::info('staff del trans');
    $del = $model->delete();
    $del->where('id', $posts['id']);
    // 基本情報削除
    if ($del->execute() === false) {
        Logger::error(sprintf('スタッフ基本情報の削除に失敗しました。 (ID=%s)', $posts['id']));
        $model->rollback();
        return false;
    }
    // クラス情報削除
    if (!delClass($posts['id'])) {
        $model->rollback();
        return false;
    }
    // チェック情報削除
    if (!delCheck($posts['id'])) {
        $model->rollback();
        return false;
    }
    // 項目情報削除
    if (!delItem($posts['id'])) {
        $model->rollback();
        return false;
    }

    // スケジュール情報削除
    if (!delSchedule($posts['id'])) {
        $model->rollback();
        return false;
    }

    // デフォルトスケジュール情報削除
    if (!delScheduleDef($posts['id'])) {
        $model->rollback();
        return false;
    }

    // サムネイル情報削除
    if (!delThumb($posts['id'])) {
        $model->rollback();
        return false;
    }

    // 動画情報削除
    if (!delMovie($posts['id'])) {
        $model->rollback();
        return false;
    }

    // ディレクトリ削除
    $dirPath = IMG_STAFF_DIR.'/'.$posts['id'];
    if (Dir::exists($dirPath)) {
        $dir = new Dir($dirPath);
        $dir->delete();
    }
    $model->commit();
    return true;
}
