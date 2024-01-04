<?php

/*
    フォーム用
 */
define('SHOW_ON', 0);    // 表示
define('SHOW_OFF', 1);   // 非表示
define('SET_ON', 0);     // 設定
define('SET_OFF', 1);    // 非設定
define('DEL_ON', 1);     // 削除
define('DEL_OFF', 0);    // 未削除

/*
    出勤用
 */
define('SCH_TYPE_LAST', 1);    // LAST
define('SCH_TYPE_TEL', 2);    // 電話確認
define('SCH_TYPE_REST', 3);    // お休み
define('SCH_TYPE_RSRV', 4);    // 予約満了

define('SCH_SORT_STAFF', 1);        // スタッフの並び順
define('SCH_SORT_GOING', 2);        // 出勤時間の早い順
define('SCH_WORK_BEFORE', 1);    // 出勤前
define('SCH_WORK_NOW', 2);        // 出勤中
define('SCH_WORK_AFTER', 3);        // 出勤終了
define('SCH_DISPLAY_DAYS', 7);    // 表示日数


/*
    リンク用
 */
define('LINK_PAGE_INDEX', 1); // 認証ページリンク
define('LINK_PAGE_LINK', 2);  // リンクページリンク

/*
    アクセス解析
 */
define('UNIQUE_ON', 1);  // ユニーク
define('UNIQUE_OFF', 0); // 非ユニーク
