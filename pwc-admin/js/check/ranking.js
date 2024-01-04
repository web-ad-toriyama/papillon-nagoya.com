function formCheck(f, staff, no) {
    err_msg = ''
    err_msg2 = ''
    err_msg3 = ''
    err_msg4 = ''
    err_msg5 = ''
    err_msg6 = ''

    // 重複選択の確認
    for (var i=1; i < no; i++) {
        e1 = f.elements["staff_id_"+i];
        for (var j=i+1; j < no+1; j++) {
            e2 = f.elements["staff_id_"+j];
            if (e1.selectedIndex > 0) {
                if (e1.selectedIndex == e2.selectedIndex) {
                    err_msg6 += i+"位と"+j+"位で"+staff+"が重複しています。\n";
                    break;
                }
            }
        }
    }

    if (err_msg6 == '') {
        for (var i=1; i < no+1; i++) {
            //必須チェック
            if (!check_input_list(f, "staff_id_"+i)) err_msg += i+"位 ";
            //文字数チェック
            if (!check_length_text(f, "free_text_"+i, 20)) err_msg2 += i+"位 ";
            // タグチェック
            if (!check_tag_string(f, "free_text_"+i)) err_msg5 += i+"位 ";
        };

        //エラー確認
        return sendAlert(err_msg, err_msg2, err_msg3, err_msg4, err_msg5)
    }

    alert(err_msg6);
    return false;
}
