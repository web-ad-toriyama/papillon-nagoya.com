<?php /* Smarty version 3.1.22-dev/9, created on 2023-12-27 07:10:24
         compiled from "/home/kir330489/public_html/papillon-nagoya.com/view/pc/link.html" */ ?>
<?php
/*%%SmartyHeaderCode:1085250004658b4f50cea606_62254821%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ecb86111ba3dc7de8ceabcf75d422c9d595d0a9' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/pc/link.html',
      1 => 1680166177,
      2 => 'file',
    ),
    '64d637c448d853e47cbf92a7231cad2bb0bc4597' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/pc/common/frame.html',
      1 => 1703557474,
      2 => 'file',
    ),
    '70d0a3a3961e3f8d0a7e5fbec4e8f066d01091f9' => 
    array (
      0 => '70d0a3a3961e3f8d0a7e5fbec4e8f066d01091f9',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1085250004658b4f50cea606_62254821',
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
  'unifunc' => 'content_658b4f50e6a395_53115477',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_658b4f50e6a395_53115477')) {
function content_658b4f50e6a395_53115477 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1085250004658b4f50cea606_62254821';
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
$_smarty_tpl->properties['nocache_hash'] = '1085250004658b4f50cea606_62254821';
?>

<div class="shutter"><div class="spinner"></div><p class="text">Papillon</p></div>
<section id="contents_link">
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
            <p class="main"><?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
</p>
            <p class="sub"><?php echo $_smarty_tpl->tpl_vars['html']->value['name_kana']['access'];?>
</p>
        </h2>
    </div>
    <!-- //サブビジュアル -->

    <div id="contents" class="inner">
        <h3>LINK<br><span class="fs_05em">当サイトはリンクフリーです。</span></h3>
        <table class="table02">
            <tr>
                <th>サイト名</th>
                <td>
                    <?php echo @constant('SHOP_NAME');?>

                </td>
            </tr>
            <tr>
                <th>リンク先</th>
                <td><a href="<?php echo @constant('ROOT_URL');?>
"><?php echo @constant('ROOT_URL');?>
</a></td>
            </tr>
            <tr>
                <th>alt属性</th>
                <td><?php echo @constant('SHOP_NAME');?>
</td>
            </tr>
            <tr class="pc">
                <th>各種バナー</th>
                <td>
                    <img src="<?php echo @constant('IMAGES_URL');?>
/bnr_88_31.jpg" width="88" height="31" alt="<?php echo @constant('SHOP_NAME');?>
"><br>
                    88*31(px)<br>
                    <img src="<?php echo @constant('IMAGES_URL');?>
/bnr_160_45.jpg" width="160" height="45" alt="<?php echo @constant('SHOP_NAME');?>
"><br>
                    160*45(px)<br>
                    <img src="<?php echo @constant('IMAGES_URL');?>
/bnr_200_40.jpg" width="200" height="40" alt="<?php echo @constant('SHOP_NAME');?>
"><br>
                    200*40(px)<br>
                    <img src="<?php echo @constant('IMAGES_URL');?>
/bnr_468_60.jpg" width="468" height="60" alt="<?php echo @constant('SHOP_NAME');?>
"><br>
                    468*60(px)<br>

                  </td>
            </tr>
        </table>
        <aside>
            <h3>相互リンク集</h3>
            <div class="mb_20">
                <?php if ($_smarty_tpl->tpl_vars['free']->value!='') {?>
                <p><?php echo $_smarty_tpl->tpl_vars['free']->value['detail_pc'];?>
</p>
                <?php }?>
            </div>
            <ul class="list_link_box">
            <?php
$_from = $_smarty_tpl->tpl_vars['banner']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreachItemSav = $_smarty_tpl->tpl_vars['v'];
?>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank">
                <img src="<?php echo @constant('IMG_BANNER_URL');?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['file_name'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
" width="88" height="31">
                <br />
                <?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>

                </a>
            </li>
            <?php
$_smarty_tpl->tpl_vars['v'] = $foreachItemSav;
}
?>
            </ul>
        </aside>
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