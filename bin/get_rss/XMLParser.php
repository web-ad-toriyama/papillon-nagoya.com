<?php
class XMLParser {

    var $cache_dir    = "/data/cache";
    var $cache_expire = 600;
    var $xmlstr       = '';
    var $xml_parser;

    // Parseした結果を返すときに微妙に構造を変えるか変えないか
    var $custom = true;

    /**
     * XMLファイルを取得
     */
    function Get($rss_url) {
	if ($this->cache_dir != '') {
	    // キャッシュファイル有効時
	    $document_root = dirname($_SERVER["SCRIPT_FILENAME"]);
	    $cache_file     = $document_root . $this->cache_dir . '/' . md5($rss_url);
	    $cache_lifetime = @(time() - filemtime($cache_file));
	    if ($cache_lifetime < $this->cache_expire) {
		// キャッシュファイルがまだ新しい
			if ($this->Read($cache_file))
			    return true;
	    } else {
		// キャッシュファイルが古い
			if ($this->Save($rss_url))
			    return true;
	    }
	}
	else {
	    // キャッシュ無効時
	    if ($this->notSave($rss_url))
		return true;
	}
	return false;
    }

    /**
     * ファイル読み込み、格納
     */
    function Read($path) {
	$strings = "";
	if (!is_file($path) || ($fd = fopen($path, "r")) === false)
	    return false;
	while (($tmpstr = fgets($fd, 4096)))
	    $strings .= $tmpstr;
	fclose($fd);
	$this->xmlstr = $strings;
	return true;
    }

    /**
     * 取得したXMLを保存し(ないで)、格納
     */
    function Save($rss_url, $save=true) {
	if ($fp = @fopen($rss_url, 'r')) {
	    $read = '';
	    while (!feof($fp))
		$read .= fgets($fp, 4096);
	    fclose($fp);
	}
	else {
	    return false;
	}
	if ($save && $this->cache_dir != '') {
	    $document_root = dirname($_SERVER["SCRIPT_FILENAME"]);
	    $cache_file     = $document_root . $this->cache_dir . '/' . md5($rss_url);
	    $fp = fopen($cache_file, "w");
	    flock($fp, LOCK_EX);
	    fputs($fp, $read);
	    flock($fp, LOCK_UN);
	    fclose($fp);
	}
	$this->xmlstr = $read;
	return true;
    }

    /**
     * 取得したXMLを保存しないで、格納
     */
    function notSave($rss_url, $save=true) {
	$this->Save($rss_url,false);
    }

    /**
     * XMLパーサー準備
     */
    function MakeParser() {
	// XML パーサを作成
	$this->xml_parser = xml_parser_create();
	// XML パーサのオプションを設定
	xml_parser_set_option(
	    $this->xml_parser,
	    XML_OPTION_CASE_FOLDING,
	    false);
    }

    /**
     * パース
     */
    function Parse($tag="") {
	$this->MakeParser();
//	$xmlstr = mb_convert_encoding($this->xmlstr, "utf-8", "auto");
	$xmlstr = $this->xmlstr;
	$code = mb_detect_encoding($xmlstr);
	$xmlstr = mb_convert_encoding($xmlstr, 'UTF-8', $code);
	$xmlstr = str_replace($code, 'UTF-8', $xmlstr);
	$ret=xml_parse_into_struct($this->xml_parser,$xmlstr,$values,$idx);
	xml_parser_free($this->xml_parser);

	$return = $this->ParseExec($values,$tag);

	return $return;
    }

    /**
     * 実際のパース
     */
    function ParseExec(&$values, $tag, $sub=false) {
	$flag = false;
	$return = array();
	while($value = array_shift($values)){
	    $vtag   = strtolower($value["tag"]);
	    $vtype  = $value["type"];
	    $vvalue = $value["value"];
	    $vattr  = $value["attributes"];

	    if ($flag) {
		if ($vtag == $tag) {
		    if ($vtype == "close") {
			if ($sub) {
			    return $work;
			}
			else {
			    $return[$vtag][] = $work;
			    $flag = false;
			}
		    }
		    else if ($vtype == "open" || $vtype == "cdata") {
		    }
		    else {
			$work[$vtag] = $vvalue;
		    }
		}
		else {
		    if ($vtype == "open") {
			// 配列にもどして
			array_unshift($values,$value);
			// さらに実際のパースを回す
			$work[$vtag][] = $this->ParseExec($values,$vtag,true);
		    }
		    else if ($vtype == "cdata") {
		    }
		    else {
			if (is_array($vattr)) {
			    $vvalue = array();
			    foreach ($vattr as $a => $b) {
				$vvalue[$a] = $b;
			    }
			    $work[$vtag][] = $vvalue;
			}
			else {
			    if ($this->custom)
				$work[$vtag] = $vvalue;
			    else
				$work[$vtag][] = $vvalue;
			}
		    }
		}
	    }
	    else { // 開いていない状態
		if ($tag == "")
		    $tag = $vtag;
		if ($vtag == $tag) {
		    $flag = true;
		    $work = array();
		}
	    }
	}
	return $return;
    }

}

?>
