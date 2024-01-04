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

$template_file = '/' . $dir . '/enquete/' . $mode . '.html';
$mail_template_file = '/pc/enquete/mail.html';

$posts = h($_POST);
$smarty->assign('posts', $posts);

// 内容確認
if ($posts['confirm']) {
    // バリデーション実行
    $rules = array(
        'name'      => array(
            array('rule' => 'required'),
        ),
        'phone'      => array(
            array('rule' => 'required'),
            array('rule' => 'tel'),
        ),
        'staff_id'  => array(
            array('rule' => 'required'),
        ),
        'looks'   => array(
            array('rule' => 'required'),
        ),
        'service'   => array(
            array('rule' => 'required'),
        ),
        'massage'   => array(
            array('rule' => 'required'),
        ),
        'total'     => array(
            array('rule' => 'required'),
        ),
        'staff_phone'     => array(
            array('rule' => 'required'),
        ),
        'room'     => array(
            array('rule' => 'required'),
        ),
        'staff_comment'   => array(
            array('rule' => 'length', 'max' => 500),
        ),
        'comment'   => array(
            array('rule' => 'required'),
            array('rule' => 'length', 'max' => 500),
        ),
    );
    $validator = new Validator();
    $validator->setRules($rules);
    $validator->validate($posts);
    $error = $validator->getError();
    $smarty->assign('error', $error);
    $smarty->assign('best_staff_name', getStaffName($posts['best_staff_id']));
    $smarty->assign('staff_name', getStaffName($posts['staff_id']));
}

// 内容送信
if ($posts['send']) {
    $csrf = $result = false;
    if (Token::check()) {
        // 内容書き込み
        $model = new Model(TBL_ENQUETE);
        $values = array(
            'show_flg'  => SHOW_OFF,
            'use_year'  => $posts['use_year'],
            'use_month' => $posts['use_month'],
            'use_day'   => $posts['use_day'],
            'name'      => $posts['name'],
            'phone'     => $posts['phone'],
            'staff_id'  => $posts['staff_id'],
            'looks'     => $posts['looks'],
            'service'   => $posts['service'],
            'massage'   => $posts['massage'],
            'total'     => $posts['total'],
            'staff_phone'  => $posts['staff_phone'],
            'room'     => $posts['room'],
            'best_staff_id'   => $posts['best_staff_id'],
            'staff_comment'   => $posts['staff_comment'],
            'comment'   => $posts['comment'],
            'created'   => date(DATE_FORMAT_STR),
            'updated'   => date(DATE_FORMAT_STR),
        );
        $ins = $model->insert();
        $ins->values($values);
        $result = $ins->execute();
        $csrf = true;
        $body = $smarty->fetch(VIEW_DIR.$mail_template_file);
//        $result = sendEmail(STAFF_CALL.'アンケート投稿フォーム', $body, null ,array(SHOP_MAIL_IMPRESSIONS => STAFF_CALL.'アンケート投稿フォーム'));
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

