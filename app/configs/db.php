<?php

if (ENV === 'public') {
    /*
        テスト環境
     */
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', 'root');
    define('DB_NAME', 'papillon_system');

} else {
    /*
        本番環境
     */
    define('DB_HOST', 'localhost');
    define('DB_USER', 'kir330489');
    define('DB_PASS', 'JiGx6cZq');
    define('DB_NAME', 'papillon_system');
}
define('DB_CHAR', 'utf8');

/*
    テーブル名
 */
define('TBL_ITEM', 'item');                  // プロフィール項目
define('TBL_STAFF', 'staff');                // スタッフ基本情報
define('TBL_STAFF_CLASS', 'staff_class');    // スタッフクラス情報
define('TBL_STAFF_CHECK', 'staff_check');    // スタッフチェック情報
define('TBL_STAFF_ITEM', 'staff_item');      // スタッフ項目情報
define('TBL_STAFF_PHOTO', 'staff_photo');    // スタッフサムネイル情報
define('TBL_STAFF_MOVIE', 'staff_movie');    // スタッフ動画情報
define('TBL_STAFF_SCH', 'staff_sch');        // スタッフスケジュール情報
define('TBL_STAFF_SCH_DEF', 'staff_sch_def');// スタッフスケジュールデフォルト情報
define('TBL_STAFF_RESERVE', 'staff_reserve');// スタッフ予約情報
define('TBL_TOPICS', 'topics');              // 新着情報
define('TBL_TOPICS_TPL', 'topics_tpl');      // 新着情報テンプレート
define('TBL_LINE', 'headline');              // ヘッドラインニュース
define('TBL_LINK', 'link');                  // リンク
define('TBL_LINK_FREE', 'link_free');        // リンク(自由項目)
define('TBL_RANKING', 'ranking');            // ランキング
define('TBL_ANALYTICS', 'analytics');        // アクセス解析
define('TBL_SLOT', 'slot');        // スロット解析
define('TBL_EVENT', 'event');                // イベント情報
define('TBL_IMPRESSIONS', 'impressions');    // セラピスト感想
define('TBL_BLOG_DATA', 'blog_data');    // ブログデータ
define('TBL_PAGE', 'page');                 // ページ情報
define('TBL_ENQUETE', 'enquete');                 // ページ情報
define('TBL_SYSTEM', 'system');                 // システム情報
