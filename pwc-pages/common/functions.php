<?php

/*
    ページ情報を取得する
    ディレクトリ / ファイル名 / 接尾辞の取得
 */
    function getPageInfo()
    {
        global $request;

        $index = 0;
        $temp = $request->getPath();
        $path = explode('/', $temp);
    // テストディレクトリに設置の場合は1階層下を見に行く
        if (TEST_DIR !== '') {
            $index = 1;
        }
    // モバイル版
        if (strstr(FS_MB_DIR, $path[1+$index])) {
            $dir = 'mb';
            $suffix = IMAGE_MB_SUFFIX;
            ($path[2+$index] == '')?$file='index':$file=basename($path[2+$index], '.php');
        } elseif (strstr(FS_SP_DIR, $path[1+$index])) {
        // スマホ版
            $dir = 'sp';
            $suffix = IMAGE_SP_SUFFIX;
            ($path[2+$index] == '')?$file='index':$file=basename($path[2+$index], '.php');
        } else {
        // パソコン版
            $dir = 'pc';
            $suffix = null;
            ($path[1+$index] == '')?$file='index':$file=basename($path[1+$index], '.php');
        }

        return array($dir,$file,$suffix);
    }

/*
    META情報を取得する
    各ページの情報がない場合はindexの内容を利用する
 */
    function getMetaInfo($key, $file, $flg)
    {
        global $html;
        // DBのデータがあればそちらを優先する。
        if ($flg === true) {
            $model = new Model(TBL_PAGE);
            $sel = $model->select()->fields($key)->where('name', $file);
            $data = $sel->fetchRow();

            if ($data === false) {
                // データなしの為設定ファイルの内容を取得
                ($html[$key][$file] == '')?$page = $html[$key]['index']:$page = $html[$key][$file];
            } else {
                // DBのデータを優先させる
                $page = $data[$key];
            }
        } else {
            // データなしの為設定ファイルの内容を取得
            ($html[$key][$file] == '')?$page = $html[$key]['index']:$page = $html[$key][$file];
        }

        return $page;
    }

/*
    ヘッドラインニュースを取得する
 */
    function getHeadLineNews()
    {
        $model = new Model(TBL_LINE);
        $sel = $model->select();
        $data = h($sel->fields('color_flg,name')
            ->order('seq')
            ->where('show_flg', SHOW_ON)
            ->fetchAll());

        return $data;
    }

/*
    新着情報を取得する
 */
    function getTopics($dir=null)
    {
        if (is_null($dir)) {
            return null;
        }
    // 改ページ数設定
        $limit = PAGER_PC_TOPICS;
        if ($dir === 'mb') {
            $limit = PAGER_MB_TOPICS;
        } elseif ($dir === 'sp') {
            $limit = PAGER_SP_TOPICS;
        }
    // データ件数取得
        $model = new Model(TBL_TOPICS);
        $sel = $model->select();
        $cnt = $sel->where('show_flg', SHOW_ON)
        ->whereLe('published', date(DATE_FORMAT_STR))
        ->fetchCount();
    // ページネーション生成
        $offset = pageInfo($cnt, $limit);
    // データ一覧取得
        $sel = $model->select();
        $data = h($sel->where('show_flg', SHOW_ON)
            ->whereLe('published', date(DATE_FORMAT_STR))
            ->limit($limit)
            ->offset($offset)
            ->order('published desc,id desc')
            ->fetchAll(), 'detail');
        if (count($data)>0) {
            foreach ($data as $key => $value) {
                $reg = mb_ereg_replace('style="height:([0-9]*)px; width:([0-9]*)px"', 'height="\\1px" widht="\\2px"' , $value['detail']);
                $data[$key]['detail'] = $reg;
            }
        }
        return $data;
    }

/*
    リンクバナーを取得する
 */
    function getLinkBanner($pid=null)
    {
        if (is_null($pid)) {
            return null;
        }
        $model = new Model(TBL_LINK);
        $sel = $model->select();
        $data = h($sel->order('seq')
            ->where('pid', $pid)
            ->where('show_flg', SHOW_ON)
            ->fetchAll());

        return $data;
    }

/*
    リンク用フリースペースを取得する
 */
    function getLinkFree($pid=null)
    {
        if (is_null($pid)) {
            return null;
        }
        $model = new Model(TBL_LINK_FREE);
        $sel = $model->select();
        $data = h($sel->where('pid', $pid)->fetchRow(),array('detail_pc','detail_mb','detail_sp'));

        return $data;
    }


/*
    カバーガール情報を取得する
 */
    function getCoverGirl($dir, $suffix=null)
{
    // スタッフ情報取得
    $model = new Model(TBL_STAFF);
    $sel  = $model->select();
    $data = h(getStaffAddition($sel->where('show_flg', SHOW_ON)
                  ->where('cover_flg', SET_ON)
                  ->order('seq')
                  ->fetchAll(), IMAGE_COVER_GIRL_COUNT, $suffix, 1));
    shuffle($data);

    // // モバイル・スマホ版の場合は1件表示
    // if ($dir !== 'pc') {
    //     return $data[0];
    // }
    // return $data;

    // モバイル版の場合は1件表示
    if ($dir === 'mb') {
        return $data[0];
    }
    return $data;
}

/*
    新人情報を取得する
 */
    function getNewFace($suffix=null)
    {
    // スタッフ情報取得
        $model = new Model(TBL_STAFF);
        $sel  = $model->select();
        $data = h(getStaffAddition($sel->where('show_flg', SHOW_ON)
          ->where('new_flg', SET_ON)
          ->order('published desc')
          ->fetchAll(), 1, $suffix, 1));

        return $data;
    }

/*
    ランキング情報を取得する
 */
    function getRanking($suffix=null)
    {
        global $form;

    // スタッフ情報取得
        $model = new Model(TBL_STAFF);
        $sel  = $model->select();
        $staff = h(getStaffAddition($sel->where('show_flg', SHOW_ON)
          ->order('seq')
          ->fetchAll(), 1, $suffix, 1));
    // ランキングデータ取得
        $model = new Model(TBL_RANKING);
        $sel = $model->select();
        foreach ($form['ranking'] as $k => $v) {
            $sel = $model->select();
            $ranking[$k] = h($sel->fields('no,staff_id,free_text')
              ->where('pid', $k)
              ->fetchAll());
        // ランキング毎のスタッフデータ取得
            foreach ($ranking[$k] as $key => $value) {
                foreach ($staff as $keys => $values) {
                    if ($value['staff_id'] == $values['id']) {
                        $ranking_staff[$k][$value['no']] = $values;
                        $ranking_staff[$k][$value['no']]['no'] = $value['no'];
                        $ranking_staff[$k][$value['no']]['free_text'] = $value['free_text'];
                        continue;
                    }
                }
            }
        }

        return $ranking_staff;
    }

/*
    本日出勤者を取得する
 */
    function getScheduleDay($suffix=null, $day=1)
    {
        global $form;
        $schedule = array();
    // スタッフ情報取得
        $model = new Model(TBL_STAFF);
        $sel  = $model->select();
        $staff = h(getStaffAddition($sel->where('show_flg', SHOW_ON)
          ->order('seq')
          ->fetchAll(), 1, $suffix, $day));
        foreach ($staff as $k => $v) {

        // 常時お休み設定の人は対象外
            if ($v['rest_flg'] == SET_ON) {
                continue;
            }

        // お休み状態の人は対象外にする
            if ($v['schedule']['time'] === $form['allow_mode'][SCH_TYPE_REST]) {
                continue;
            }
            $schedule[] = $v;
        }

    // 並べ替え
        if (DEFAULT_SORT_MODE === SCH_SORT_GOING && count($schedule) > 0) {
            foreach ($schedule as $k => $v) {
                // 出勤の早い順並べ替え対応 2017/05/22
                $time[$k]=$v['schedule']['sort_going'];                
                $time2[$k]=$v['schedule']['time'];
                $seq[$k]=$v["seq"];
            }
            array_multisort($time, SORT_ASC, $time2, SORT_ASC, $seq, SORT_ASC, $schedule);
        }

    // 出勤後の人を後ろに回す
    if (DEFAULT_SORT_MODE == SCH_SORT_GOING && SCH_SORT_WORK_AFTER == 1) {
        $schedule_after = array();
        foreach ($schedule as $k => $v) {
            if ($v['schedule']['work'] == SCH_WORK_AFTER) {
                $schedule_after[] = $v;
                unset($schedule[$k]);
            }
        }
            $schedule = array_merge($schedule, $schedule_after);
    }
        return $schedule;
    }

/*
    スタッフ一覧を取得する
 */
    function getStaffList($dir=null, $suffix=null, $day=1)
    {
    // 2015/07/23 常時お休み設定の人はお休みとして上書きする様に変更
        global $form;
        $staff = array();
        $new_staff = array();
        if (is_null($dir)) {return null;}
    // 改ページ数設定
        $limit = PAGER_PC_STAFF;
        if ($dir === 'mb') {
            $limit = PAGER_MB_STAFF;
        } elseif ($dir === 'sp') {
            $limit = PAGER_SP_STAFF;
        }
    // 総件数取得
        $model = new Model(TBL_STAFF);
        $sel = $model->select();
        $cnt = $sel->where('show_flg', SHOW_ON)
        ->fetchCount();
    // ページネーション生成
        $offset = pageInfo($cnt, $limit);
    // データ一覧取得
        $sel  = $model->select();
        $staff = h(getStaffAddition($sel->where('show_flg', SHOW_ON)
          ->limit($limit)
          ->offset($offset)
          ->order('seq')
          ->fetchAll(), 1, $suffix, $day));
        if (count($staff)>0) {
            foreach ($staff as $k => $v) {
                if ($v['rest_flg'] == SET_ON) {
                    $v['schedule']['work'] = SCH_TYPE_REST;
                    $v['schedule']['time'] = $form['allow_mode'][SCH_TYPE_REST];
                }
                $new_staff[] = $v;
            }
        }
        return $new_staff;
    }

/*
    スタッフ詳細を取得する
 */
    function getStaffDetail($sid=null, $suffix=null)
    {
    // 2015/07/23 常時お休み設定の人はお休みとして上書きする様に変更
        global $form;
        if (is_null($sid)) {return false;}
    // データ一覧取得
        $model = new Model(TBL_STAFF);
        $sel  = $model->select();
        $staff = h(getStaffAddition($sel->where('show_flg', SHOW_ON)
          ->where('id',$sid)
          ->fetchAll(), null, $suffix));
        if ($staff[0]['rest_flg'] == SET_ON) {
            for ($i=0; $i<7; $i++) {
                $staff[0]['schedule'][$i]['time'] = $form['allow_mode'][SCH_TYPE_REST];
            }
        }
        return $staff[0];
    }

/*
    スタッフ名を取得する
 */
    function getStaffName($pid=null)
    {
        if (is_null($pid)) {
            return null;
        }
        $model = new Model(TBL_STAFF);
        $sel = $model->select();
        $data = h($sel->fields('name')->where('id', $pid)->fetchRow(),'name');

        if ($data != '') {
            return $data['name'];
        }
        return null;
    }

/*
    スタッフに付加する情報を取得する
    画像 / クラス情報 / チェック情報 / 項目情報 / スケジュール情報 / 動画情報
 */
    function getStaffAddition($data=array(), $photo_no=null, $suffix=null, $day=null)
    {
        $week = getSchWeek();
        if (count($data)>0) {
            foreach ($data as $k => $v) {
            // サムネイル(1枚目)
                $data[$k]['photo'] = getStaffPhoto($v['id'], $photo_no, $suffix);
            // クラス情報
                $data[$k]['class'] = getStaffClass($v['id']);
            // チェック情報
                $data[$k]['check'] = getStaffCheck($v['id']);
            // 項目情報
                $data[$k]['item'] = getStaffItem($v['id']);
            // スケジュール取得
                $data[$k]['schedule'] = changeSchFormat(getStaffSchedule($v['id'], $week), $day);
            // 動画情報
                $data[$k]['movie'] = getStaffMovie($v['id']);
            }
        }

        return $data;
    }

/*
    スケジュールデータを表示用の形式に変換する
 */
    function changeSchFormat($data=array(), $day=null)
    {
        global $form;
        $schedule = array();
        $unix_time = time();

    // 週間のスケジュール取得
        for ($i=0; $i<SCH_DISPLAY_DAYS; $i++) {
            $schedule[$i]['work'] = null;
            if (array_key_exists($i, $data)) {
                // 並び替え用出勤時間 2017/05/22
                $schedule[$i]['sort_going'] = $data[$i]['going_time'];
                $going_time = ct($data[$i]['going_hour'], true).':'.ct($data[$i]['going_min']);
                if($data[$i]['going_hour'] != '--' && $data[$i]['leave_hour'] == '--'){
                    $leave_time = $data[$i]['leave_hour'].':'.ct($data[$i]['leave_min']);
                    
                }else{
                    $leave_time = ct($data[$i]['leave_hour'], true).':'.ct($data[$i]['leave_min']);

                }

				// タイムライン用計算 2016/12/02
				$temp_going = explode(':', $going_time);
				$temp_leave[0] = $data[$i]['leave_hour'];
				$temp_leave[1] = $data[$i]['leave_min'];
				$schedule[$i]['range']['sta'] = getTimeLineRange($temp_going);
				$schedule[$i]['range']['end'] = getTimeLineRange($temp_leave);
				// 自由項目(出勤扱い) 2015/04/16
                if ($data[$i]['free_text'] != '') {
                    $schedule[$i]['time'] = $data[$i]['free_text'];
					$schedule[$i]['range']['sta'] = 0;
					$schedule[$i]['range']['end'] = 100;
                    // 並び替え用出勤時間 2017/05/22
                    $schedule[$i]['sort_going'] = '2147483647';					
                    continue;
                } elseif ($data[$i]['allow_mode'] == SCH_TYPE_REST) {
                // お休み
                    $schedule[$i]['time'] = $form['allow_mode'][SCH_TYPE_REST];
					$schedule[$i]['range']['sta'] = 0;
					$schedule[$i]['range']['end'] = 0;
                    continue;
                } elseif ($data[$i]['allow_mode'] == SCH_TYPE_RSRV) {
                // 予約満了
                    $schedule[$i]['time'] = $form['allow_mode'][SCH_TYPE_RSRV];
					$schedule[$i]['range']['sta'] = 0;
					$schedule[$i]['range']['end'] = 0;
                    // 並び替え用出勤時間 2017/05/22
                    $schedule[$i]['sort_going'] = '2147483647';					
                    continue; 
                } elseif ($data[$i]['allow_mode'] == SCH_TYPE_TEL) {
                // TEL確認
                    $schedule[$i]['time'] = $form['allow_mode'][SCH_TYPE_TEL];
					$schedule[$i]['range']['sta'] = 0;
					$schedule[$i]['range']['end'] = 100;
                    // 並び替え用出勤時間 2017/05/22
                    $schedule[$i]['sort_going'] = '2147483647';					
                    continue;
                } elseif ($data[$i]['allow_mode'] == SCH_TYPE_LAST) {
                // LAST
					$schedule[$i]['range']['end'] = 100;
                    $leave_time = $form['allow_mode'][SCH_TYPE_LAST];
                } elseif ($data[$i]['going_hour'] == '--' && $data[$i]['leave_hour'] == '--') {
                    $schedule[$i]['time'] = $form['allow_mode'][SCH_TYPE_REST];
					$schedule[$i]['range']['sta'] = 0;
					$schedule[$i]['range']['end'] = 0;
                    continue;
                }elseif($data[$i]['going_hour'] != '--' && $data[$i]['leave_hour'] == '--'){
                    $schedule[$i]['range']['end'] = 100;
                }               
                
                $schedule[$i]['time'] = $going_time.'-'.$leave_time;
				// 現在出勤中
                if ($data[$i]['going_time'] <= $unix_time && $data[$i]['leave_time'] >= $unix_time) {
                    $schedule[$i]['work'] = SCH_WORK_NOW;
                }elseif ($data[$i]['going_time'] <= $unix_time && $data[$i]['leave_hour'] == '--') {
                    $schedule[$i]['work'] = SCH_WORK_NOW;
                } elseif ($data[$i]['going_time'] > $unix_time) {
                // 出勤前
                    $schedule[$i]['work'] = SCH_WORK_BEFORE;
                } elseif ($data[$i]['leave_time'] < $unix_time) {
                // 出勤終了
                    $schedule[$i]['work'] = SCH_WORK_AFTER;
                } else {
                // ありえない
                }
            } else {
            // 未登録時の処理
                if (DEFAULT_DISPLAY_MODE === SCH_TYPE_TEL) {
                    $default = $form['allow_mode'][SCH_TYPE_TEL];
					$schedule[$i]['range']['sta'] = 0;
					$schedule[$i]['range']['end'] = 100;
                } else {
                    $default = $form['allow_mode'][SCH_TYPE_REST];
					$schedule[$i]['range']['sta'] = 0;
					$schedule[$i]['range']['end'] = 0;
                }
                $schedule[$i]['time'] = $default;
                // 並び替え用出勤時間 2017/05/22
                $schedule[$i]['sort_going'] = '2147483647';                
            }
        }

		if (is_null($day)) {
            return $schedule;
        }

        return $schedule[$day-1];
    }

/*
 *  タイムラインの範囲を取得する
 */

function getTimeLineRange($array)
{
	global $form;
	$result = ($array[0] - min(array_keys($form['hour']))) * 2;
	if ($array[1] == max(array_keys($form['min']))) {
		$result++;
	}

	return $result;
}

/*
    イベント画像情報を取得する
 */
    function getEventImg($suffix=null)
    {
    // スタッフ情報取得
        $model = new Model(TBL_EVENT);
        $sel  = $model->select();
        $data = h($sel->fields('file_name')
            ->where('selected', SET_ON)
            ->order('seq desc, id')
            ->fetchAll());

        if (count($data)>0) {
            foreach ($data as $key => $val) {
                $data[$key]['file_name'] = $suffix.$val['file_name'];
            }
            return $data;
        }
        return null;
    }

/*
    スタッフ感想一覧を取得する
 */
    function getStaffImpList($dir=null, $sid=null)
    {
        $staff = array();
        if (is_null($dir) || is_null($sid)) {return null;}
    // 改ページ数設定
        $limit = PAGER_PC_IMPRESSIONS;
        if ($dir === 'mb') {
            $limit = PAGER_MB_IMPRESSIONS;
        } elseif ($dir === 'sp') {
            $limit = PAGER_SP_IMPRESSIONS;
        }
    // 総件数取得
        $model = new Model(TBL_IMPRESSIONS);
        $sel = $model->select();
        $cnt = $sel->where('show_flg', SHOW_ON)
        ->where('staff_id', $sid)
        ->fetchCount();
    // ページネーション生成
        $offset = pageInfo($cnt, $limit, $url='?sid='.$sid.'&p=%page%');
    // データ一覧取得
        $sel  = $model->select();
        $staff = h($sel->where('show_flg', SHOW_ON)
            ->where('staff_id', $sid)
            ->limit($limit)
            ->offset($offset)
            ->order('id desc')
            ->fetchAll());

        return $staff;
    }

    function getStaffEnqList($dir=null, $sid=null)
    {
        $staff = array();
        if (is_null($dir) || is_null($sid)) {return null;}
        // 改ページ数設定
        $limit = PAGER_PC_IMPRESSIONS;
        if ($dir === 'mb') {
            $limit = PAGER_MB_IMPRESSIONS;
        } elseif ($dir === 'sp') {
            $limit = PAGER_SP_IMPRESSIONS;
        }
        // 総件数取得
        $model = new Model(TBL_ENQUETE);
        $sel = $model->select();
        $cnt = $sel->where('show_flg', SHOW_ON)
            ->where('staff_id', $sid)
            ->fetchCount();
        // ページネーション生成
        $offset = pageInfo($cnt, $limit, $url='?sid='.$sid.'&p=%page%');
        // データ一覧取得
        $sel  = $model->select();
        $staff = h($sel->where('show_flg', SHOW_ON)
            ->where('staff_id', $sid)
            ->limit($limit)
            ->offset($offset)
            ->order('id desc')
            ->fetchAll());

        return $staff;
    }

/*
    スタッフ画像を取得する
    noを選択する事でno番目の画像が取得可能
    suffixを選択する事でPC/MB/SPのファイルが取得可能
 */
    function getStaffPhoto($sid=null, $no=null, $suffix=null)
    {
        if (is_null($sid)) {
            return null;
        }
        $model = new Model(TBL_STAFF_PHOTO);
        $sel = $model->select();
        if (is_null($no)) {
            $temp = h($sel->fields('file_name')->where('staff_id', $sid)->order('seq')->fetchAll());
            foreach ($temp as $v) {
            // データ未登録の場合はスペースになる
                if ($v['file_name'] == '') {
                    $data[] = '';
                } else {
                    $data[] = $suffix.$v['file_name'];
                }
            }
        } else {
            $temp = h($sel->fields('file_name')->where('staff_id', $sid)->where('seq', $no)->fetchRow());
        // データ未登録の場合はスペースになる
            if ($temp == '' || $temp['file_name'] == '') {
                $data = '';
            } else {
                $data = $suffix.$temp['file_name'];
            }
        }
        return $data;
    }

/*
    スタッフ動画を取得する
 */
    function getStaffMovie($sid=null)
    {
        if (is_null($sid)) {
            return null;
        }
        $model = new Model(TBL_STAFF_MOVIE);
        $sel = $model->select();
        $temp = h($sel->fields('file_name,movie_file_name')->where('staff_id', $sid)->fetchRow());
    // データ未登録の場合はスペースになる
        if ($temp == '') {
            $data = '';
        } else {
            $data['file_name'] = $temp['file_name'];
            $data['movie_file_name'] = $temp['movie_file_name'];
        }

        return $data;
    }

/*
    スタッフ項目情報を取得する
 */
    function getStaffItem($sid=null)
    {
        global $form;
        if (is_null($sid)) {
            return null;
        }
        $staff_item = array();
        $item = getAdItem($form);
        foreach ($item as $k => $v) {
            foreach ($v as $key => $value) {
                $staff_item[$k][$key]['name'] = $value['name'];
                $model = new Model(TBL_STAFF_ITEM);
                $sel = $model->select();
                $temp = h($sel->fields(array('value'))
                  ->where('staff_id', $sid)
                  ->where('no', $value['id'])
                  ->fetchRow());
                if (is_array($temp)) {
                    $staff_item[$k][$key]['value'] = $temp['value'];
                } else {
                    $staff_item[$k][$key]['value'] = null;
                }
            }
        }

        return $staff_item;
    }

/*
    スタッフクラス情報を取得する
 */
    function getStaffClass($sid=null)
    {
        global $form;
        if (is_null($sid)) {
            return null;
        }
        $staff_class = array();
        $model_class = new Model(TBL_STAFF_CLASS);
        $sel = $model_class->select();
        $temp = h($sel->fields(array('no', 'value'))
         ->where('staff_id', $sid)
         ->fetchAll());
        if (count($temp) > 0) {
            foreach ($temp as $k => $v) {
                $staff_class[$v['no']] = array(
                    'name'  => $form['class']['name'][$v['no']],
                    'value' => $form['class']['value'][$v['no']][$v['value']],
                    'image' => $form['class']['image'][$v['no']][$v['value']],
                    );
            }
        }

        return $staff_class;
    }

/*
    スタッフチェック情報を取得する
 */
    function getStaffCheck($sid=null)
    {
        global $form;
        if (is_null($sid)) {
            return null;
        }
        $staff_check = array();
        $model_check = new Model(TBL_STAFF_CHECK);
        $sel = $model_check->select();
        $temp = h($sel->fields(array('value'))
         ->where('staff_id', $sid)
         ->fetchAll());
        if (count($temp) > 0) {
            foreach ($temp as $v) {
                $staff_check[$v['value']] = array(
                    'name'  => $form['check']['name'][$v['value']],
                    'image' => $form['check']['image'][$v['value']],
                    );
            }
        }

        return $staff_check;
    }


/*
    WEB予約用スタッフ一覧
 */
    function getReserveStaffList($type=null)
    {
        $model = new Model(TBL_STAFF);
        $sel = $model->select();
        $temp = h($sel->fields('id,name')
          ->where('show_flg', SHOW_ON)
          ->order('seq')
          ->fetchAll());
        if (!is_null($type)) {
            $data[''] = '選択して下さい';
            foreach ($temp as $k => $v) {
                $data[$v['id']] = $v['name'];
            }
        } else {
            $data['指名なし'] = '指名なし';
            foreach ($temp as $k => $v) {
                $data[$v['name']] = $v['name'];
            }
        }

        return $data;
    }

/*
    アクセス解析ページ用
 */
    function getAnalyzeFileList()
    {
        global $html;
        $list = array();
        $list[''] = '全ページ';
        foreach ($html['name'] as $k => $v) {
            $list[$k] = $v;
        }
        return $list;
    }

/*
    ページリンク生成
 */
    function pageInfo($cnt, $limit, $url='?p=%page%')
    {
        global $smarty, $request;
        $pager = Pager::getInstance();
    // リンクURL設定
        $pager->setUrl($request->getPath() . $url);
    // 現在ページ設定
        $pager->setCurrentPage(getParamPage());
    // データ総数設定
        $pager->setDataCount($cnt);
    // 1ページ表示件数設定
        $pager->setCountPerPage($limit);
    // ページ計算処理実行
        $pager->paginate();
    // ページャーを設定
        $smarty->assign('page_info', $pager->getPageInfo());
        return $pager->getDataOffset();
    }

/*
    メール送信処理
 */
    function sendEmail($subject, $body, $from=null, $to=null)
    {
        if (is_null($from)) {$from = SHOP_MAIL_FROM;}
        if (is_null($to)) {$to = array(SHOP_MAIL_INFO => 'お問合せフォーム');}

    // SMTPトランスポートを使用
        $transport = \Swift_SmtpTransport::newInstance('localhost', 25);
    // メーラークラスのインスタンスを作成
        $mailer = \Swift_Mailer::newInstance($transport);
    // メッセージ作成
        $message = \Swift_Message::newInstance()
        ->setSubject($subject)
        ->setTo($to)
        ->setFrom($from)
        ->setBody($body);
    // メール送信
        $result = $mailer->send($message);

        return $result;
    }

/*
    アクセス解析設定(モバイル版)
*/
    function getGaUrlForMobile()
    {
        $GA_ACCOUNT = MOBILE_GA_ACCOUNT;
        $GA_PIXEL = MOBILE_GA_PIXEL;
        $url = "";
        $url .= $GA_PIXEL . "?";
        $url .= "utmac=" . $GA_ACCOUNT;
        $url .= "&utmn=" . rand(0, 0x7fffffff);
        $referer = $_SERVER["HTTP_REFERER"];
        $query = $_SERVER["QUERY_STRING"];
        $path = $_SERVER["REQUEST_URI"];
        if (empty($referer)) {
          $referer = "-";
      }
      $url .= "&utmr=" . urlencode($referer);
      if (!empty($path)) {
          $url .= "&utmp=" . urlencode($path);
      }
      $url .= "&guid=ON";

      return str_replace("&", "&amp;", $url);
  }

/*
  ブログ一覧を取得する
*/
function getBlogList()
{
    $query = ' select *, from_unixtime(date) as date_time from '.TBL_BLOG_DATA;
    $query .= " order by date desc";
    $db = Db::factory();
    $stmt = $db->query($query);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $data;
}

// スタッフIDを取得する
  function getParamStaffId()
  {
    global $request;
    $sid = $request->getQuery('sid');
    if (filter_var($sid, FILTER_VALIDATE_INT) === false) {
        $sid = false;
    }

    return $sid;
}

// サムネイル番号を取得する
function getParamStaffPhotoNo()
{
    global $request;
    $no = $request->getQuery('no');
    if (filter_var($no, FILTER_VALIDATE_INT) === false) {
        $no = 1;
    }

    return $no-1;
}

// 現在ページ数を取得する
function getParamPage()
{
    global $request;
    $current = $request->getQuery('p');
    if (filter_var($current, FILTER_VALIDATE_INT) === false) {
        $current = 1;
    }

    return $current;
}

// 現在の日数を取得する
function getParamDays()
{
    global $request;
    $day = $request->getQuery('day');
    if (filter_var($day, FILTER_VALIDATE_INT) === false) {
        $day = 1;
    }

    return $day;
}

// モードを取得する
function getParamMode()
{
    global $request;
    $mode = filter_var($request->getQuery('mode'), FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
    if ($mode === '' || $mode === 'index') {
        $mode = 'index';
    } elseif ($mode === 'confirm') {
        $mode = 'confirm';
    } elseif ($mode === 'finish') {
        $mode = 'finish';
    } else {
        $mode = false;
    }

    return $mode;
}

function getParamDevice()
{
    global $request;
    $device = filter_var($request->getQuery('device'), FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
    if ($device === '' || $device === false){
        $device = 'pc';
    }

    return $device;
}

function getParamFileName()
{
    global $html, $request;
    $file_name= filter_var($request->getQuery('file_name'), FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
    if ($file_name=== '' || $file_name=== false){
        $file_name = null;
    }

    return $file_name;
}

function getParamDate()
{
    global $request;
    $date = filter_var($request->getQuery('date'), FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
    if ($date === '' || $date === false){
        $date = date('Y-m-d');
    }

    return $date;
}

function make_slot_point()
{
	$model = new Model(TBL_SLOT);
    $sel = $model->select();
    if ($sel->where('point_date', TODAY)->fetchCount() == 0) {
            // スロットデータ更新
        $slot_point = '';
        for ($i = 0; $i < SLOT_LEN; $i++) {
            $slot_point .= mt_rand(1, 9);
        }
        $values = array(
            'point'=> $slot_point,
            'point_date' => TODAY,
            'created'  => date(DATE_FORMAT_STR),
            'updated'  => date(DATE_FORMAT_STR)
            );
        $ins = $model->insert();
        $ins->values($values);
        $ins->execute();
    } else {
        $data = $sel->fields('point')->where('point_date', TODAY)->fetchRow();
        $slot_point = $data['point'];
    }
    return $slot_point;
}

    /* スマホ、ガラケーのURLをPCのURLに変更する関数です。
    用途：SEO対策でアノテーションタグの動的出力の為 */
    function pcRootChange ($non_domain) {
        $url = array();
        if (strstr($non_domain, SP_DIR_PATH)) {
            $url['pc'] = str_replace(SP_DIR_PATH,"/",$non_domain);
        } else if (strstr($non_domain, MB_DIR_PATH)) {
            $url['pc'] = str_replace(MB_DIR_PATH,"/",$non_domain);
        } else {
            $str = ltrim($non_domain, '/');
            $url['sp'] = SP_DIR_PATH.$str;
            $url['mb'] = MB_DIR_PATH.$str;
        }
        return $url;
    }


    /*
     * UA判定
     */
    function get_device_type(){
        $user_agent = mb_strtolower($_SERVER['HTTP_USER_AGENT']);

        // スマートフォン
        if(preg_match('#\b(ip(hone|od);|android.*mobile)|windows.*phone|blackberry.*|psp|3ds|vita#', $user_agent)){
            $device_type = 'sp';
            // タブレット
        }elseif(preg_match('#\ipad|android|kindle|silk|playbook|rim\stablet#', $user_agent)){
            $device_type = 'tablet';
            // PC
        }else{
            $device_type = 'pc';
        }

        return $device_type;
    }