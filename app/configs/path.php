<?php

define('FS_VIEW_DIR',TPL_DIR_VIEW);                // テンプレート
define('FS_IMAGES_DIR',TPL_DIR_IMG);            // 画像

define('FS_VIEW_AD_DIR', '/view');                // テンプレート 管理画面、コンパイルファイル
define('FS_IMAGES__BASE_DIR', '/images');         // 画像 基本値
define('FS_LOG_DIR', '/log');                  // ログ
define('FS_STAFF_DIR', '/images_staff');       // スタッフ画像
define('FS_TOPICS_DIR', '/images_topics');     // 新着情報画像
define('FS_BANNER_DIR', '/images_banner');     // バナー画像
define('FS_TEMP_DIR', '/images_temp');         // 一時ファイル
define('FS_EVENT_DIR', '/images_event');     // イベント画像
define('FS_MB_DIR', '/m');                     // モバイル版
define('FS_SP_DIR', '/s');                     // スマートフォン版
define('FS_AD_DIR', '/pwc-admin');             // 管理画面

define('ROOT_DIR', $_SERVER['DOCUMENT_ROOT'] . TEST_DIR);
define('VIEW_DIR', ROOT_DIR . FS_VIEW_DIR);
define('VIEW_AD_DIR', ROOT_DIR . FS_VIEW_AD_DIR);
define('LOG_DIR', ROOT_DIR . FS_LOG_DIR);
define('IMAGES_DIR', ROOT_DIR . FS_STAFF_DIR);
define('IMG_STAFF_DIR', ROOT_DIR . FS_STAFF_DIR);
define('IMG_TOPICS_DIR', ROOT_DIR . FS_TOPICS_DIR);
define('IMG_BANNER_DIR', ROOT_DIR . FS_BANNER_DIR);
define('IMG_TEMP_DIR', ROOT_DIR . FS_TEMP_DIR);
define('IMG_EVENT_DIR', ROOT_DIR . FS_EVENT_DIR);

define('MB_URL', ROOT_URL . FS_MB_DIR);
define('SP_URL', ROOT_URL . FS_SP_DIR);
define('AD_URL', ROOT_URL . FS_AD_DIR);
define('IMAGES_URL', ROOT_URL . FS_IMAGES_DIR);
define('IMAGES_SP_URL', ROOT_URL . FS_SP_DIR . FS_IMAGES__BASE_DIR);
define('IMAGES_MB_URL', ROOT_URL . FS_MB_DIR . FS_IMAGES__BASE_DIR);
define('IMG_STAFF_URL', ROOT_URL . FS_STAFF_DIR);
define('IMG_TOPICS_URL', ROOT_URL . FS_TOPICS_DIR);
define('IMG_BANNER_URL', ROOT_URL . FS_BANNER_DIR);
define('IMG_TEMP_URL', ROOT_URL . FS_TEMP_DIR);
define('IMG_EVENT_URL', ROOT_URL . FS_EVENT_DIR);