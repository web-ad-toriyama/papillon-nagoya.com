function formCheck(f) {
    err_msg = ''
    //必須チェック
    if (!check_input_text(f, "login_id")) err_msg += "ログインID ";
    if (!check_input_text(f, "login_pass")) err_msg += "パスワード ";

    if (err_msg.length > 0) {
        if (err_msg.length > 0) err_msg = "以下に未入力の項目があります\n" + err_msg;
        alert(err_msg);
        return false;
    }
    return alertConfirm('login');
}
