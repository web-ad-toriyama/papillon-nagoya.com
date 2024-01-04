function formCheck(f) {
    err_msg = ''
    err_msg2 = ''
    err_msg3 = ''
    err_msg4 = ''
    err_msg5 = ''
    //必須チェック
    if (!check_input_text(f, "title")) err_msg += "タイトル ";
    if (!check_input_text(f, "url")) err_msg += "リンク先URL ";
    if (!check_input_text(f, "banner_name") && !check_input_text(f, "banner_old")) {
        err_msg += "バナー画像 ";
    }
    //文字数チェック
    if (!check_length_text(f, "title", 30)) err_msg2 += "タイトル ";
    // 形式チェック
    if (!check_form_url(f, "url")) err_msg3 += "リンク先URL ";
    // タグチェック
    if (!check_tag_string(f, "title")) err_msg5 += "タイトル ";
    if (!check_tag_string(f, "url")) err_msg5 += "リンク先URL ";
    //エラー確認
    return sendAlert(err_msg, err_msg2, err_msg3, err_msg4, err_msg5)
}
