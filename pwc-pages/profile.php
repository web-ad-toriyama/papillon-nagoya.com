<?php

/*
    在籍詳細ページ
 */

$sid = getParamStaffId();

// 不正なIDが引き渡されたらトップページにリダイレクト
if ($sid === false) {
	redirect(ROOT_URL);
}

// スタッフ情報取得
$staff = getStaffDetail($sid, $suffix);

$enquete = getStaffEnqList($dir, $sid);

// データが存在しなければトップページにリダイレクト
if (count($staff) == 0) {
	redirect(ROOT_URL);
}

// 感想情報取得
//$imp = getStaffImpList($dir, $sid);

// 日程表示数変更
$max = DEFAULT_DISPLAY_DAYS_DETAIL_PC;
if ($dir === 'mb') {
    $max = DEFAULT_DISPLAY_DAYS_DETAIL_MB;
} elseif ($dir === 'sp') {
    $max = DEFAULT_DISPLAY_DAYS_DETAIL_SP;
}

$staff['schedule'] = array_slice($staff['schedule'], 0, $max);

$smarty->assign('week', array_slice(getSchWeek(), 0, $max));
$smarty->assign('staff', $staff);
$smarty->assign('imp', $imp);
$smarty->assign('enquete', $enquete);
$smarty->assign('staff_list', getReserveStaffList('impressions'));
$smarty->assign('no', getParamStaffPhotoNo());

$page['title'] = str_replace("●●●", $staff['name'], $page['title']);
$page['keywords'] = str_replace("●●●", $staff['name'], $page['keywords']);
$page['h1'] = str_replace("●●●", $staff['name'], $page['h1']);
$page['h2'] = str_replace("●●●", $staff['name'], $page['h2']);
$page['description'] = str_replace("■■", $staff['age'], str_replace("●●●", $staff['name'], $page['description']));