function formCheck(f) {
    err_msg = ''
    err_msg2 = ''
    err_msg3 = ''
    err_msg4 = ''
    err_msg5 = ''
    //必須チェック
    if (!check_input_text(f, "title")) err_msg += "タイトルタグ ";
    if (!check_input_text(f, "description")) err_msg += "ディスクリプション ";
    if (!check_input_text(f, "h1")) err_msg += "H1 ";
    if (!check_input_text(f, "keywords")) err_msg += "キーワード ";

    // タグチェック
    if (!check_tag_string(f, "title")) err_msg5 += "タイトルタグ ";
    if (!check_tag_string(f, "description")) err_msg5 += "ディスクリプション ";
    if (!check_tag_string(f, "h1")) err_msg5 += "H1 ";
    if (!check_tag_string(f, "keywords")) err_msg5 += "キーワード ";
    //エラー確認
    return sendAlert(err_msg, err_msg2, err_msg3, err_msg4, err_msg5)
}
