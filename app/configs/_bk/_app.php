<?php

if (strstr($_SERVER['HTTP_HOST'], 'local')) {
    /*
        テスト環境
     */

    define('ENV', 'public');
    define('DBG', false);
    error_reporting(E_ALL ^ E_NOTICE);
    define('TEST_DIR', '');
    define('ROOT_URL', 'http://cast_system.local' . TEST_DIR);
} else {
    /*
        本番環境
     */
    define('ENV', 'product');
    define('DBG', false);
    // エラーを表示させない
    //ini_set('display_errors', 0);
    //error_reporting(0);
    define('TEST_DIR', '/castsystem');
    define('ROOT_URL', 'http://kir211377.kir.jp' . TEST_DIR);
}

define('TOKEN_KEY', 'pwc_token');
define('TOKEN_SALT', 'm)U0$gF5,4"]G24qj280!qt9!z(eH7;');
define('DATE_FORMAT_STR', 'Y-m-d H:i:s');


/*
    テンプレ設定
 */
session_start();
$tmp['view'] = '/view';
$tmp['images'] = '/images';
if(strpos($_SERVER['REQUEST_URI'],'/s/') !== false || strpos($_SERVER['REQUEST_URI'],'/m/') !== false) {
} else {
    if (array_key_exists('tmp_sw', $_POST)) {
        if ($_POST['tmp_sw'] == 2) {
            $tmp['view'] = '/view_01';
            $tmp['images'] = '/images_01';
        }
        if ($_POST['tmp_sw'] == 3) {
            $tmp['view'] = '/view_02';
            $tmp['images'] = '/images_02';
        }
        $_SESSION['tmp_view'] = $tmp;
        $_SESSION['tmp_sw'] = $_POST['tmp_sw'];
    } else {
        ($_SESSION['tmp_view']['view'] == '')?$tmp['view']=$tmp['view']:$tmp['view']=$_SESSION['tmp_view']['view'];
        ($_SESSION['tmp_view']['images'] == '')?$tmp['images']=$tmp['images']:$tmp['images']=$_SESSION['tmp_view']['images'];
    }
}
define('TPL_DIR_VIEW', $tmp['view']);// 1カラム='/view' グローバルナビ横='/view_01' グローバルナビ縦='/view_02'
define('TPL_DIR_IMG', $tmp['images']); // 1カラム='/images' グローバルナビ横='/images_01' グローバルナビ縦='/images_02'

/*
    パス設定
 */
require_once __DIR__ . '/path.php';


/*
    データベース設定
 */
require_once __DIR__ . '/db.php';

/*
    フラグ設定
 */
require_once __DIR__ . '/flg.php';

/*
    フォーム要素設定
 */
require_once __DIR__ . '/form.php';


/*
    ページネーション設定
 */
define('DISPLAY_RANGE', 5);        // 範囲
define('PAGER_ADMIN_LIST', 10);    // 管理画面一覧
define('PAGER_PC_TOPICS', 1);    // 新着情報(PC)
define('PAGER_MB_TOPICS', 1);    // 新着情報(MB)
define('PAGER_SP_TOPICS', 2);    // 新着情報(SP)
define('PAGER_PC_STAFF', 100);   // スタッフ一覧(PC)
define('PAGER_MB_STAFF', 2);     // スタッフ一覧(MB)
define('PAGER_SP_STAFF', 10);    // スタッフ一覧(SP)
define('PAGER_PC_IMPRESSIONS', 2);   // スタッフ一覧感想(PC)
define('PAGER_MB_IMPRESSIONS', 2);     // スタッフ一覧感想(MB)
define('PAGER_SP_IMPRESSIONS', 2);    // スタッフ一覧感想(SP)

/*
    画像設定
 */
define('IMAGE_MB_SUFFIX', 'mb_');
define('IMAGE_SP_SUFFIX', 'sp_');
define('IMAGE_FILE_MAX', 500000);    // 最大容量(500000=500kb)
define('IMAGE_COUNT', 5);            // 画像枚数
define('IMAGE_DETAIL_COUNT',1);      // 何枚目から詳細ページに表示するか
// PC版
define('IMAGE_SIZE_PC_W', 300);        // 横幅
define('IMAGE_SIZE_PC_H', 450);        // 縦幅
// MB版
define('IMAGE_SIZE_MB_W', 80);        // 横幅
define('IMAGE_SIZE_MB_H', 120);        // 縦幅
// SP版
define('IMAGE_SIZE_SP_W', 200);        // 横幅
define('IMAGE_SIZE_SP_H', 300);        // 縦幅

// ※以下のサイズはサイトに合わせてください
// イベントPC版
define('IMAGE_SIZE_EVENT_PC_W', 730);       // 横幅
define('IMAGE_SIZE_EVENT_PC_H', 300);       // 縦幅
// イベントMB版
define('IMAGE_SIZE_EVENT_MB_W', 240);       // 横幅
define('IMAGE_SIZE_EVENT_MB_H', 99);        // 縦幅
// イベントSP版
define('IMAGE_SIZE_EVENT_SP_W', 700);       // 横幅
define('IMAGE_SIZE_EVENT_SP_H', 290);        // 縦幅

/*
    動画設定
 */
define('MOVIE_FILE_MAX', 20000000);    // 最大容量(20000000=20mb)
define('IMAGE_MOVIE_SUFFIX', 'mov_');
define('IMAGE_MOVIE_SIZE_W', 350); // 横幅
define('IMAGE_MOVIE_SIZE_H', 200); // 縦幅

/*
    youtube動画設定
 */
define('YOUTUBE_PC_SIZE_W', 340); // 横幅
define('YOUTUBE_PC_SIZE_H', 220); // 縦幅
define('YOUTUBE_SP_SIZE_W', '100%'); // 横幅
define('YOUTUBE_SP_SIZE_H', 240); // 縦幅

/*
    ログイン情報
 */
define('LOGIN_ID', 1);                // ログインID
define('LOGIN_PASS', 1);              // パスワード
define('LOGIN_COOKIE', 'logined');    // 保存クッキー名
define('LOGIN_EXPIRE', 7);            // ログイン保持日数
define('LOGIN_SALT', 'aD1ciRd4Ug0');  // 暗号化キー

/*
    サイト情報
 */
define('SHOP_URL','http://kir211377.kir.jp');
define('STAFF_CALL', 'スタッフ');
define('SHOP_NAME', '東京の癒しアロマエステならTEST〜テスト店舗〜');
define('SHOP_TEL', '000-0000-0000');
define('SHOP_TEL_RECRUIT', '11-1111-1111');
define('SHOP_OPEN', '12:00〜5:00');
define('SHOP_RECEPTION','11:00〜4:00');
define('SHOP_AREA', '東京・神田発');
define('SHOP_MAIL_INFO','info@pandaweb.jp');
define('SHOP_MAIL_MAGA_REGIST','regist-test@agal.jp');
define('SHOP_MAIL_MAGA_CANCEL','cancel-test@agal.jp');
define('SHOP_MAIL_RECRUIT','info@pandaweb.jp');
define('SHOP_MAIL_ENQUETE','info@pandaweb.jp');
define('SHOP_MAIL_RESERVE','info@pandaweb.jp');
define('SHOP_MAIL_IMPRESSIONS','umezaki@pandaweb.jp');
define('SHOP_LINEID','line-xxxxx');

define('SHOP_TODAY', 6); // スケジュール切り替え時間 6=翌6時
define('DEFAULT_PROFILE','考え中');

define('SLOT_FLG', 1); //スロット使用フラグ(0:未使用 1:使用)
define('SLOT_LEN', 4); // スロット桁数

/*
    アクセス解析設定
 */
define('MOBILE_GA_ACCOUNT','MO-xxxxxxxx-x');  // 携帯用GAアカウント
define('MOBILE_GA_PIXEL',ROOT_URL.'/ga.php'); // GA解析ファイルパス

define('UNIQUE_TIME',5);        // 解析ユニーク時間 5=5分
define('DUPLICATION_TIME',1);   // 解析重複時間 1=1分

/*
    出勤設定
 */
define('DEFAULT_GOING_HOUR', 8);              // 出勤(時)デフォルト
define('DEFAULT_GOING_MIN', 0);               // 出勤(分)デフォルト
define('DEFAULT_LEAVE_HOUR', 21);             // 退勤(時)デフォルト
define('DEFAULT_LEAVE_MIN', 30);              // 退勤(分)デフォルト
define('DEFAULT_ALLOW_MODE', SCH_TYPE_TEL);   // オプション(SCH_TYPE_TEL=TEL確認 / SCH_TYPE_REST=お休み / 何もなし=0)
define('DEFAULT_SORT_MODE', SCH_SORT_GOING);  // 並び順(SCH_SORT_STAFF=スタッフ並び順 / SCH_SORT_GOING=出勤の早い順)
define('DEFAULT_DISPLAY_MODE', SCH_TYPE_TEL); // スケジュール未登録時(SCH_TYPE_TEL=TEL確認 / SCH_TYPE_REST=お休み / 何もなし=0)
define('DEFAULT_DISPLAY_DAYS_PC',7);          // スケジュール表示日数(出勤ページPC)
define('DEFAULT_DISPLAY_DAYS_MB',3);          // スケジュール表示日数(出勤ページMB)
define('DEFAULT_DISPLAY_DAYS_SP',5);          // スケジュール表示日数(出勤ページSP)
define('DEFAULT_DISPLAY_DAYS_DETAIL_PC',7);   // スケジュール表示日数(詳細ページPC)
define('DEFAULT_DISPLAY_DAYS_DETAIL_MB',7);   // スケジュール表示日数(詳細ページMB)
define('DEFAULT_DISPLAY_DAYS_DETAIL_SP',7);   // スケジュール表示日数(詳細ページSP)

/*
    ランキング設定
 */
define('DISPLAY_RANKING_NO', 3);  // ランキング表示順位

/*
    タイトルタグetc設定
 */
require_once __DIR__ . '/html.php';



/*------------------------------------------------------->

    canonicalタグとalternateタグ用 両脇の[ / ]はつけてください。

<--------------------------------------------------------*/
define('URL_NON_DOMAIN',$_SERVER["REQUEST_URI"]);
define('PC_DIR_PATH', '/pc/');
define('SP_DIR_PATH', '/s/');
define('MB_DIR_PATH', '/m/');