<?php /* Smarty version 3.1.22-dev/9, created on 2023-12-27 18:32:59
         compiled from "/home/kir330489/public_html/papillon-nagoya.com/view/pc/access.html" */ ?>
<?php
/*%%SmartyHeaderCode:2120180222658bef4b8eb3c2_17052634%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bc4254e93df1f03d040789645011f6adc8e04f0' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/pc/access.html',
      1 => 1681868575,
      2 => 'file',
    ),
    '64d637c448d853e47cbf92a7231cad2bb0bc4597' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/pc/common/frame.html',
      1 => 1703557474,
      2 => 'file',
    ),
    '9b6815b3c16404eb7289b1c8ffb3cb193acb0374' => 
    array (
      0 => '9b6815b3c16404eb7289b1c8ffb3cb193acb0374',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '2120180222658bef4b8eb3c2_17052634',
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
  'unifunc' => 'content_658bef4b9abc13_06190340',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_658bef4b9abc13_06190340')) {
function content_658bef4b9abc13_06190340 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2120180222658bef4b8eb3c2_17052634';
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
$_smarty_tpl->properties['nocache_hash'] = '2120180222658bef4b8eb3c2_17052634';
?>

<!-- ローディングアニメーション -->
<div class="shutter">
  <div class="spinner"></div>
  <p class="text">Papillon</p>
</div>
<!-- //ローディングアニメーション -->
<section id="contents_access">
  <!-- サブビジュアル -->
  <div class="subvisual">
    <p class="center">
      <img src="<?php echo @constant('IMAGES_URL');?>
/mainvisual_center.png" alt="波紋">
    </p>
    <p class="left">
      <img src="<?php echo @constant('IMAGES_URL');?>
/subvisual_left.png" alt="左バラ">
    </p>
    <p class="right">
      <img src="<?php echo @constant('IMAGES_URL');?>
/subvisual_right.png" alt="右バラ">
    </p>
    <h2 class="contents_title">
      <p class="main">
        <?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>

      </p>
      <p class="sub">
        <?php echo $_smarty_tpl->tpl_vars['html']->value['name_kana']['access'];?>

      </p>
    </h2>
  </div>
  <!-- //サブビジュアル -->

  <div id="contents" class="inner">

    <div class="top_box01">
      <div class="img">
        <img src="<?php echo @constant('IMAGES_URL');?>
/access_01.jpg" alt="アクセスページ01">
      </div>
      <div class="txt">
        <p>
          完全個室の２人きりの特別な空間を醸し出す<br>
          隠れ家サロン<br>
          <span class="fs_18em">
            <?php echo @constant('SHOP_NAME');?>

          </span>
      </div>
    </div>

    <h3>SHOP INFORMATION</h3>
    <a href="tel:<?php echo @constant('SHOP_TEL_RECRUIT');?>
" class="btn_tel sp"><span>TEL:
        <?php echo @constant('SHOP_TEL_RECRUIT');?>

      </span></a>
    <table class="table01">
      <tr>
        <th class="pc">電話番号</th>
        <th>営業時間</th>
        <th>受付時間</th>
      </tr>
      <tr>
        <td class="pc">
          <?php echo @constant('SHOP_TEL');?>

        </td>
        <td>
          <?php echo @constant('SHOP_OPEN');?>

        </td>
        <td>
          <?php echo @constant('SHOP_RECEPTION');?>
<br>
        </td>
      </tr>
    </table>

    <div class="access_box">
      <h3>ACCESS<br><span class="fs_05em">高岳ルーム本館</span></h3>
      <p>マンション<span>：ヴィアーレ・バグース</span></p>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.186542279143!2d136.91426431524508!3d35.17690288031487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600370d8c0d01a95%3A0x2a2761fecdfa8b06!2z44CSNDYxLTAwMDEg5oSb55-l55yM5ZCN5Y-k5bGL5biC5p2x5Yy65rOJ77yS5LiB55uu77yR77yX4oiS77yR77yX!5e0!3m2!1sja!2sjp!4v1640056169705!5m2!1sja!2sjp"
        width="90%" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>

    <div class="access_box">
      <h3>ACCESS<br><span class="fs_05em">高岳ルーム別館</span></h3>
      <p>マンション<span>：ヴィアーレ・ストーリア</span></p>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.139536902085!2d136.91227925127038!3d35.17807456491139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600371279a370bc1%3A0x8d14d7764d0752d0!2z44CSNDYxLTAwMDEg5oSb55-l55yM5ZCN5Y-k5bGL5biC5p2x5Yy65rOJ77yS5LiB55uu77yR4oiS77yS77yYIOODtOOCo-OCouODvOODrCDjgrnjg4jjg7zjg6rjgqI!5e0!3m2!1sja!2sjp!4v1668483294545!5m2!1sja!2sjp"
        width="90%" height="500" style="border:0;" allowfullscreen=""></iframe>
    </div>

    <div class="access_box">
      <h3>ACCESS<br><span class="fs_05em">栄ルーム</span></h3>
      <p><span>栄4丁目</span></p>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.5595563209586!2d136.9120731!3d35.1676037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600370d00529175b%3A0x6f58250586bc8b9e!2z44CSNDYwLTAwMDgg5oSb55-l55yM5ZCN5Y-k5bGL5biC5Lit5Yy65qCE77yU5LiB55uu!5e0!3m2!1sja!2sjp!4v1681810494082!5m2!1sja!2sjp"
        width="90%" height="500" style="border:0;" allowfullscreen=""></iframe>
    </div>
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