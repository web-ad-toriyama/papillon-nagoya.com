<?php

/*
    ページ情報を取得する
    ディレクトリ / ファイル名 / 接尾辞の取得
 */

function getAdPageInfo()
{
    global $request;

    $index = 0;
    $temp = $request->getPath();
    $path = explode('/', $temp);
    // テストディレクトリに設置の場合は1階層下を見に行く
    if (TEST_DIR !== '') {
        $index = 1;
    }

    $dir = '';
    if (array_key_exists(2+$index,$path)){
        $dir = $path[2+$index];
    }

    return $dir;
}

/*
    システムで使う日付の範囲を取得する
    wの設定で週の設定が可能(1=当週/2=次週/3移行は翌週)
 */
function getSchWeek($w=1, $change=true)
{
    if ($w > 1) {
        $start_date = date("Ymd", mktime("0", "0", "0", substr(TODAY, 4, 2), substr(TODAY, 6, 2)+7*($w-1), substr(TODAY, 0, 4)));
        //$end_date = date("Ymd", mktime("0", "0", "0", substr(TODAY, 4, 2), substr(TODAY, 6, 2)+14*($week-1), substr(TODAY, 0, 4)));
    } else {
        $start_date = date("Ymd", mktime("0", "0", "0", substr(TODAY, 4, 2), substr(TODAY, 6, 2), substr(TODAY, 0, 4)));
        //$end_date = date("Ymd", mktime("0", "0", "0", substr(TODAY, 4, 2), substr(TODAY, 6, 2)+7, substr(TODAY, 0, 4)));
    }
    for ($k=0;$k<SCH_DISPLAY_DAYS;$k++) {
        if ($change === true) {
            $week[] = date("Ymd", mktime("0", "0", "0", substr($start_date, 4, 2), substr($start_date, 6, 2)+$k, substr($start_date, 0, 4)));
        } else {
            $week[] = mktime("0", "0", "0", substr($start_date, 4, 2), substr($start_date, 6, 2)+$k, substr($start_date, 0, 4));
        }
    }
    return $week;
}

function getDayOfWeek()
{
    return array('日','月','火','水','木','金','土');
}

function h($array, $ignore = null)
{
    if (is_array($array)) {
        foreach ($array as $k => $v) {
            if (in_array($k, (array)$ignore, true)) {
                continue;
            }
            if (is_array($v)) {
                $array[$k] = h($array[$k], $ignore);
            } else {
                $array[$k] = htmlspecialchars($v, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
            }
        }
    } else {
        $array = htmlspecialchars($array, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }
    return $array;
}

function ct($num, $flg=false)
{
    // 時が24時以上の場合は-24を引く
    if ($num > 24 && $flg === true) {
        $num-=24;
    }
    return sprintf('%02d', $num);
}

/*
    スタッフのデフォルトスケジュールを取得する
 */
function getStaffScheduleDef($id, $week=null)
{
    $data = array();
    // スケジュールデータ取得
    $model = new Model(TBL_STAFF_SCH_DEF);
    $sel = $model->select();
    $data = h($sel->fields('day, going_hour, going_min, leave_hour, leave_min, allow_mode, reserve_icon, free_text')
                ->where('staff_id', $id)
                ->fetchAll());

    return $data;
}


/*
    スタッフのスケジュールを取得する
 */
function getStaffSchedule($id, $week, $flg=false)
{
    $data = array();

    // デフォルトスケジュールデータ取得
    if ($flg == true) {
        $model = new Model(TBL_STAFF_SCH_DEF);
        $sel = $model->select();
        foreach ($week as $k => $v) {
            $datetime   = new DateTime($v);
            $temp = h($sel->fields('going_hour, going_min, leave_hour, leave_min, allow_mode, reserve_icon, free_text')
                        ->where('staff_id', $id)
                        ->where('day',$datetime->format('w'))
                        ->fetchRow());
            if ($temp != '') {
                // 登録があれば登録データ、なければデフォルト設定
                ($temp['going_hour']=='')?$data[$k]['going_hour']=DEFAULT_GOING_HOUR:$data[$k]['going_hour']=$temp['going_hour'];
                ($temp['going_min']=='')?$data[$k]['going_min']=DEFAULT_GOING_MIN:$data[$k]['going_min']=$temp['going_min'];
                ($temp['leave_hour']=='')?$data[$k]['leave_hour']=DEFAULT_LEAVE_HOUR:$data[$k]['leave_hour']=$temp['leave_hour'];
                ($temp['leave_min']=='')?$data[$k]['leave_min']=DEFAULT_LEAVE_MIN:$data[$k]['leave_min']=$temp['leave_min'];
                // 出勤・退勤・オプション共に未選択の場合
                if ($temp['going_hour']=='' && $temp['going_min']=='' &&
                    $temp['leave_hour']=='' && $temp['leave_min']=='' && $temp['allow_mode'] == 0) {
                    $data[$k]['allow_mode'] = DEFAULT_ALLOW_MODE;
                } else {
                    $data[$k]['allow_mode'] = $temp['allow_mode'];
                }
                $data[$k]['free_text']  = $temp['free_text'];
                $data[$k]['reserve_icon']  = $temp['reserve_icon'];
            } else {
                // 登録なしの場合はデフォルト設定
                $data[$k]['going_hour'] = DEFAULT_GOING_HOUR;
                $data[$k]['going_min']  = DEFAULT_GOING_MIN;
                $data[$k]['leave_hour'] = DEFAULT_LEAVE_HOUR;
                $data[$k]['leave_min']  = DEFAULT_LEAVE_MIN;
                $data[$k]['allow_mode'] = DEFAULT_ALLOW_MODE;
                $data[$k]['free_text']  = "";
            }
        }
    }

    // スケジュールデータ取得
    $model = new Model(TBL_STAFF_SCH);
    $sel = $model->select();
    $temp = h($sel->fields('date, going_time, leave_time, allow_mode, reserve_icon, free_text')
                ->where('staff_id', $id)
                ->whereBetween('date', $week[0], $week[SCH_DISPLAY_DAYS-1])
                ->fetchAll());

    foreach ($week as $key => $value) {
        foreach ($temp as $k => $v) {
            if ($value == $v['date']) {
                // 出勤・退勤時間を変換する
                // 年月日が違う場合は翌日に設定
                $diff1 = $diff2 = 0;
                if ($v['date'] != date("Ymd", $v['going_time'])) {
                    $diff1 = 24;
                }
                if ($v['date'] != date("Ymd", $v['leave_time'])) {
                    $diff2 = 24;
                }
                $data[$key]['going_hour'] = date("G", $v['going_time'])+$diff1;
                $data[$key]['going_min'] = date("i", $v['going_time']);
                $data[$key]['leave_hour'] = date("G", $v['leave_time'])+$diff2;
                $data[$key]['leave_min'] = date("i", $v['leave_time']);
                $data[$key]['allow_mode'] = $v['allow_mode'];
                $data[$key]['free_text'] = $v['free_text'];
                $data[$key]['going_time'] = $v['going_time'];
                $data[$key]['leave_time'] = $v['leave_time'];
                $data[$k]['reserve_icon'] = $v['reserve_icon'];    
                if($v['going_time'] == 0 && $v['leave_time'] == 0){
                    $data[$key]['going_hour'] = '--'; 
                    $data[$key]['leave_hour'] = '--';             
                }    
                if($v['going_time'] != 0 && $v['leave_time'] == 0){
                    $data[$key]['leave_hour'] = '--';             
                }                  
            }
        }
    }

    // 予約情報取得
    $model = new Model(TBL_STAFF_RESERVE);
    $sel = $model->select();
    $temp = h($sel->fields('id, date, going_time, leave_time')
                ->where('staff_id', $id)
                ->whereBetween('date', $week[0], $week[SCH_DISPLAY_DAYS-1])
                ->order('going_time')
                ->fetchAll());

    foreach ($week as $key => $value) {
        foreach ($temp as $k => $v) {
            if ($value == $v['date']) {
                $diff1 = $diff2 = 0;
                if ($v['date'] != date("Ymd", $v['going_time'])) {
                    $diff1 = 24;
                }
                if ($v['date'] != date("Ymd", $v['leave_time'])) {
                    $diff2 = 24;
                }                
                $data[$key]['reserve'][$k]['id'] = $v['id'];
                $data[$key]['reserve'][$k]['going_hour'] = date("G", $v['going_time'])+$diff1;
                $data[$key]['reserve'][$k]['going_min'] = date("i", $v['going_time']);
                $data[$key]['reserve'][$k]['going_time'] = ct($data[$key]['reserve'][$k]['going_hour'], true).':'.ct($data[$key]['reserve'][$k]['going_min']);

                $data[$key]['reserve'][$k]['leave_hour'] = date("G", $v['leave_time'])+$diff2;
                $data[$key]['reserve'][$k]['leave_min'] = date("i", $v['leave_time']);     
                $data[$key]['reserve'][$k]['leave_time'] = ct($data[$key]['reserve'][$k]['leave_hour'], true).':'.ct($data[$key]['reserve'][$k]['leave_min']);
            }
        }
    }             
    return $data;
}
    // 予約情報取得

/*
    スタッフのスケジュールを取得する
 */
function getStaffReserve($id, $week, $flg=false)
{
    $data = array();

    foreach ($week as $k => $v) {
        $data[$k]['allow_mode'] = SCH_TYPE_REST;
    }
    // スケジュールデータ取得
    $model = new Model(TBL_STAFF_SCH);
    $sel = $model->select();
    $temp = h($sel->fields('date, going_time, leave_time, allow_mode, reserve_icon, free_text')
                ->where('staff_id', $id)
                ->whereBetween('date', $week[0], $week[SCH_DISPLAY_DAYS-1])
                ->fetchAll());

    foreach ($week as $key => $value) {
        foreach ($temp as $k => $v) {
            if ($value == $v['date']) {
                // 出勤・退勤時間を変換する
                // 年月日が違う場合は翌日に設定
                $diff1 = $diff2 = 0;
                if ($v['date'] != date("Ymd", $v['going_time'])) {
                    $diff1 = 24;
                }
                if ($v['date'] != date("Ymd", $v['leave_time'])) {
                    $diff2 = 24;
                }
                $data[$key]['going_hour'] = date("G", $v['going_time'])+$diff1;
                $data[$key]['going_min'] = date("i", $v['going_time']);
                $data[$key]['leave_hour'] = date("G", $v['leave_time'])+$diff2;
                $data[$key]['leave_min'] = date("i", $v['leave_time']);
                $data[$key]['allow_mode'] = $v['allow_mode'];
                
                
                $data[$key]['going_time'] = ct(date("G", $v['going_time'])+$diff1, true).':'.ct(date("i", $v['going_time'])); 
                $data[$key]['leave_time'] = ct(date("G", $v['leave_time'])+$diff2, true).':'.ct(date("i", $v['leave_time']));
            }
        }
    }

    // 予約情報取得
    $model = new Model(TBL_STAFF_RESERVE);
    $sel = $model->select();
    $temp = h($sel->fields('id, date, going_time, leave_time')
                ->where('staff_id', $id)
                ->whereBetween('date', $week[0], $week[SCH_DISPLAY_DAYS-1])
                ->order('going_time')
                ->fetchAll());

    foreach ($week as $key => $value) {
        foreach ($temp as $k => $v) {
            if ($value == $v['date']) {
                $diff1 = $diff2 = 0;
                if ($v['date'] != date("Ymd", $v['going_time'])) {
                    $diff1 = 24;
                }
                if ($v['date'] != date("Ymd", $v['leave_time'])) {
                    $diff2 = 24;
                }                
                $data[$key]['reserve'][$k]['id'] = $v['id'];
                $data[$key]['reserve'][$k]['going_time'] = ct(date("G", $v['going_time'])+$diff1, true).':'.ct(date("i", $v['going_time'])); 
                $data[$key]['reserve'][$k]['leave_time'] = ct(date("G", $v['leave_time'])+$diff2, true).':'.ct(date("i", $v['leave_time']));
            }
        }
    }             
    return $data;
}
    // 予約情報取得


function pagination($cnt, $limit, $url='/?p=%page%')
{
    global $smarty, $request;
    $pager = Pager::getInstance();
    $pager->setDisplayRange(DISPLAY_RANGE);
    // リンクURL設定
    $pager->setUrl($request->getPath() . $url);
    // 現在ページ設定
    $pager->setCurrentPage($request->getQuery('p'));
    // データ総数設定
    $pager->setDataCount($cnt);
    // 1ページ表示件数設定
    $pager->setCountPerPage($limit);
    // ページ計算処理実行
    $pager->paginate();
    // ページャーを設定
    $smarty->assign('pager', $pager);
    return $pager->getDataOffset();
}


function getAdItem($form)
{
    $item = array();
    if (count($form['item']['name']) > 0) {
        // プロフィール項目取得
        $model_item = new Model(TBL_ITEM);
        foreach ($form['item']['name'] as $k => $v) {
            $sel = $model_item->select();
            $item[$k] = h($sel->fields(array('id', 'pid', 'name'))
                            ->where('show_flg', SHOW_ON)
                            ->where('pid', $k)
                            ->order('pid,seq')
                            ->fetchAll());
        }
    }
    return $item;
}

function getAdStaffClass($id=null)
{
    $staff_class = array();
    $model_class = new Model(TBL_STAFF_CLASS);
    $sel = $model_class->select();
    $temp = h($sel->fields(array('no', 'value'))
               ->where('staff_id', $id)
               ->fetchAll());
    if (count($temp) > 0) {
        foreach ($temp as $v) {
            $staff_class[$v['no']] = $v['value'];
        }
    }
    return $staff_class;
}

function getAdStaffCheck($id=null)
{
    $staff_check = array();
    $model_check = new Model(TBL_STAFF_CHECK);
    $sel = $model_check->select();
    $temp = h($sel->fields(array('value'))
                   ->where('staff_id', $id)
                   ->fetchAll());
    if (count($temp) > 0) {
        foreach ($temp as $v) {
            $staff_check[] = $v['value'];
        }
    }
    return $staff_check;
}

function getAdStaffItem($id=null)
{
    $staff_item = array();
    if (!is_null($id)) {
        $model_staff_item = new Model(TBL_STAFF_ITEM);
        $sel = $model_staff_item->select();
        $temp = h($sel->fields(array('no', 'value'))
                      ->where('staff_id', $id)
                      ->fetchAll());
        if (count($temp) > 0) {
            foreach ($temp as $v) {
                $staff_item[$v['no']] = $v['value'];
            }
        }
    }
    return $staff_item;
}

// フォーム用の登録スタッフ一覧を作成する
function getFormStaffList($option=false)
{
    $model = new Model(TBL_STAFF);
    $sel = $model->select();
    $temp = h($sel->fields('id,name')
                  ->where('show_flg', SHOW_ON)
                  ->order('seq')
                  ->fetchAll());
    if ($option === true) {
        $data[0] = '未選択';
    }
    foreach ($temp as $k => $v) {
        $data[$v['id']] = $v['name'];
    }

    return $data;
}

// 解析データの総数を取得する
function getAnalyzeDataAll($model, $params)
{
    $sel = $model->select();
    $sel->where('dir_name',$params['device']);
    $sel->whereBetween('created', "$params[date] 00:00:00", "$params[date] 23:59:59");
    if (!is_null($params['file_name'])) {$sel->where('file_name',$params['file_name']);}
    return $sel->fetchCount();
}


// 解析データの時間毎の総数を取得する
function getAnalyzeDataForTime($model, $params)
{
    $sel = $model->select();
    for ($i=0; $i<24; $i++) {
        // ページビュー
        $sel->where('dir_name',$params['device']);
        $sel->whereBetween('created', "$params[date] $i:00:00", "$params[date] $i:59:59");
        $sel->where('unique_flg',UNIQUE_OFF);
        if (!is_null($params['file_name'])) {$sel->where('file_name',$params['file_name']);}
        $cnt[$i]['normal'] = $sel->fetchCount();

        // ユニークアクセス
        $sel->where('dir_name',$params['device']);
        $sel->whereBetween('created', "$params[date] $i:00:00", "$params[date] $i:59:59");
        $sel->where('unique_flg',UNIQUE_ON);
        if (!is_null($params['file_name'])) {$sel->where('file_name',$params['file_name']);}
        $cnt[$i]['unique'] = $sel->fetchCount();
        $cnt[$i]['all'] = $cnt[$i]['normal'] + $cnt[$i]['unique'];
    }

    foreach ($cnt as $v) {
        $cnt_total = $cnt_total + $v['all'];
    }
    if ($cnt_total === 0) {
        $cnt = null;
    }
    return $cnt;
}

function getAnalyzeDataForOther($model, $col, $array, $params, $count)
{
    $sel = $model->select();
    foreach ($array as $v) {
         $sel->where('dir_name',$params['device']);
         $sel->whereBetween('created', "$params[date] 00:00:00", "$params[date] 23:59:59");
         $sel->whereLike($col,'%'.$v.'%');
         if (!is_null($params['file_name'])) {$sel->where('file_name',$params['file_name']);}
         $result[$v] = $sel->fetchCount();
    }
    if (array_sum($result) === 0) {
        $result = null;
    } else {
        $result['other'] = $count - array_sum($result);
    }
    return $result;
}

function getAnalyzeDataForReferer($params)
{
    $db = Db::factory();
    $where = "referer != '' AND dir_name = :dir_name AND created BETWEEN :start AND :end ";
    if (!is_null($params['file_name'])) {
        $where .= "AND file_name = :file_name";
    }

    $query = sprintf("SELECT referer, count(id) as cnt FROM %s WHERE %s GROUP BY referer ORDER BY cnt desc",
                      TBL_ANALYTICS,
                      $where
                    );

    $stmt = $db->prepare($query);
    $stmt->bindValue(':dir_name', $params['device']);
    $stmt->bindValue(':start', "$params[date] 00:00:00");
    $stmt->bindValue(':end', "$params[date] 23:59:59");
    if (!is_null($params['file_name'])) {
        $stmt->bindValue(':file_name', $params['file_name']);
    }
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (count($rows) == 0 || $rows === false) {
        $rows = null;
    }

    return $rows;
}

function getAnalyzeDataForSearchWords($params)
{
    $db = Db::factory();
    $where = "search_words != '' AND dir_name = :dir_name AND created BETWEEN :start AND :end ";
    if (!is_null($params['file_name'])) {
        $where .= "AND file_name = :file_name";
    }

    $query = sprintf("SELECT search_words, count(id) as cnt FROM %s WHERE %s GROUP BY search_words ORDER BY cnt desc",
                      TBL_ANALYTICS,
                      $where
                    );

    $stmt = $db->prepare($query);
    $stmt->bindValue(':dir_name', $params['device']);
    $stmt->bindValue(':start', "$params[date] 00:00:00");
    $stmt->bindValue(':end', "$params[date] 23:59:59");
    if (!is_null($params['file_name'])) {
        $stmt->bindValue(':file_name', $params['file_name']);
    }
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (count($rows) == 0 || $rows === false) {
        $rows = null;
    }

    return $rows;
}

function redirect($url, $exit = true)
{
    header('Location: ' . $url);
    if ($exit) {
        exit;
    }
}

//画像の大きさを変更する(高さ・幅共に指定の無い場合はそのままの大きさで返す)
function imageSizeConvert($fileName, $newFileName, $newWidth, $newHeight, $bCopy)
{
    $quality="100";

    if (isAnime($fileName)) { //GIFアニメは何もしない
        return 'GIFアニメの画像サイズ変更はできません。 ';
        if (strncmp($fileName, "http:", 5) == 0 || $bCopy) {
            return  copy($fileName, $newFileName);
        } else {
            return  rename($fileName, $newFileName);
        }
    }
    //元の画像サイズ
    list($width, $height) = getimagesize($fileName);
    if ($width==0 || $height==0) {
        return '元の画像のサイズが0か見つかりません。';
    }
    //同じサイズの場合ははコピーする
    if ((($newWidth>0 && $width == $newWidth)||$newWidth==0)
     && (($newHeight>0 && $height == $newHeight)||$newHeight==0)) {
        if (strncmp($fileName, "http:", 5) == 0 || $bCopy) {
            return  copy($fileName, $newFileName);
        } else {
            return  rename($fileName, $newFileName);
        }
    }

    if ($newWidth>0 || $newHeight>0) {
        //一方のみ指定の場合は縦横比を保存する。両方の場合は大きい方に揃える
        if (false == $newHeight) {
            $newHeight = intval($newWidth*($height/$width)+0.01);
        } elseif (false == $newWidth) {
            $newWidth = intval($newHeight*($width/$height)+0.01);
        } else {
            if ($height<$width) {
                $scale_w = $newWidth/$width;
                $newHeight = intval($height*$scale_w+0.01);
            } else {
                $scale_h = $newHeight/$height;
                $newWidth  = intval($width*$scale_h+0.01);
            }
        }
    }

    //ファイルタイプ
    $ext = substr($fileName, strrpos($fileName, "."));
    if ($ext == $fileName) {
        $ext = substr($newFileName, strrpos($newFileName, "."));
    }
    $ext = strtolower($ext);

    //ファイルサイズチェック
    ini_set('memory_limit', '64M');
    $imageInfo = GetImageSize($fileName);
    $MB = Pow(1024, 2);   // number of bytes in 1M
    $K64 = Pow(2, 16);    // number of bytes in 64K
    $TWEAKFACTOR = 1.8;   // Or whatever works for you
    $memoryNeeded = round(($imageInfo[0] * $imageInfo[1]
                                            * $imageInfo['bits']
                                            * $imageInfo['channels'] / 8
                              + $K64
                            ) * $TWEAKFACTOR
                         );
    $memoryLimitMB = (integer) ini_get('memory_limit');
    $memoryLimit = $memoryLimitMB * $MB;
    if ($memoryNeeded > $memoryLimit) {
        return '画像のファイルサイズが大きすぎます。写真のサイズ変更に失敗しました。';
    }
    //------------------------
    // 読み込み
    if ($ext == '.jpg' || $ext == '.jpeg') {
        $source = imagecreatefromjpeg($fileName);
    } elseif ($ext == '.gif') {
        $source = imagecreatefromgif($fileName);
    } elseif ($ext == '.png') {
        $source = imagecreatefrompng($fileName);
    } else {
        return '未対応の画像種類（拡張子['.$ext.']です。写真のサイズ変更に失敗しました。 (ファイル：'.$fileName.')';
    }
    if ($source) {
        if ($newWidth>0 || $newHeight>0) {
            // リサイズ
            $dest = imagecreatetruecolor($newWidth, $newHeight);
            imagecopyresampled($dest, $source, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
            imagedestroy($source);
        } else {
            $dest = $source;
        }

        //出力
        if ($ext == '.jpg' || $ext == '.jpeg') {
            imagejpeg($dest, $newFileName, $quality);
        } elseif ($ext == '.gif') {
            imagegif($dest, $newFileName);
        } elseif ($ext == '.png') {
            imagepng($dest, $newFileName);
        }

        imagedestroy($dest);

        return true;
    } else {
        return '画像ファイルの読み込みに失敗しました。 (ファイル：'.$fileName.')';
    }
}

//GIFアニメの判定
function isAnime($fileName)
{
    $fileContents=file_get_contents($fileName);

    $strLoc=0;
    $count=0;
    while ($count < 2) { # There is no point in continuing after we find a 2nd frame
        $where1=strpos($fileContents, "\x00\x21\xF9\x04", $strLoc);
        if ($where1 === false) {
            break;
        } else {
            $strLoc=$where1+1;
            $where2=strpos($fileContents, "\x00\x2C", $strLoc);
            if ($where2 === false) {
                break;
            } else {
                if ($where1+8 == $where2) {
                    $count++;
                }
                $strLoc=$where2+1;
            }
        }
    }

    if ($count > 1) {
        return(true);
    } else {
        return(false);
    }
}
