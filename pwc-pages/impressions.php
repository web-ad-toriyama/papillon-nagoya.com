<?php

/*
    セラピスト感想ページ
 */

$mode = getParamMode();
$sid = getParamStaffId();

// 不正なパラメーターが引き渡されたらトップページにリダイレクト
if ($mode === false) {
    redirect(ROOT_URL);
}

// CSRF対策用トークン
Token::getInstance();
Token::init();

$template_file = '/' . $dir . '/impressions/' . $mode . '.html';
$mail_template_file = '/pc/impressions/mail.html';

$posts = h($_POST);
$smarty->assign('posts', $posts);

// 内容確認
if ($posts['confirm']) {
    // バリデーション実行
    $rules = array(
        'name'      => array(
            array('rule' => 'required'),
        ),
        'age'       => array(
            array('rule' => 'required'),
        ),
        'use_count' => array(
            array('rule' => 'required'),
        ),
        'staff_id'  => array(
            array('rule' => 'required'),
        ),
        'massage'   => array(
            array('rule' => 'required'),
        ),
        'kaishun'   => array(
            array('rule' => 'required'),
        ),
        'service'   => array(
            array('rule' => 'required'),
        ),
        'total'     => array(
            array('rule' => 'required'),
        ),
        'comment'   => array(
            array('rule' => 'length', 'max' => 500),
        ),
    );
    $validator = new Validator();
    $validator->setRules($rules);
    $validator->validate($posts);
    $error = $validator->getError();
    $smarty->assign('error', $error);
    $smarty->assign('staff_name', getStaffName($posts['staff_id']));
}

// 内容送信
if ($posts['send']) {
    $csrf = $result = false;
    if (Token::check()) {
        // 内容書き込み
        $model = new Model(TBL_IMPRESSIONS);
        $values = array(
            'name'      => $posts['name'],
            'staff_id'  => $posts['staff_id'],
            'show_flg'  => SHOW_OFF,
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
            'created'   => date(DATE_FORMAT_STR),
            'updated'   => date(DATE_FORMAT_STR),
        );
        $ins = $model->insert();
        $ins->values($values);
        $result = $ins->execute();
        $csrf = true;
        $body = $smarty->fetch(VIEW_DIR.$mail_template_file);
        $result = sendEmail(STAFF_CALL.'感想投稿フォーム', $body, null ,array(SHOP_MAIL_IMPRESSIONS => STAFF_CALL.'感想投稿フォーム'));
    }
    $smarty->assign('csrf', $csrf);
    $smarty->assign('result', $result);
}

$smarty->assign('year', date('Y'));
$smarty->assign('month', date('n'));
$smarty->assign('day', date('j'));
$smarty->assign('staff_list', getReserveStaffList('impressions'));
$smarty->assign('sid', $sid);
$smarty->assign('token', Token::fetch());

