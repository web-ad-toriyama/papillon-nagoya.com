<?php

/*
    在籍一覧ページ
 */
$smarty->assign('staff', getStaffList($dir,$suffix));	// 在籍情報
