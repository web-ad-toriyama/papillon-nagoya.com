<?php

require __DIR__ . '/../common/start.php';

// テンプレート設定
$templateFile = '/admin/staff/reserve.html';

// 1週間の取得
if (is_null($params['w'])) {
    $params['w'] = 1;
}
$week = getSchWeek($params['w']);

// 基本情報取得
$model = new Model(TBL_STAFF);
$model2 = new Model(TBL_STAFF_SCH);
$sel = $model->select();

$cnt = count(h($sel->fields('id')
              ->joinInner($model2, array(TBL_STAFF.'.id = '.TBL_STAFF_SCH.'.staff_id'))
              ->where('show_flg', SHOW_ON)
              ->where('rest_flg', SET_OFF)
              ->distinct()
              ->fetchAll()));

$offset = pagination($cnt, PAGER_ADMIN_LIST);
$data = h($sel->fields('id, name')
              ->joinInner($model2, array(TBL_STAFF.'.id = '.TBL_STAFF_SCH.'.staff_id'))
              ->where('show_flg', SHOW_ON)
              ->where('rest_flg', SET_OFF)
              ->order('seq')
              ->limit(PAGER_ADMIN_LIST)
              ->offset($offset)
              ->distinct()
              ->fetchAll());


if (count($data) > 0) {
    foreach ($data as $k => $v) {        
        $data[$k]['photo'] = getStaffPhoto($v['id'], 1);
        $data[$k]['sch']   = getStaffReserve($v['id'], $week, true);
    }
}
if ($posts['submit']) {

    $yy = substr($posts['day'], 0, 4);
    $mm = substr($posts['day'], 7, 2);
    $dd = substr($posts['day'], 12, 2);
    $date = str_replace("日", "", str_replace("月", "",str_replace("年", "", $posts['day'])));
    $goingTime = mktime($posts['going_hour'], $posts['going_min'], 0, $mm, $dd, $yy);
    $leaveTime = mktime($posts['leave_hour'], $posts['leave_min'], 0, $mm, $dd, $yy);
    
    $model = new Model('staff_reserve');
    $values = array(
    'staff_id'   => $posts['staff_id'],
    'date'       => $date,
    'going_time' => $goingTime,
    'leave_time' => $leaveTime,
    'created'   => date(DATE_FORMAT_STR),
    'updated'   => date(DATE_FORMAT_STR)
 );

    // 登録
    $ins = $model->insert();
    $ins->values($values);
    $ins->execute();
    redirect(AD_URL . '/staff/reserve.php?id='.$params['id'].'&p='.$params['p'].'&w='.$params['w']);
}

if($_GET['delete']){
    $get = $_GET;
    $model = new Model('staff_reserve');
    $del = $model->delete();
    $del->where('id', $get['delete']);
    $del->execute();
    
    redirect(AD_URL . '/staff/reserve.php?p='.$params['p'].'&w='.$params['w']);
}

$form['staff_list'] = getFormReserveStaffList();
$smarty->assign('today', date('Y年m月d日', strtotime('today', time())));
$smarty->assign('week', $week);

require __DIR__ . '/../common/display.php';

function getFormReserveStaffList()
{
    $data[0] = '未選択';
    $model = new Model(TBL_STAFF);
    $model2 = new Model(TBL_STAFF_SCH);
    $sel = $model->select();
    $temp = h($sel->fields('id, name')
              ->joinInner($model2, array(TBL_STAFF.'.id = '.TBL_STAFF_SCH.'.staff_id'))
              ->where('show_flg', SHOW_ON)
              ->where('rest_flg', SET_OFF)
              ->order('seq')
              ->distinct()
              ->fetchAll());
        
    foreach ($temp as $k => $v) {
        $data[$v['id']] = $v['name'];
    }

    return $data;
}
