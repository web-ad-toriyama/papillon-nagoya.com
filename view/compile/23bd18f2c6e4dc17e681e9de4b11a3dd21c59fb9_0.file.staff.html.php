<?php /* Smarty version 3.1.22-dev/9, created on 2023-12-26 11:39:34
         compiled from "/home/kir330489/public_html/papillon-nagoya.com/view/pc/staff.html" */ ?>
<?php
/*%%SmartyHeaderCode:42840342658a3ce6523586_07353884%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23bd18f2c6e4dc17e681e9de4b11a3dd21c59fb9' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/pc/staff.html',
      1 => 1680166177,
      2 => 'file',
    ),
    '64d637c448d853e47cbf92a7231cad2bb0bc4597' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/pc/common/frame.html',
      1 => 1703557474,
      2 => 'file',
    ),
    '1f1c9dcf7aa32314c0ccf31123951be209d8c415' => 
    array (
      0 => '1f1c9dcf7aa32314c0ccf31123951be209d8c415',
      1 => 0,
      2 => 'string',
    ),
    'df552a0a971a7e17a557c950b3519f78d1ccddc6' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/pc/common/staff/thumbnail.html',
      1 => 1703557594,
      2 => 'file',
    ),
    '63b42952897e0277d06be034bc363f6404516dea' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/pc/common/staff/icon_new.html',
      1 => 1680160223,
      2 => 'file',
    ),
    '2976324a91722e67abb1290b935cd8c9ed214665' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/pc/common/staff/icon_twitter.html',
      1 => 1680160223,
      2 => 'file',
    ),
    '2e92ffa0e3f1d1e6949ca32246ae653812622ace' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/pc/common/staff/icon_class.html',
      1 => 1680160223,
      2 => 'file',
    ),
    '849d1bcc82910105df97c711922ff2d570d7ae76' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/pc/common/staff/work_info.html',
      1 => 1680160224,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42840342658a3ce6523586_07353884',
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
  'unifunc' => 'content_658a3ce663b148_82686086',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_658a3ce663b148_82686086')) {
function content_658a3ce663b148_82686086 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '42840342658a3ce6523586_07353884';
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
$_smarty_tpl->properties['nocache_hash'] = '42840342658a3ce6523586_07353884';
?>

<div class="shutter"><div class="spinner"></div><p class="text">Papillon</p></div>
<section id="contents_cast">

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
			<p class="sub"><?php echo $_smarty_tpl->tpl_vars['html']->value['name_kana']['staff'];?>
</p>
		</h2>
	</div>
	<!-- //サブビジュアル -->

	<div class="inner">

		<div class="top_box01">
			<div class="img">
				<img src="<?php echo @constant('IMAGES_URL');?>
/therapist_01.jpg" alt="スタッフページ01">
			</div>
			<div class="txt">
				<p>
					厳選された当店セラピストによるプライベート空間で<br>
					貴方様だけの<span class="fs_18em">「非日常」</span>を感じながら<br>
					あらゆるストレスから解放されて下さいませ。
			</div>
		</div>

		<!-- セラピスト一覧 -->
		<ul class="cast_box">
			<?php
$_from = $_smarty_tpl->tpl_vars['staff']->value;
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
				<a href="<?php echo @constant('ROOT_URL');?>
/profile.php?sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
					<div class="img_box">
						<?php /*  Call merged included template "./common/staff/thumbnail.html" */
echo $_smarty_tpl->getInlineSubTemplate("./common/staff/thumbnail.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '199318406658a3ce65db728_84837174', 'content_658a3ce65db210_15945783');
/*  End of included template "./common/staff/thumbnail.html" */?>

						<?php /*  Call merged included template "./common/staff/icon_new.html" */
echo $_smarty_tpl->getInlineSubTemplate("./common/staff/icon_new.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '1123668666658a3ce65ef336_99293545', 'content_658a3ce65eeee3_25882288');
/*  End of included template "./common/staff/icon_new.html" */?>

						<?php /*  Call merged included template "./common/staff/icon_twitter.html" */
echo $_smarty_tpl->getInlineSubTemplate("./common/staff/icon_twitter.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '1024214906658a3ce65f7722_02291713', 'content_658a3ce65f72e4_78730892');
/*  End of included template "./common/staff/icon_twitter.html" */?>
	
						<div class="staff_txt">
							<h3><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</h3>
							<p>詳細プロフィールはこちら</p>
						</div>
					</div>
					<div class="txt_box">
						<p class="name">
							<span>name</span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
<br>
							<?php /*  Call merged included template "./common/staff/icon_class.html" */
echo $_smarty_tpl->getInlineSubTemplate("./common/staff/icon_class.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '295665705658a3ce6602d50_99444598', 'content_658a3ce6602915_04512631');
/*  End of included template "./common/staff/icon_class.html" */?>

						</p>
						<p class="time"><?php echo $_smarty_tpl->tpl_vars['v']->value['schedule']['time'];?>
&nbsp;<?php /*  Call merged included template "./common/staff/work_info.html" */
echo $_smarty_tpl->getInlineSubTemplate("./common/staff/work_info.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '1166522032658a3ce6623063_58665969', 'content_658a3ce6622c13_49212425');
/*  End of included template "./common/staff/work_info.html" */?>
</p>
					</div>
				</a>
			</li>
			<?php
$_smarty_tpl->tpl_vars['v'] = $foreachItemSav;
}
?>
		</ul>
		<!-- //セラピスト一覧 -->
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
?><?php
/*%%SmartyHeaderCode:199318406658a3ce65db728_84837174%%*/
if ($_valid && !is_callable('content_658a3ce65db210_15945783')) {
function content_658a3ce65db210_15945783 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '199318406658a3ce65db728_84837174';
if ($_smarty_tpl->tpl_vars['v']->value['photo']!='') {?>
<img src="<?php echo @constant('IMG_STAFF_URL');?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['photo'];?>
" width="<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
" height="<?php echo $_smarty_tpl->tpl_vars['height']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" class="img_staff" loading="lazy">
<?php } else { ?>
<img src="<?php echo @constant('IMAGES_URL');?>
/no_image.jpg" width="<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
" height="<?php echo $_smarty_tpl->tpl_vars['height']->value;?>
" alt="ノーイメージ" class="img_staff" loading="lazy">
<?php }?>
<?php
/*/%%SmartyNocache:199318406658a3ce65db728_84837174%%*/
}
}
?><?php
/*%%SmartyHeaderCode:1123668666658a3ce65ef336_99293545%%*/
if ($_valid && !is_callable('content_658a3ce65eeee3_25882288')) {
function content_658a3ce65eeee3_25882288 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1123668666658a3ce65ef336_99293545';
if ($_smarty_tpl->tpl_vars['v']->value['new_flg']==@constant('SET_ON')) {?><img src="<?php echo @constant('IMAGES_URL');?>
/icon_new.png" alt="新人" class="icon_new"><?php }?>
<?php
/*/%%SmartyNocache:1123668666658a3ce65ef336_99293545%%*/
}
}
?><?php
/*%%SmartyHeaderCode:1024214906658a3ce65f7722_02291713%%*/
if ($_valid && !is_callable('content_658a3ce65f72e4_78730892')) {
function content_658a3ce65f72e4_78730892 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1024214906658a3ce65f7722_02291713';
?>

	<?php if ($_smarty_tpl->tpl_vars['v']->value['url']!='') {?>
	<span class="icon_twitter">
		<object>
			<a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank">
				<img src="<?php echo @constant('IMAGES_URL');?>
/icon_twitter.png" alt="twitter" class="icon_twitter">
			</a>
		</object>
	</span>
	<?php }?><?php
/*/%%SmartyNocache:1024214906658a3ce65f7722_02291713%%*/
}
}
?><?php
/*%%SmartyHeaderCode:295665705658a3ce6602d50_99444598%%*/
if ($_valid && !is_callable('content_658a3ce6602915_04512631')) {
function content_658a3ce6602915_04512631 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '295665705658a3ce6602d50_99444598';
if ($_smarty_tpl->tpl_vars['v']->value['class'][1]['image']!='') {?>
<img src="<?php echo @constant('IMAGES_URL');?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['class'][1]['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['class'][1]['value'];?>
" class="icon_class">
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['v']->value['class'][2]['image']!='') {?>
<img src="<?php echo @constant('IMAGES_URL');?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['class'][2]['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['class'][2]['value'];?>
">
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['v']->value['class'][3]['image']!='') {?>
<img src="<?php echo @constant('IMAGES_URL');?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['class'][3]['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['class'][3]['value'];?>
">
<?php }?><?php
/*/%%SmartyNocache:295665705658a3ce6602d50_99444598%%*/
}
}
?><?php
/*%%SmartyHeaderCode:1166522032658a3ce6623063_58665969%%*/
if ($_valid && !is_callable('content_658a3ce6622c13_49212425')) {
function content_658a3ce6622c13_49212425 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1166522032658a3ce6623063_58665969';
if ($_smarty_tpl->tpl_vars['v']->value['schedule']['work']==@constant('SCH_WORK_BEFORE')) {?>
出勤前
<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['schedule']['work']==@constant('SCH_WORK_NOW')) {?>
	出勤中
<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['schedule']['work']==@constant('SCH_WORK_AFTER')) {?>
出勤後
<?php } else { ?>
<?php }?>
<?php
/*/%%SmartyNocache:1166522032658a3ce6623063_58665969%%*/
}
}
?>