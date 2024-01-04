function formCheck(f) {
    err_msg = ''
    err_msg2 = ''
    err_msg3 = ''
    err_msg4 = ''
    err_msg5 = ''
    //必須チェック
    if (!check_input_text(f, "name")) err_msg += "お名前 ";
    if (!check_input_text(f, "age")) err_msg += "年代 ";
    if (!check_input_text(f, "use_count")) err_msg += "ご利用回数 ";
    if (!check_input_text(f, "staff_id")) err_msg += "担当女性 ";
    if (!check_input_text(f, "massage")) err_msg += "マッサージ ";
    if (!check_input_text(f, "kaishun")) err_msg += "回春 ";
    if (!check_input_text(f, "service")) err_msg += "接客 ";
    if (!check_input_text(f, "total")) err_msg += "総合満足度 ";

    //文字数チェック
    if (!check_length_text(f, "comment", 500)) err_msg2 += "メッセージ ";

    //エラー確認
    return sendAlert(err_msg, err_msg2, err_msg3, err_msg4, err_msg5)
}
