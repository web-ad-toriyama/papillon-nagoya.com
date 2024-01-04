<?php

require __DIR__.'/../common/start.php';

$templateFile = '/admin/upload/confirm.html';

$result = true;

if ($params['field'] == 'banner') {
    $baseWidth = 88;
    $baseHeight = 31;
} elseif ($params['field'] == 'movie_photo') {
    $baseWidth = IMAGE_MOVIE_SIZE_W;
    $baseHeight = IMAGE_MOVIE_SIZE_H;
} elseif (strstr($params['field'],'thumb')) {
    // サムネイル用追加
    $baseWidth = IMAGE_SIZE_THUMB_W;
    $baseHeight = IMAGE_SIZE_THUMB_H;
} elseif (strstr($params['field'],'event')) {
    // イベント用追加
    $baseWidth = IMAGE_SIZE_EVENT_PC_W;
    $baseHeight = IMAGE_SIZE_EVENT_PC_H;
} elseif (strstr($params['field'],'img')) {

} else {
    $baseWidth = IMAGE_SIZE_PC_W;
    $baseHeight = IMAGE_SIZE_PC_H;
}

if ($posts['confirm']) {
    if ($posts['method'] === 'url') {
        $path = $posts['image_url'];
        //拡張子の確認
        if (!stristr($path, ".jpg") && !stristr($path, ".jpeg") && !stristr($path, ".gif") && !stristr($path, ".png")) {
            error("送信できるのはJPEG、GIF、png形式のファイルのみです。");
        }

        @$fp = fopen($path, "r");
        $img = "";
        if (!empty($fp)) {
            while (!feof($fp)) {
                $img .= @fgets($fp);
            }
            fclose($fp);
        } else {
            error("ファイルが見つかりませんでした。");
        }

        // ファイル情報取得
        list($baseFileName, $upBaseFileName, $fileName, $imageTag) = getFileName($path);

        $fp = fopen($fileName, "w");
        if (!empty($fp)) {
            flock($fp, 2);
            rewind($fp);
            ftruncate($fp, '0');
            fputs($fp, $img);
            flock($fp, 3);
            fclose($fp);
            @ chmod($fileName, 0666);
        } else {
            error("ファイルが見つかりませんでした。");
        }
    } elseif ($posts['method'] === 'file') {
        if ($_FILES['image_f']['name'] == "") {
            error("アップロードするファイルを指定してください。");
        }

        //拡張子の確認
        checkExt();

        // ファイルサイズ確認
        checkFileSize();

        if ($_FILES['image_f']['size'] <= 0) {
            error("何らかの理由でファイルを正しく認識することができませんでした。");
        }

        // ファイル情報取得
        list($baseFileName, $upBaseFileName, $fileName, $imageTag) = getFileName($_FILES['image_f']['name']);

        // ファイルアップロード
        move_uploaded_file($_FILES['image_f']['tmp_name'], $fileName);
    } else {
    }

    if (file_exists($fileName) == false) {
        error("ファイルの送信に失敗しました。もう一度送信してみてください。");
    }

    //PHP攻撃コードを正規表現でチェック
    mb_regex_encoding('ASCII');
    if (mb_eregi('<\\?php', $fileName)) {
        @ unlink($fileName);
        error("申し訳ございません。そのファイルは使えない様です。");
    }
    if (mb_eregi('^.*<\\?php.*$', $fileName)) {
        @ unlink($fileName);
        error("申し訳ございません。そのファイルは使えない様です。");
    }

    //画像サイズチェック
    if ($params['field'] != 'movie' && $params['field'] != 'img') {
        list($width, $height) = getimagesize($fileName);
        if ($width < $baseWidth || $height < $baseHeight) {
            @ unlink($fileName);
            error("横幅" . $baseWidth . "px以上、高さ" . $baseHeight . "px以上の画像をご登録ください。");
        }
    }

    // バナー画像・動画はリサイズしない
    if ($params['field'] == 'banner' || $params['field'] == 'movie' || $params['field'] == 'img') {
        $result = true;
    } else {
        $result = imageSizeConvert($fileName, $fileName, $baseWidth, "", 0);
    }
    $smarty->assign('base_file_name', $baseFileName);
    $smarty->assign('up_base_file_name', $upBaseFileName);
    $smarty->assign('image_tag', $imageTag);
}

require __DIR__ . '/../common/display.php';

////////////////////////////////////////////////////////////////////////////////
function checkExt()
{
    global $params;
    if ($params['field'] == 'movie') {
        if (!stristr($_FILES['image_f']['name'], ".mp4")) {
            error("送信できるのはMP4形式のファイルのみです。");
        }
    } else {
        if (!stristr($_FILES['image_f']['name'], ".jpg") && !stristr($_FILES['image_f']['name'], ".jpeg") && !stristr($_FILES['image_f']['name'], ".gif") && !stristr($_FILES['image_f']['name'], ".png")) {
            error("送信できるのはJPEG、GIF、png形式のファイルのみです。");
        }
    }
}

function checkFileSize()
{
    global $params;
    if ($params['field'] == 'movie') {
        if ($_FILES['image_f']['size'] > MOVIE_FILE_MAX) {
            error("ファイルサイズが大きすぎます。".(MOVIE_FILE_MAX/1000000)."MBまでのファイルを選択して下さい。");
        }
    } else {
        if ($_FILES['image_f']['size'] > IMAGE_FILE_MAX) {
            error("ファイルサイズが大きすぎます。".(IMAGE_FILE_MAX/1000)."KBまでのファイルを選択して下さい。");
        }
    }
}

////////////////////////////////////////////////////////////////////////////////
function error($result)
{
    global $smarty, $templateFile;
    require __DIR__ . '/../common/display.php';
}


////////////////////////////////////////////////////////////////////////////////
function getFileName($path)
{
    global $params, $baseWidth, $baseHeight;
    if ($params['field'] == 'banner' || $params['field'] == 'movie_photo') {
        $num = 1;
    } elseif (strstr($params['field'],'thumb')) {
        $num = 1;
    } elseif (strstr($params['field'],'event_small')) {
      $num = 1;
  } else {
    $num = 2;
}
$ext = pathinfo($path, PATHINFO_EXTENSION);
$baseFileName = date('mdHis') . mt_rand(1, 99) . "." . $ext;
$upBaseFileName = basename($path);
$fileName = IMG_TEMP_DIR .'/'. $baseFileName;
if($params['field'] == 'img'){
    $imageTag = sprintf("<img src=\"%s\">",
        IMG_TEMP_URL.'/'.$baseFileName);  
}else{
    $imageTag = sprintf("<img src=\"%s\" width=\"%s\" height=\"%s\">",
        IMG_TEMP_URL.'/'.$baseFileName,
        $baseWidth/$num,
        $baseHeight/$num);
}
return array($baseFileName,$upBaseFileName,$fileName,$imageTag);
}
