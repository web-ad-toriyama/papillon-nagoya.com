<?php
// XML取得基本クラス
require_once "XMLParser.php";

// IFRAME等で呼び出されるとき
if ($_SERVER["REQUEST_METHOD"] == "POST")
    $form = $_POST;
else
    $form = $_GET;

$rssid    = $form["rssid"];
$css      = $form["css"];

if ($rssid != "") {
    $IF = new rsslisting();
    $IF->rssids     = $rssid;
    if ($css)
		echo '<link href="' . $css . '" rel="stylesheet" type="text/css">';
    $IF->Display();
}

// RSSLISTINGクラス
class rsslisting
{
    var $rssids     = ""; // RSSIDの文字列(複数の時は「;」で区切る)
    var $max        = "30";
    var $more       = "25";
    var $path2tmpl  = "";
    var $dateformat = "Y-m-d H:i:s";

    var $path2csv   = "/lib/rsslisting.csv"; // RSSIDとRSSURLの対応表
    var $shop_name  = array();
    var $rssurls    = array();
    var $item       = array();
    var $channel    = array();
    var $template   = "";

    // 表示
    function display()
    {
		// ターゲット確定
		if (!$this->getTarget())
		    return;
		// テンプレート生成
		if ($this->template == "") {
		    if (!$this->getTemplate())
				return;
		}

		// データ取得
		$this->getXml();

		// テンプレートを使って展開、表示
		$this->execDisplay();
    }

    // RSSID達とCSVから対象RSS確定
    function setURL($blog_array)
    {
		$flag = false;
		foreach ($blog_array as $idx=>$value ) {
			$this->rssurls[$idx] = $value['url_blog'];
			$flag = true;
		}

		if ($flag)
		    return true;
		else
		    return false;
    }

    // テンプレートが無い場合、ファイルからテンプレートを取得
    function getTemplate()
    {
		$document_root = dirname($_SERVER["SCRIPT_FILENAME"]);
		$realpath = $document_root . $this->path2tmpl;

		if (is_file($realpath) && ($fd = fopen($realpath, "r"))) {
		    while (($tmpstr = fgets($fd, 4096)))
			$this->template .= $tmpstr;
		    fclose($fd);
		}
		else {
		    $this->template = '
			<div class="rsslistingdate">
			 %%ITEMDATE%%
			</div>
			<div class="rsslistingsite">
			 <a href="%%CHANNELLINK%%" target=_blank>%%CHANNELTITLE%%</a>
			</div>
			<div class="rsslistingtitlelink">
			  <a href="%%ITEMLINK%%" alt="%%ITEMDESCRIPTION%%"
			   title="%%ITEMDESCRIPTION%%" target=_blank>%%ITEMTITLE%%</a>
			</div>
			';
		}

		return true;
    }

    // XML取得し、配列に
    function getXml()
    {
		$this->dateformat = mb_convert_encoding($this->dateformat,"UTF-8","EUC-JP,UTF-8,SJIS");
		$xml = new XMLParser;

		// XMLデータを取得し、処理しやすい配列に格納
		foreach ($this->rssurls as $id => $rssurl) {
		    if ($xml->Get($rssurl)) {
				// channel 部分を取得
				$channel = $xml->Parse("channel");
				$this->channel[$id] = array(
						"title" => $channel["channel"][0]["title"],
						"link"  => $channel["channel"][0]["link"],
					    );

				// item 部分を取得
				$item    = $xml->Parse("item");
				if( is_array($item["item"]) ) {
					foreach ($item["item"] as $item) {
					    $title       = $item["title"];
					    $link        = $item["link"];
					    $description = $item["description"];

					    if (array_key_exists("dc:date",$item)) {
							$otmp = $item["dc:date"];
							$date = strtotime(str_replace("T"," ",
											substr($otmp, 0, 19)));
							$this->item[date($this->dateformat, $date)] = array(
									    "channel"     => $id,
									    "title"       => $title,
									    "link"        => $link,
									    "description" => $description,
									);
					    }
					    else if (array_key_exists("pubdate",$item)) {
							$otmp = $item["pubdate"];
							$date = strtotime($otmp);
							$this->item[date($this->dateformat, $date)] = array(
									    "channel"     => $id,
									    "title"       => $title,
									    "link"        => $link,
									    "description" => $description,
									);
					    }
					}
				}
		    }
		}

		// 最新が上に来るように並び換え
		krsort($this->item);
		return;
    }

    // 実際に展開し、表示
    function execDisplay()
    {
		// 表字数の確定
		if ($this->more > 0 && is_numeric($this->more))
		    $realmax = $this->max + $this->more;
		else
		    $realmax = $this->max;

		$str = "";
		$cnt = 0;
		foreach ($this->item as $date => $item) {
		    $cnt++;
		    $rule = array();
		    $rule["ITEMDATE"]        = $date;
		    $rule["ITEMLINK"]        = $item["link"];
		    $rule["ITEMTITLE"]       = $item["title"];
		    $rule["ITEMDESCRIPTION"] = $item["description"];
		    $rule["CHANNELLINK"]     = $this->channel[$item["channel"]]["link"];
		    $rule["CHANNELTITLE"]     = $this->channel[$item["channel"]]["title"];

		    //if ($cnt <= $this->max)
		    if ($cnt <= $realmax) {
				$str .= $this->conv($this->template,$rule);
				if ($cnt == $this->max) {
				    $str .= $this->getJS4more();
				    $str .= '<div id="rsslistingmore" style="display:none">';
				}

				if ($cnt == $realmax)
				    $str .= '</div>';
		    }
		    else
			continue;
		}

		echo mb_convert_encoding($str, "SJIS", "auto");
    }

    // テンプレートにしたがって展開
    function conv($body, $rules, $options = array())
    {
		$translation = get_html_translation_table(HTML_SPECIALCHARS);
		if (!isset($options["noescape_atmark"]))
		    $translation["@"] = '&#64;';

		if (isset($options["rules"]))
		    $translation = array_merge($translation, $options["rules"]);

		foreach ($rules as $lhs => $rhs) {
		    if ($lhs[0] == ':')
			$lhs = substr($lhs, 1);
		    else
			$rhs = strtr($rhs, $translation);
		    $body = str_replace("%%${lhs}%%", $rhs, $body);
		}

		return $body;
    }

    // もっと見る、のjavascript表示
    function getJS4more()
    {
		$str=<<<EOF
<script language="JavaScript">
function rsslistingmore_ctrl(tName)
{
    tMenu = document.getElementById(tName).style;
    if (tMenu.display == 'none') {
	tMenu.display = "block";
	document.getElementById(tName + "_text").innerHTML = "[less]"
    }
    else {
	tMenu.display = "none";
	document.getElementById(tName + "_text").innerHTML = "[more]"
    }
}
</script>
<div id="rsslistingmore_ctrl" align=right>
<a href="javascript:rsslistingmore_ctrl('rsslistingmore')">
<div id="rsslistingmore_text">[more]</div>
</a>
</div>
EOF;
		return $str;
    }
}
?>
