<?php /* Smarty version 3.1.22-dev/9, created on 2023-12-26 15:27:08
         compiled from "/home/kir330489/public_html/papillon-nagoya.com/view/pc/recruit.html" */ ?>
<?php
/*%%SmartyHeaderCode:1649368304658a723c51fd04_49403751%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2775cff44adc7b40e2517b4cd5e14911bf77378' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/pc/recruit.html',
      1 => 1680243845,
      2 => 'file',
    ),
    '64d637c448d853e47cbf92a7231cad2bb0bc4597' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/pc/common/frame.html',
      1 => 1703557474,
      2 => 'file',
    ),
    'c6c57a84c3309f4a68d176de1b0f8a4989dff885' => 
    array (
      0 => 'c6c57a84c3309f4a68d176de1b0f8a4989dff885',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1649368304658a723c51fd04_49403751',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'top_script_name' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/9',
  'unifunc' => 'content_658a723c59aef8_82183138',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_658a723c59aef8_82183138')) {
function content_658a723c59aef8_82183138 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1649368304658a723c51fd04_49403751';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('VIEW_DIR'))."/pc/common/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</head>
<body>
    <?php echo $_smarty_tpl->getSubTemplate (((string)@constant('VIEW_DIR'))."/pc/common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <?php if ($_SERVER['SCRIPT_NAME']==$_smarty_tpl->tpl_vars['top_script_name']->value) {?>
    <section>
        <!-- 花びらひらひら -->
        <div class="hana"></div>
        <!-- //花びらひらひら -->

        <div id="mainvisual">
            <div class="bg_img">
                <!-- 波紋 -->
                
                <!-- //波紋 -->

                

                
                
                
            </div>
            <p class="logo_img">
                <!-- <img src="<?php echo @constant('IMAGES_URL');?>
/mainvisual_logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['page']->value['h1'];?>
"> -->
                <img src="<?php echo @constant('IMAGES_URL');?>
/mainvisual_newyear_logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['page']->value['h1'];?>
">
            </p>

            <!-- 電話番号・営業時間・受付時間 -->
            <div class="top_info">
                <ul class="info_box">
                    <li>
                        <a href="tel:<?php echo @constant('SHOP_TEL');?>
" class="link_act_01"><span>電話番号</span><?php echo @constant('SHOP_TEL');?>
</a>
                    </li>
                    <li><span>営業時間</span><?php echo @constant('SHOP_OPEN');?>
<br><span class="info_font">(木•金•土•祝前日は24時間営業)</span></li>
                    <li><span>受付時間</span><?php echo @constant('SHOP_RECEPTION');?>
<br><span class="info_font">(木•金•土•祝前日は24時間営業)</span></li>
                </ul>
            </div>
            <!-- //電話番号・営業時間・受付時間 -->

        </div><!-- //mainvisual終わり -->
    </section>
    <?php }?>

    <main>
    <?php
$_smarty_tpl->properties['nocache_hash'] = '1649368304658a723c51fd04_49403751';
?>

<div class="shutter">
  <div class="spinner"></div>
  <p class="text">Papillon</p>
</div>
<section id="contents_recruit">
  <!-- サブビジュアル -->
  <div class="subvisual">
    <p class="center">
      <img src="<?php echo @constant('IMAGES_URL');?>
/mainvisual_center.png" alt="波紋" />
    </p>
    <p class="left">
      <img src="<?php echo @constant('IMAGES_URL');?>
/subvisual_left.png" alt="左バラ" />
    </p>
    <p class="right">
      <img src="<?php echo @constant('IMAGES_URL');?>
/subvisual_right.png" alt="右バラ" />
    </p>
    <h2 class="contents_title">
      <p class="main"><?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
</p>
      <p class="sub"><?php echo $_smarty_tpl->tpl_vars['html']->value['name_kana']['recruit'];?>
</p>
    </h2>
  </div>
  <!-- //サブビジュアル -->

  <div id="contents" class="inner">
    <div class="top_box01">
      <div class="img">
        <img src="<?php echo @constant('IMAGES_URL');?>
/recruit_03.jpg" alt="求人ページ01" />
      </div>
      <div class="txt">
        <p>
          当店は『働きやすい環境で頑張る女の子を全力サポート！』致します。<br />
          当店はルーム、出張とありますので<br />
          『さくっと自由に出張だけ』<br />
          『出張は怖いからルームだけ』<br />
          『稼げるならなんでも！』<br />
          と働き方は自由です!!
        </p>
      </div>
    </div>

    <div class="top_box02">
      <div class="img">
        <img src="<?php echo @constant('IMAGES_URL');?>
/recruit_04.jpg" alt="求人ページ02" />
      </div>
      <div class="txt">
        <p>
          私たちは女性一人一人の働きやすさを大事にし、<br />
          常に気持ちよくお仕事に専念して頂けるような環境作りを心掛けています。<br />
          万が一、少しでも気になる事や心配な事があったら、<br />
          遠慮せずにすぐ伝えてください。<br />
          すぐに改善します。どうぞ安心して私たちにお任せください。
        </p>
      </div>
    </div>
    <img src="<?php echo @constant('IMAGES_URL');?>
/recruit_08.jpg" alt="求人ページ08" class="mb_30" width="80%" />
    <img src="<?php echo @constant('IMAGES_URL');?>
/recruit_01.jpg" alt="求人ページ01" class="mb_30" width="80%" />
    <img src="<?php echo @constant('IMAGES_URL');?>
/recruit_02.jpg" alt="求人ページ02" class="mb_30" width="80%" />

    <h3>募集要項</h3>
    <table class="table02">
      <tr>
        <th>募集職種</th>
        <td>
          セラピスト
        </td>
      </tr>
      <th>給与</th>
      <td>
        現在セラピストさんが足りておらず<br>
        日々お客様を逃している状況です。<br>
        <br>
        今がチャンス!!バック金額アップで優遇致します!!<br>
        さらに!!<br>
        頑張り次第でお給料がUPシステムになっております。<br>
        <br>
        お給料例<br>
        8時間勤務<br>
        90分×2=14,000円<br>
        120分×2=18,000円<br>
        <br>
        指名料3,000円<br>
        オプション代10,000円<br>
        <br>
        合計45,000円<br>
        <br>
        そして!!<br>
        今ですと入店7日間はお給料フルバックなので<br>
        お客様から頂いたご料金全てセラピストさんにお渡ししております!!<br>
        <br>
        60分 10,000円<br>
        90分 14,000円<br>
        120分 18,000円<br>
        150分 22,000円<br>
        180分 26,000円<br>
        <br>
        上記のコース料金だけではなく指名料オプション代も全てフルバックです♪<br>
        ぜひこの機会にご応募お待ちしております。<br>
      </td>
    </tr>
      <tr>
        <th>資格</th>
        <td>18歳以上～<br />※高校生不可</td>
      </tr>
      <tr>
        <th>勤務時間</th>
        <td>
          あなたのご都合のいいお日にち、お時間で大丈夫です♪<br>
          空いたお時間でいっぱい稼いじゃいましょう!!
        </td>
      </tr>
      <tr>
        <th>待遇PR</th>
        <td>
          現在セラピストさんが足りておらず<br>
          日々お客様を逃している状況です。<br>
          <br>
          今ですと他店から移籍の方バック金額アップ!!<br>
          ※そうでない方も経験等でUPさせて頂くのでご相談ください。<br>
          <br>
          デザイナーズマンションでの勤務<br>
          ワンルーム完全個室待機<br>
          アリバイ会社あり<br>
          初心者歓迎
          完全自由出勤<br>
          制服貸与<br>
          宿泊可<br>
          副業、掛け持ち可<br>
          無料Wi-Fiあり<br>
          ノルマ、罰金、雑費等一切なし<br>
          給与保証制度<br>
        </td>
      </tr>
      <tr>
        <th>アピールコメント</th>
        <td>
          この度は当店求人ページをご覧くださり、誠にありがとうございます！<br />
          <br />
          当店は『働きやすい環境で頑張る女の子を全力サポート！』致します。<br />
          <br />
          当店はルーム、出張とありますので<br />
          <br />
          さくっと自由に出張だけ<br />
          出張は怖いからルームだけ<br />
          稼げるならなんでも！<br />
          <br />
          と働き方は自由です!!<br />
          <br />
          現在多忙につきルームをどんどん増設中！！<br />
          <br />
          <span class="fs_13em">
            <span class="atten_border01">●初めてのお仕事で不安はありませんか？</span><br />
            <span class="atten_border01">●今勤務されているお店に満足されていますか?</span><br />
            <span class="atten_border01">●不満や不安はありませんか?</span><br />
            <span class="atten_border01">●今のお店、電話は鳴っていますか?</span><br />
            <span class="atten_border01">●貴重な時間を無駄にしていませんか?</span><br />
            <span class="atten_border01">●お給料には満足されていますか?</span><br />
            <span class="atten_border01">●目標を見失っていませんか?</span><br />
            <span class="atten_border01">●居心地はどうですか?暇な環境に慣れてしまっていませんか?</span><br />
            <span class="atten_border01">●お店の雰囲気はどうですか?</span><br />
            <span class="atten_border01">●オーナーさんや店長さん、貴女を大切にしてくれていますか?</span><br />
            <span class="atten_border01">●良き理解者となってくれていますか？</span><br />
          </span>
          <br />
          私たちは女性一人一人の働きやすさを大事にし、常に気持ちよくお仕事に専念して頂けるような環境作りを心掛けています。<br />
          万が一、少しでも気になる事や心配な事があったら、遠慮せずにすぐ伝えてください。すぐに改善します。どうぞ安心して私たちにお任せください。<br />
          <br />
          新しいお店ですので不安な事はひとつずつ解消し、わからない事がありましたら何でもご相談下さい。<br />
          女性の立場に立ち、同じ目線で真剣に考え、皆さんが働き易いように日々努力して参ります。<br />
          <br />
          もちろん給与面もしっかり稼いでいただけるよう<br />
          雑費等が引かれる事も一切ありませんし、キャンペーン等での割引も店側が全額負担しますのでセラピストさんの負担は一切ございませんのでご安心下さい。<br />
          <br />
          その他、ご要望やご相談がありましたら出来る限りご対応させて頂きたいと思っております。<br />
          <br />
          入店祝い金15万円or体験7日間のお給料フルバックとトップクラスの待遇でお待ちしておりますのでまずはお気軽にご連絡下さい♪
        </td>
      </tr>

      <tr>
        <th>応募方法</th>
        <td>
          <a href="tel:<?php echo @constant('SHOP_TEL_RECRUIT');?>
" class="btn_tel"
            ><span>TEL:<?php echo @constant('SHOP_TEL_RECRUIT');?>
</span></a>
            <a href="mailto:<?php echo @constant('SHOP_MAIL_RECRUIT');?>
" class="btn_mail"
              ><span><?php echo @constant('SHOP_MAIL_RECRUIT');?>
</span></a>
          <a href="<?php echo @constant('SHOP_RECRUIT_LINEURL');?>
" class="btn_line"
            ><span>LINE ID：<?php echo @constant('SHOP_RECRUIT_LINEID');?>
</span></a>
        </td>
      </tr>
    </table>
  </div>
</section>

    </main>

    <?php echo $_smarty_tpl->getSubTemplate (((string)@constant('VIEW_DIR'))."/pc/common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <?php if ($_SERVER['SCRIPT_NAME']=="/index.php") {?>
    <!-- Twitter遅延読み込み -->
    <?php echo '<script'; ?>
>
        (function (window, document) {
            function main1() {
                // TwitterのJS読み込み
                var ad = document.createElement('script');
                ad.type = 'text/javascript';
                ad.async = true;
                ad.src = 'https://platform.twitter.com/widgets.js';
                var sc = document.getElementsByTagName('script')[0];
                sc.parentNode.insertBefore(ad, sc);
            }

            // 遅延読み込み
            var lazyLoad = false;
            // 新人セラピストのコンテンツをトリガーにする
            var TwitterTrigger = document.getElementById('section_new');

            function onLazyLoad() {
                if (lazyLoad === false && isElementInViewport(TwitterTrigger)) {
                // 複数呼び出し回避
                lazyLoad = true;
                window.removeEventListener('scroll', onLazyLoad);
                window.removeEventListener('mousemove', onLazyLoad);
                window.removeEventListener('mousedown', onLazyLoad);
                window.removeEventListener('touchstart', onLazyLoad);
                window.removeEventListener('keydown', onLazyLoad);
                main1(); // TwitterのJS読み込み
                }
            }

            function isElementInViewport(el) {
                var rect = el.getBoundingClientRect();
                return rect.top < window.innerHeight && rect.bottom >= 0;
            }

            window.addEventListener('scroll', onLazyLoad);
            window.addEventListener('mousemove', onLazyLoad);
            window.addEventListener('mousedown', onLazyLoad);
            window.addEventListener('touchstart', onLazyLoad);
            window.addEventListener('keydown', onLazyLoad);

            window.addEventListener('load', function () {
                // ドキュメント途中（更新時 or ページ内リンク）
                if (isElementInViewport(TwitterTrigger)) {
                onLazyLoad();
                }
            });

        })(window, document);
    <?php echo '</script'; ?>
>
    <?php }?>

</body>
</html>
<?php }
}
?>