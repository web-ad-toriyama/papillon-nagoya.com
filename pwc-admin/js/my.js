$(function () {
    // 並べ替え用
    $("#sort").sortable({
        opacity: 0.8,
        cursor: "move",
        delay: 10,
        update: function (event, ui) {
            var result = $("#sort").sortable("toArray");
            $("#seq").val(result);
        }
    }).disableSelection();

    $("#sort_photo").sortable({
        opacity: 0.8,
        cursor: "move",
        delay: 10,
        update: function (event, ui) {
            var result = $("#sort_photo").sortable("toArray");
            $("#seq").val(result);
        }
    }).disableSelection();

    // スタッフ選択ボタン
    var headerHight = 60; //ヘッダの高さ
    $('a[href^=#]').click(function(){
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top-headerHight; //ヘッダの高さ分位置をずらす
        $("html, body").animate({scrollTop:position}, 200, "linear", function(){
                //チェックボックスの現在のステータスを取得
                var chk_status = $("#sch-modal-trigger").prop("checked");
                //取得したステータスが true なら false を、 false なら true をセットする
                if(chk_status){
                    //チェックボックスをOFFにする（チェックを外す）。
                    $("#sch-modal-trigger").prop("checked", false);
                }
        });
        return false;
    });

});

function sortCheck() {
    if ($('#seq').val() == '') {
        alert('データを並び替えてから実行ボタンを押して下さい。');
        return false
    } else {
        return alertConfirm('sort');
    }
    return false;
}

function delCheck(url)
{
    if (confirm('データを削除しますか？')) {
        window.location.href = url;
    }
    return false;
}

//ファイルのアップロード処理
function uploadFile(fname, id) {
    window.open("../upload/?field=" + fname + "&id=" + id, "FileUpload", "width=700,height=500,scrollbars=yes");
    return false;
}



function sendAlert(err_msg, err_msg2, err_msg3, err_msg4, err_msg5) {
    if (err_msg.length > 0 || err_msg2.length > 0 || err_msg3.length > 0 || err_msg4.length > 0 || err_msg5.length > 0) {
        if (err_msg.length > 0) err_msg = "以下に未入力の項目があります\n" + err_msg + "\n";
        if (err_msg2.length > 0) err_msg2 = "\n以下の項目に入力文字数エラーがあります\n" + err_msg2 + "\n";
        if (err_msg3.length > 0) err_msg3 = "\n以下の項目に形式エラーがあります\n" + err_msg3 + "\n";
        if (err_msg4.length > 0) err_msg4 = "\n以下の項目は半角数値のみで入力して下さい\n" + err_msg4 + "\n";
        if (err_msg5.length > 0) err_msg5 = "\n以下の項目にHTMLタグは入力できません\n" + err_msg5;
        alert(err_msg + err_msg2 + err_msg3 + err_msg4 + err_msg5);
        return false;
    }
    return alertConfirm('edit');
}

function alertConfirm(mode) {
    var msg = '';
    if (mode == 'del') {
        msg = '削除を実行しますか？';
    }
    if (mode == 'sort') {
        msg = '並べ替えを実行しますか？';
    }
    if (mode == 'edit') {
        msg = '登録を実行しますか？';
    }
    if (mode == 'login') {
        msg = 'ログインしますか？';
    }
    if (confirm(msg)) {
        return true;
    } else {
        return false;
    }
}

//ページ内スクロールをスムーズ化 ＆ ヘッダー分のずれを修正
// $(function () {
//     var headerHight = 60; //ヘッダの高さ
//     $('a[href^=#]').click(function(){
//         var href= $(this).attr("href");
//         var target = $(href == "#" || href == "" ? 'html' : href);
//         var position = target.offset().top-headerHight; //ヘッダの高さ分位置をずらす
//             $("html, body").animate({scrollTop:position}, 550, "swing", function(){

//                 $("#my_button1").on("click", function (evt) {
//                     //チェックボックスの現在のステータスを取得
//                     chk_status = $("#sch-modal-trigger").prop("checked");
                    
//                     //取得したステータスが true なら false を、 false なら true をセットする
//                     if(chk_status){
//                         //チェックボックスをOFFにする（チェックを外す）。
//                         $("#sch-modal-trigger").prop("checked", false);
//                     }else{
//                         //チェックボックスをONにする（チェックする）。
//                         $("#sch-modal-trigger").prop("checked", true);
//                     }
//             });
//             return false;
//     });
// });
