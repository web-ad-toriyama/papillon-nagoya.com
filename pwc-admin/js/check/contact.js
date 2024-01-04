function formCheck(f) {
    err_msg = ''
    err_msg2 = ''
    err_msg3 = ''
    err_msg4 = ''
    err_msg5 = ''
    //必須チェック
    if (!check_input_text(f, "page")) err_msg += "修正ページ ";
    if (!check_input_text(f, "comment")) err_msg += "修正内容 ";

    //エラー確認
    return sendAlert(err_msg, err_msg2, err_msg3, err_msg4, err_msg5)
}
