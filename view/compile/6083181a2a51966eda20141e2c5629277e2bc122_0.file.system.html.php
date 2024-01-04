<?php /* Smarty version 3.1.22-dev/9, created on 2023-12-26 13:47:27
         compiled from "/home/kir330489/public_html/papillon-nagoya.com/view/pc/system.html" */ ?>
<?php
/*%%SmartyHeaderCode:1396700738658a5adf974b36_17685274%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6083181a2a51966eda20141e2c5629277e2bc122' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/pc/system.html',
      1 => 1680244014,
      2 => 'file',
    ),
    '64d637c448d853e47cbf92a7231cad2bb0bc4597' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/pc/common/frame.html',
      1 => 1703557474,
      2 => 'file',
    ),
    '501b75c5fd870caea39f8aa61429b4059d56732f' => 
    array (
      0 => '501b75c5fd870caea39f8aa61429b4059d56732f',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1396700738658a5adf974b36_17685274',
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
  'unifunc' => 'content_658a5adfa014f1_92998351',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_658a5adfa014f1_92998351')) {
function content_658a5adfa014f1_92998351 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1396700738658a5adf974b36_17685274';
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
$_smarty_tpl->properties['nocache_hash'] = '1396700738658a5adf974b36_17685274';
?>

<div class="shutter"><div class="spinner"></div><p class="text">Papillon</p></div>
<section id="contents_system">
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
			<p class="sub"><?php echo $_smarty_tpl->tpl_vars['html']->value['name_kana']['system'];?>
</p>
		</h2>
	</div>
	<!-- //サブビジュアル -->

	<div id="contents" class="inner">

		<div class="top_box01">
			<div class="img">
				<img src="<?php echo @constant('IMAGES_URL');?>
/system_01.jpg" alt="料金ページ01">
			</div>
			<div class="txt">
				<p>
					優雅で落ち着いた大人たちの贅沢な時間。<br>
					最高級メンズエステならではの至福の癒し。<br>
					都心にありながら一歩足を踏み入れると<br>
					そこには<span class="fs_18em">「特別」 </span>で<span class="fs_18em">「刺激的」</span>な空間
				</p>
			</div>
		</div>

		<div class="top_box02">
			<div class="img">
				<img src="<?php echo @constant('IMAGES_URL');?>
/system_02.jpg" alt="料金ページ02">
			</div>
			<div class="txt">
				<p>
					扉を開けたら<br>
					暖かいお部屋で優しく包み込む手のぬくもりに<br>
					<span class="fs_18em">ほっ</span>と心を休めませんか？<br>
					基本となる「接客マナー」「施術テクニック」に加え<br>
					<span class="fs_18em">「真心」</span>を込めお客様をおもてなし致します。
				</p>
			</div>
		</div>

		<!-- メニュー内容は管理画面から読み込んでます -->
		<?php echo $_smarty_tpl->tpl_vars['system']->value['detail'];?>
		
		<!-- //料金表オワリ -->

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