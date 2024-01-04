function formCheck(f) {
    err_msg = ''
    err_msg2 = ''
    err_msg3 = ''
    err_msg4 = ''
    err_msg5 = ''
    //必須チェック
    if (!check_input_text(f, "event_f_name")) err_msg += "イベント画像 ";
    //エラー確認
    return sendAlert(err_msg, err_msg2, err_msg3, err_msg4, err_msg5)
}
