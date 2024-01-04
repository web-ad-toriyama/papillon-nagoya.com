function formCheck(f) {
    err_msg = ''
    err_msg2 = ''
    err_msg3 = ''
    err_msg4 = ''
    err_msg5 = ''

    // var targets = Array('free_text');
    // var schedule_num = $(".reserves").length;
    // for(i=0;i<schedule_num;i++){
    //     len = targets.length;
    //     for(var l=0;l < len;l++){
    //         var e = $('.reserves').eq(i).find('.'+targets[l]);
    //         if (e.val().length > 10) {
    //             err_msg2 += (i+1)+"日目 ";
    //         }
    //         if (e.val().match(/<\/?[^>]+>/)) {
    //             err_msg5 += (i+1)+"日目 ";
    //         }
    //     }
    // }

    //エラー確認
    return sendAlert(err_msg, err_msg2, err_msg3, err_msg4, err_msg5)
}
