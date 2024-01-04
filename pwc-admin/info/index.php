<?php

require_once __DIR__ . '/../common/start.php';

$templateFile = '/admin/info/index.html';

$information = [];
$row = 1;
// ファイルが存在しているかチェックする
if (($handle = fopen("http://pandaweb.jp/dxhp/info.csv", "r")) !== FALSE) {
    // 1行ずつfgetcsv()関数を使って読み込む
    while (($data = fgetcsv($handle))) {
        if ($row > 1) {
            $i = 0;
            foreach ($data as $value) {
                if ($i == 0) {
                    $information[$row]['date'] = $value;
                }
                if ($i == 1) {
                    $information[$row]['title'] = $value;
                }
                if ($i == 2) {
                    $information[$row]['detail'] = $value;
                }
                $i++;
            }
        }
        $row++;
    }
    fclose($handle);
}

$smarty->assign('information', $information);

require_once __DIR__ . '/../common/display.php';
