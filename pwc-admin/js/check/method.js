//入力有無の判定(radio)
function check_input_radio(f, f_name) {
    e = f.elements[f_name];
    if (e) {
        var bChk = false;
        if (e.length) {
            for (i = 0; i < e.length; i++) {
                if (e[i].checked) {
                    bChk = true;
                    break;
                }
            }
        }
        return bChk;
    }
    return true;
}

//入力有無の判定(checkbox)
function check_input_checkbox(f, f_name, v_min, v_max, max_check) {
    e = f.elements[f_name];
    if (e) {
        var n_check = 0;
        for (i = v_min; i <= v_max; i++) {
            var e1 = f.elements[f_name + "[" + i + "]"];
            if (e1) {
                if (e1.checked) {
                    n_check += 1;
                }
            }
        }
        if (n_check == 0)    return false;
    }
    return true;
}

//入力有無の判定(list)
function check_input_list(f, f_name) {
    e = f.elements[f_name];
    if (e) {
        var bChk = false;
        if (e.selectedIndex != -1) {
            if (e.options[e.selectedIndex].value > 0) {
                bChk = true;
            }
        }
        return bChk;
    }
    return true;
}

//入力有無の判定(text, textarea)
function check_input_text(f, f_name) {
    e = f.elements[f_name];
    if (e) {
        var bChk = true;
        if (e.value.length == 0)    bChk = false;
        return bChk;
    }
    return true;
}

function check_input_datetime(f, f_name) {
    e = f.elements[f_name];
    if (e && e.value.length > 0) {
        // 形式チェック
        if (!e.value.match(/^\d{4}\-\d{2}\-\d{2}[ ]\d{2}\:\d{2}$/))
            return false;
        // 妥当性チェック
        var ymd = e.value.substring(0, 10)
        var y = ymd.split("-")[0];
        var m = ymd.split("-")[1];
        var d = ymd.split("-")[2];
        dt = new Date(y, m - 1, d);
        return (dt.getFullYear() == y && dt.getMonth() == m - 1 && dt.getDate() == d);
    }
    return false;
}

//文字数制限
function check_length_text(f, f_name, max_length) {
    e = f.elements[f_name];
    if (e) {
        if (e.value.length > max_length)    return false;
    }
    return true;
}

//文字数制限(ID指定）
function check_length_tag_text(f, f_name, max_length) {
    e = f.elements[f_name];
    str = e.value;
    reg = new RegExp(/<(".*?"|'.*?'|[^'"])*?>/g);
    str = str.replace(reg, "");
    if (f_name == "comment") {
        var reg1 = new RegExp(/\n\t/g);
        str = str.replace(reg1, "");
        var reg2 = new RegExp(/\n/g);
        str = str.replace(reg2, "");
    }
    if (str) {
        if (str.length > max_length)    return false;
    }
    return true;
}

//文字種別判定(半角数字)
function check_form_digit(f, f_name) {
    e = f.elements[f_name];
    if (e && e.value.length > 0) {
        if (!e.value.match(/^[0-9]+$/))    return false;
    }
    return true;
}

//タグ判定
function check_tag_string(f, f_name) {
    e = f.elements[f_name];
    if (e && e.value.length > 0) {
        if (e.value.match(/<\/?[^>]+>/))    return false;
    }
    return true;
}

//文字種別判定(全角カナ)
function check_form_k_kana(f, f_name) {
    e = f.elements[f_name];
    if (e && e.value.length > 0) {
//		if( !e.value.match(/^[ァ-ンーｰ]+$/) )	return false;
        if (!e.value.match(/^[ァ-ンーｰヴァヴィヴゥヴェヴォ]+$/))    return false;
    }
    return true;
}

//文字形式判定(年月日+時刻)
function check_form_datetime(f, f_name) {
    e = f.elements[f_name];
    if (e && e.value.length > 0) {
        if (e.value.match(/^20[0-9][0-9]-[0-1]*[0-9]-([0-2]*[0-9]|3[0-1])$/))
            e.value += " 00:00:00";
        if (!e.value.match(/^20[0-9][0-9]-[0-1]*[0-9]-([0-2]*[0-9]|3[0-1])[\s]+([0-1]*[0-9]|2[0-3])(:[0-5]*[0-9]){1,2}$/))
            return false;
    }
    return true;
}

//文字形式判定(電話番号 -付市外局番含む)
function check_form_telno(f, f_name) {
    e = f.elements[f_name];
    if (e && e.value.length > 0) {
        // 2014/09/04 フリーダイヤルが入力出来ない不具合対応 kurihara
        // if( !e.value.match(/^\d{1,4}-\d{4}$|^\d{2,5}-\d{1,4}-\d{4}$/) )	return false;
        if (!e.value.match(/^0\d{1,4}-\d{1,4}-\d{3,4}$/))    return false;

    }
    return true;
}

//文字形式判定(mail)
function check_form_email(f, f_name) {
    e = f.elements[f_name];
    if (e && e.value.length > 0) {
        if (!e.value.match(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/))    return false;
    }
    return true;
}

//文字形式判定(URL)
function check_form_url(f, f_name) {
    e = f.elements[f_name];
    if (e && e.value.length > 0) {
        if (!e.value.match(/^(https?|ftp)(:\/\/[-_.!~*\'()a-zA-Z0-9;\/?:\@&=+\\,%#]+)$/))    return false;
    }
    return true;
}

//ファイル拡張子判定
function check_form_ext(f, f_name, arrExt) {
    e = f.elements[f_name];
    if (e && e.value.length > 0) {
        str = e.value;
        //最後のピリオド以降取得
        ppos = str.lastIndexOf(".");
        ext = str.substr(ppos);
        for (i = 0; i < arrExt.length; i++) {
            if (ext == arrExt[i])    return true;
        }
        return false;
    }
    return true;
}

//全てのテキストフィールドからjavascript:void(0);の文字列を置き換える
function replace_void_0(f) {
    var obj = RegExp(/javascript[\s]*:[\s]*void\([\s]*0[\s]*\)[\s]*;/i);
    //全フォーム要素を繰り返す
    for (i = 0; i < f.elements.length; i++) {
        var e = f.elements[i];
        if (e.type == "text" || e.type == "textarea") {
            str_old = e.value;
            e.value = str_old.replace(obj, "VOID_0");
        }
    }
}

function check_form_above_digit(f, f_name, num) {
e = f.elements[f_name];
if (e && e.value.length > 0) {
if (e.value < num) return false;
}

return true;
}
