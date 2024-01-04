function formCheck(f) {
    err_msg = ''
    err_msg2 = ''
    err_msg3 = ''
    err_msg4 = ''
    err_msg5 = ''

    //必須チェック
    if (!check_input_text(f, "published")) err_msg += "登録日 ";
    if (!check_input_text(f, "name")) err_msg += "名前 ";
    //文字数チェック
    if (!check_length_text(f, "name", 15)) err_msg2 += "名前 ";
    if (!check_length_text(f, "short_comment", 20)) err_msg2 += "一言コメント ";
    // 形式チェック
    if (!check_input_datetime(f, "published")) err_msg3 += "登録日 ";
    if (!check_form_url(f, "url")) err_msg3 += "URL項目 ";
    if (!check_form_above_digit(f, "age", 18)) err_msg3 += "年齢は18歳以上のみ入力可 ";
    // 数値チェック
    if (!check_form_digit(f, "age")) err_msg4 += "年齢 ";
    if (!check_form_digit(f, "t")) err_msg4 += "T ";
    if (!check_form_digit(f, "b")) err_msg4 += "B ";
    if (!check_form_digit(f, "w")) err_msg4 += "W ";
    if (!check_form_digit(f, "h")) err_msg4 += "H ";
    // タグチェック
    if (!check_tag_string(f, "name")) err_msg5 += "名前 ";
    if (!check_tag_string(f, "short_comment")) err_msg5 += "一言コメント ";
    if (!check_tag_string(f, "long_comment1")) err_msg5 += "お店からのコメント ";
    if (!check_tag_string(f, "long_comment2")) err_msg5 += "セラピストからのコメント ";
    if (!check_tag_string(f, "long_comment3")) err_msg5 += "お客様からのコメント ";

    //エラー確認
    return sendAlert(err_msg, err_msg2, err_msg3, err_msg4, err_msg5)
}
