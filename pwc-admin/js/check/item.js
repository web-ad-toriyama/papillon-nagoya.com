function formCheck(f) {
    err_msg = ''
    err_msg2 = ''
    err_msg3 = ''
    err_msg4 = ''
    err_msg5 = ''
    //必須チェック
    if (!check_input_text(f, "name")) err_msg += "項目名 ";
    //文字数チェック
    if (!check_length_text(f, "name", 30)) err_msg2 += "項目名 ";
    // タグチェック
    if (!check_tag_string(f, "name")) err_msg5 += "項目名 ";
    //エラー確認
    return sendAlert(err_msg, err_msg2, err_msg3, err_msg4, err_msg5)
}
