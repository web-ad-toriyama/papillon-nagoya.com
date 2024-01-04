<?php

/*
    リンクページ
 */

$smarty->assign('banner', getLinkBanner(LINK_PAGE_LINK));    // リンクバナー取得
$smarty->assign('free', getLinkFree(LINK_PAGE_LINK)); // フリースペース取得
