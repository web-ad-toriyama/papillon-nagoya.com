<?php


$analytics = array();
$classifier = new \Woothee\Classifier;
$analytics = $classifier->parse($request->getServer('HTTP_USER_AGENT'));
$analytics['dir']     = $dir;
$analytics['file']    = $file;
$analytics['ip']      = $request->getIpAddress();
$analytics['referer'] = $request->getServer('HTTP_REFERER');
$analytics['unique']  = UNIQUE_OFF;

$c_dir  = Cookie::get('analyze_dir');
$c_file = Cookie::get('analyze_file');
$c_ip   = Cookie::get('analyze_ip');

// 同一ページに対して同一アクセスでなければ解析を行う
if ($c_dir != $analytics['dir'] || $c_file != $analytics['file'] || $c_ip != $analytics['ip']) {

    $model = new Model(TBL_ANALYTICS);

    Cookie::set('analyze_ip', $analytics['ip'], DUPLICATION_TIME*60);
    Cookie::set('analyze_dir', $dir, DUPLICATION_TIME*60);
    Cookie::set('analyze_file', $file, DUPLICATION_TIME*60);

    // IP毎の最後のアクセス時間を取得
    $sel = $model->select();
    $max = $sel->where('ip', $analytics['ip'])
               ->fetchMax('created');
    $date_max = date(DATE_FORMAT_STR, strtotime("$max +".UNIQUE_TIME."minute"));
    $date_now = date(DATE_FORMAT_STR);
    // ユニーク判定
    if (is_null($max)) {
        // 1回目のデータ
        $analytics['unique'] = UNIQUE_ON;
    } else {
        if ($date_now > $date_max) {
            // ユニーク分後のデータ
            $analytics['unique'] = UNIQUE_ON;
        }
    }

    // 特殊文字を変換
    $analytics['referer'] = preg_replace("/%25/",'%',$analytics['referer']);
    $analytics['referer'] = preg_replace("/%2B/",'+',$analytics['referer']);
    // URLデコード
    $analytics['referer'] = urldecode($analytics['referer']);

    // Googleキャッシュの時
    if(preg_match('/q=cache:[^ ]* ([^&]*)&/',$analytics['referer'],$h))          {$analytics['referer'] = 'http://www.google.co.jp/';}

    // Googleの時
    elseif(preg_match('/google.*[^\w]q=([^&]*)/',$analytics['referer'],$h))      {$analytics['referer'] = 'http://www.google.co.jp/';}

    // Googleの時2
    elseif(preg_match('/google.*(url|imgres)\?/',$analytics['referer'],$h))      {$analytics['referer'] = 'http://www.google.co.jp/';$h[1] = 'not provided';}

    // Yahooの時
    elseif(preg_match('/yahoo.*[^\w]p=([^&]*)/',$analytics['referer'],$h))       {$analytics['referer'] = 'http://search.yahoo.co.jp/';}

    // Bingの時
    elseif(preg_match('/bing.*[^\w]q=([^&]*)/',$analytics['referer'],$h))        {$analytics['referer'] = 'http://www.bing.com/';}

    // 百度の時
    elseif(preg_match('/baidu.*[^\w]wd=([^&]*)/',$analytics['referer'],$h))      {$analytics['referer'] = 'http://www.baidu.jp/';}

    // gooの時
    elseif(preg_match('/goo.*[^\w]MT=([^&]*)/',$analytics['referer'],$h))        {$analytics['referer'] = 'http://search.goo.ne.jp/';}

    // infoseekの時
    elseif(preg_match('/infoseek.*[^\w]qt=([^&]*)/',$analytics['referer'],$h))   {$analytics['referer'] = 'http://search.www.infoseek.co.jp/';}

    // exciteの時
    elseif(preg_match('/excite.*[^\w]search=([^&]*)/',$analytics['referer'],$h)) {$analytics['referer'] = 'http://www.excite.co.jp/';}

    // livedoorの時
    elseif(preg_match('/livedoor.*[^\w]q=([^&]*)/',$analytics['referer'],$h))    {$analytics['referer'] = 'http://search.livedoor.com/';}

    // はてなの時
    elseif(preg_match('/hatena.*[^\w]word=([^&]*)/',$analytics['referer'],$h))   {$analytics['referer'] = 'http://search.hatena.ne.jp/';}

    // 楽天の時
    elseif(preg_match('/rakuten.*[^\w]qt=([^&]*)/',$analytics['referer'],$h))    {$analytics['referer'] = 'http://search.www.infoseek.co.jp/';}

    // @niftyの時
    elseif(preg_match('/nifty.*[^\w]q=([^&]*)/',$analytics['referer'],$h))       {$analytics['referer'] = 'http://search.nifty.com/';}

    // @niftyの時2
    elseif(preg_match('/nifty.*[^\w]Text=([^&]*)/',$analytics['referer'],$h))    {$analytics['referer'] = 'http://search.nifty.com/';}

    // Azby Club 富士通の時
    elseif(preg_match('/azby.*[^\w]Text=([^&]*)/',$analytics['referer'],$h))     {$analytics['referer'] = 'http://azby.nifty.com/';}

    // BIGLOBEの時
    elseif(preg_match('/biglobe.*[^\w]q=([^&]*)/',$analytics['referer'],$h))     {$analytics['referer'] = 'http://search.biglobe.ne.jp/';}

    // So-netの時
    elseif(preg_match('/so-net.*[^\w]query=([^&]*)/',$analytics['referer'],$h))  {$analytics['referer'] = 'http://www.so-net.ne.jp/';}

    // docomoの時
    elseif(preg_match('/docomo.*[^\w]key=([^&]*)/',$analytics['referer'],$h))    {$analytics['referer'] = 'http://www.nttdocomo.co.jp/';}

    // auの時
    elseif(preg_match('/auone.*[^\w]q=([^&]*)/',$analytics['referer'],$h))       {$analytics['referer'] = 'http://search.auone.jp/';}

    // auの時2
    elseif(preg_match('/ezweb.*[^\w]query=([^&]*)/',$analytics['referer'],$h))   {$analytics['referer'] = 'http://www.google.co.jp/';}

    // Luna Searchの時
    elseif(preg_match('/luna\.tv.*[^\w]q=([^&]*)/',$analytics['referer'],$h))    {$analytics['referer'] = 'http://s.luna.tv/';}

    // conduitの時
    elseif(preg_match('/conduit.*[^\w]q=([^&]*)/',$analytics['referer'],$h))     {$analytics['referer'] = 'http://search.conduit.com/';}

    // babylonの時
    elseif(preg_match('/babylon.*[^\w]q=([^&]*)/',$analytics['referer'],$h))     {$analytics['referer'] = 'http://search.babylon.com/';}

    // babylonの時2
    elseif(preg_match('/babylon\.com\/web\/([^\?]*)/',$analytics['referer'],$h)) {$analytics['referer'] = 'http://search.babylon.com/';}

    // その他検索エンジンの時
    elseif(preg_match('/(.+\?).*(q|query|key|keyword|keywords|MT)=([^&]*)/i',$analytics['referer'],$h)) {$analytics['referer'] = $h[1] . $h[2] . '=';$h[1] = $h[3];}

    // 検索語をセット
    $search_words = (isset($h[1])) ? $h[1] : '';

    // 検索語が存在する時
    if($search_words) {
        // 検索語のスペースを整形
        $search_words = preg_replace('/　|[\s]/',' ',$search_words);
        $search_words = preg_replace('/ +/'     ,' ',$search_words);
    }

    // サイト内の遷移はrefereとして計上しない
    if (strstr($analytics['referer'], ROOT_URL)) {
        $analytics['referer'] = '';
    }

    $values = array(
        'dir_name'     => $dir,
        'file_name'    => $file,
        'page_name'    => $html['name'][$file],
        'ip'           => $analytics['ip'],
        'referer'      => $analytics['referer'],
        'search_words' => $search_words,
        'os'           => $analytics['os'],
        'browser'      => $analytics['name'],
        'unique_flg'   => $analytics['unique'],
        'created'      => date(DATE_FORMAT_STR),
    );
    // データ登録
    $ins = $model->insert();
    $ins->values($values);
    if ($ins->execute() === false) {
        Logger::error('アクセス解析の登録に失敗しました。');
    }
}


