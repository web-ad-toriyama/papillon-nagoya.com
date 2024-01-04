function formCheck(f) {
    err_msg = ''
    err_msg2 = ''
    err_msg3 = ''
    err_msg4 = ''
    err_msg5 = ''
    //CKEDITORの内容をTextAreaに反映
    for (instance in CKEDITOR.instances) {
        CKEDITOR.instances[instance].updateElement();
    }
    //必須チェック
    if (!check_input_text(f, "published")) err_msg += "登録日 ";
    if (!check_input_text(f, "title")) err_msg += "タイトル ";
    if (!check_input_text(f, "detail")) err_msg += "内容 ";
    //文字数チェック
    if (!check_length_text(f, "title", 30)) err_msg2 += "タイトル ";
    // 形式チェック
    if (!check_input_datetime(f, "published")) err_msg3 += "登録日 ";
    // タグチェック
    if (!check_tag_string(f, "title")) err_msg5 += "タイトル ";
    //エラー確認
    return sendAlert(err_msg, err_msg2, err_msg3, err_msg4, err_msg5)
}
