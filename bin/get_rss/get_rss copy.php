#!/usr/local/bin/php -q
<?php

require_once __DIR__ . '/../../app/configs/app.php';

require_once __DIR__ . '/../../vendor/autoload.php';

$blog_list = $form['blog_list'];
$blog_exclude = $form['blog_exclude'];
ini_set('display_errors', 0);

//個別ディレクトリのPEARを使用
require_once("PEAR/XML/RSS.php");

include_once("rsslisting.php");

chdir(dirname(__FILE__));

//スクリプトの最大実行時間をセット
set_time_limit(300);

define("LOG_PATH", "blog.log");

$count = 1;
$length = 60;

//pubdateの月表示変換用
$month_list = array(
	"jan" => "01",
	"feb" => "02",
	"mar" => "03",
	"apr" => "04",
	"may" => "05",
	"jun" => "06",
	"jul" => "07",
	"aug" => "08",
	"sep" => "09",
	"oct" => "10",
	"nov" => "11",
	"dec" => "12",
	"Jan" => "01",
	"Feb" => "02",
	"Mar" => "03",
	"Apr" => "04",
	"May" => "05",
	"Jun" => "06",
	"Jul" => "07",
	"Aug" => "08",
	"Sep" => "09",
	"Oct" => "10",
	"Nov" => "11",
	"Dec" => "12"
);

$json_data = [];
foreach ($blog_list as $blog_url) {
	//RSSのURLを確定
	$chk_link = false;
	//if (empty(trim($blog_url))) {continue;}

	$url_blog = findFeedUrl($blog_url);

	if(!$url_blog)	continue;
	//ブログ記事取得
	$rss = new XML_RSS($url_blog);
	$rss->parse();
	//ブログタイトル取得
	$channel = $rss->getChannelInfo();
	$blog_title = $channel['title'];
	if ($blog_title == "") {continue;}

	$items = $rss->getItems();
	for ($i=0; $i<RSS_GET_COUNT; $i++) {
		$exclude_flg = true;
		// 除外キーワードの文字列が含まれていた場合、その記事を除外する
		foreach ($blog_exclude as $exclude) {
			if(preg_match("/".$exclude."/", $items[$i]['title'])){
				$exclude_flg = false;
				continue;
			}
		}
		if ($exclude_flg == true) {
			$title =$items[$i]['title'];
			$link = $items[$i]['link'];
			$description = $items[$i]['description'];
			$images = '';
			// 記事の中で最初に使われている画像を検索、設定する
			if( preg_match_all('/<img(.+?)>/is', $description, $matches) ){
				foreach( $matches[0] as $img ){
					if( preg_match('/src=[\'"](.+?jpe?g)[\'"]/', $img, $m) ){
						$images = $m[1];
						break;
					}
				}
			}
			if ($title == "") {continue;}
			//strtotimeが使えないので手動で処理
			if (array_key_exists("pubdate", $items[$i]) == true) {
				$base_date = $items[$i]['pubdate'];
				list($wday, $day, $month, $year, $time, $b) = explode(" ", $base_date);
				list($hour, $min, $sec) = explode(":", $time);
				$date = mktime ($hour, $min, $sec, $month_list[$month], $day, $year);
			}else if (array_key_exists("pubDate", $items[$i]) == true) {
				$base_date = $items[$i]['pubDate'];
				list($wday, $day, $month, $year, $time, $b) = explode(" ", $base_date);
				list($hour, $min, $sec) = explode(":", $time);
				$date = mktime ($hour, $min, $sec, $month_list[$month], $day, $year);
			}else if (array_key_exists("dc:date", $items[$i]) == true) {
				//2009-02-21T17:27:52+0900
				$base_date = $items[$i]['dc:date'];
				//echo "3: " . $date;
				$base_date = str_replace ("T", "-", $base_date);
				$base_date = str_replace (":", "-", $base_date);
				$base_date = str_replace ("+", "-", $base_date);
				list($year, $month, $day, $hour, $min, $sec, $b) = explode("-", $base_date);
				$date = mktime ($hour, $min, $sec, $month, $day, $year);
			}else {
				$key_list = array();
				$key_list = array_keys($items[$i]);
				foreach($key_list as $item_key) {
					if (stristr ($item_key, "date") == true) {
						$date = $items[$i][$item_key];
						break;
					}
				}
			}
			$update_date = $date;
			// テーブルに書き込み
            /*$ins = $model->insert();
            $ins->values(array(
				'date' => $update_date,
				'title' => $title,
				'image' => $images,
				'description' => strip_tags($description),
				'blog_url' => $link,
                'created'   => date(DATE_FORMAT_STR),
                'updated'   => date(DATE_FORMAT_STR),
			));
            if ($ins->execute() === false) {
                Logger::error(sprintf('ブログの書き込みに失敗しました。 (タイトル=%s)', $title));
            }*/

            // JSON用データ配列作成
			$json_data[$i] = array(
				'date' => $update_date,
				'title' => $title,
				'image' => $images,
				'description' => strip_tags($description),
				'blog_url' => $link,
				'created'   => date(DATE_FORMAT_STR),
				'updated'   => date(DATE_FORMAT_STR),
			);
		}
	}
}
// JSON形式のデータ書き出し
if (count($json_data) > 0) {
	// 絶対パスで記述して下さい。
	file_put_contents("/home/kir211377/public_html/castsystem/rss/rss.json", json_encode($json_data));
}

exit;

/**
 * HTMLからRSSフィードURLを取得して返す
 *
 * @param string $url 取得HTMLのURL
 * @return string RSSフィードURL
 */
function findFeedUrl($url)
{
    if (!$url) {
        return false;
    }

    $html = file_get_contents($url);
    if(!$html){
        return false;
    }

    preg_match_all('/<link\s+(.*?)\s*\/?>/is', $html, $matches);
    $links = $matches[1];
    $finalLinks = array();
    foreach ($links as $idx=>$link) {
        $attributes = preg_split('/\s+/s', $link);
        foreach ($attributes as $attribute) {
            $att = preg_split('/\s*=\s*/s', $attribute, 2);
            if(isset($att[1])) {
                $att[1] = preg_replace('/([\'"]?)(.*)\1/', '$2', $att[1]);
                $finalLink[strtolower($att[0])] = $att[1];
            }
        }
        $finalLinks[$idx] = $finalLink;
    }

    $href = null;
    foreach ($finalLinks as $finalLink) {
        if (!array_key_exists('type', $finalLink)) {
            continue;
        }
        switch (strtolower($finalLink['type'])) {
            case 'application/x.atom+xml':
            case 'application/atom+xml':
            case 'application/xml':
            case 'text/xml':
            case 'application/rss+xml':
            case 'application/rdf+xml':
                if (array_key_exists('href', $finalLink)) {
                    $href = $finalLink['href'];
                }
                break;
            default:
                break;
        }

        if ($href) {
            if (strstr($href, 'http://') !== false) {
                $fullUrl = $href;
            } else {
                $urlParts = parse_url($url);
                $fullUrl = "http://{$urlParts['host']}";
                if (isset($urlParts['port'])) {
                    $fullUrl .= ":{$urlParts['port']}";
                }
                if ($href{0} != '/'){
                    if (isset($urlParts['path'])) {
                        $fullUrl .= dirname($urlParts['path']);
                    }
                    if (substr($fullUrl, -1) != '/') {
                        $fullUrl .= '/';
                    }
                }
                $fullUrl .= $href;
            }

            return $fullUrl;
        }
    }

    return false;
}
