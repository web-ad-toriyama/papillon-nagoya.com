<?php

$smarty->assign('token', Token::fetch());
$smarty->assign('result', $result);
$smarty->assign('form', $form);
$smarty->assign('html', $html);
$smarty->assign('data', $data);
$smarty->assign('params', $params);
$smarty->display(VIEW_AD_DIR . $templateFile);
exit;
