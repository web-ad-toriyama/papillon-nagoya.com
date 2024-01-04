<?php

/*
    404 403エラー
 */

$smarty->assign('newface', getNewFace($suffix));         // 新人情報
$smarty->assign('covergirl', getCoverGirl($dir));        // カバーガール取得(常にPC版のサイズを取得する)
