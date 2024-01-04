<?php /* Smarty version 3.1.22-dev/9, created on 2023-12-26 11:27:35
         compiled from "/home/kir330489/public_html/papillon-nagoya.com/view/pc/err.html" */ ?>
<?php
/*%%SmartyHeaderCode:422988985658a3a17bdb654_33044948%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c21e0bbcd17e4f651118d80e70572b782eec14f2' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/pc/err.html',
      1 => 1680166177,
      2 => 'file',
    ),
    '64d637c448d853e47cbf92a7231cad2bb0bc4597' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/pc/common/frame.html',
      1 => 1703557474,
      2 => 'file',
    ),
    'f7d90ca319cb2d46237869fb02a909d53b58edc0' => 
    array (
      0 => 'f7d90ca319cb2d46237869fb02a909d53b58edc0',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '422988985658a3a17bdb654_33044948',
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
  'unifunc' => 'content_658a3a17c960a4_75857711',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_658a3a17c960a4_75857711')) {
function content_658a3a17c960a4_75857711 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '422988985658a3a17bdb654_33044948';
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
$_smarty_tpl->properties['nocache_hash'] = '422988985658a3a17bdb654_33044948';
?>

<!-- 404エラー -->
<div class="shutter"><div class="spinner"></div><p class="text">Papillon</p></div>
<section id="contents_err">
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
		<h3>404&nbsp;&nbsp;file&nbsp;not&nbsp;found<br><span class="fs_05em">お探しのページは見つかりません。</span></h3>

		<p class="mb_20">
			いつも<?php echo @constant('SHOP_NAME');?>
をご利用いただきありがとうございます。<br>
			大変申し訳ございませんが、あなたがアクセスしようとしたページは削除されたかURLが間違っています。<br>
			お手数お掛けしますがもう一度目的のページをお探し下さい。
		</p>
		<p id="err_toplink">
			<a href="<?php echo @constant('ROOT_URL');?>
">トップページへ戻る</a>
		</p>
	</div>

	</section>
<!-- //404エラー -->




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