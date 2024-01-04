<?php /* Smarty version 3.1.22-dev/9, created on 2023-12-26 11:29:12
         compiled from "/home/kir330489/public_html/papillon-nagoya.com/view/pc/schedule.html" */ ?>
<?php
/*%%SmartyHeaderCode:160568553658a3a789a0f16_47446777%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72e119641bbdb975eb623f006c99712a5f64be3b' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/pc/schedule.html',
      1 => 1680166177,
      2 => 'file',
    ),
    '64d637c448d853e47cbf92a7231cad2bb0bc4597' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/pc/common/frame.html',
      1 => 1703557474,
      2 => 'file',
    ),
    'f2a31ad28d429d519ef73baec1362608f0f8aeec' => 
    array (
      0 => 'f2a31ad28d429d519ef73baec1362608f0f8aeec',
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
  'nocache_hash' => '160568553658a3a789a0f16_47446777',
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
  'unifunc' => 'content_658a3a78ac9401_70505278',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_658a3a78ac9401_70505278')) {
function content_658a3a78ac9401_70505278 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_day_of_week')) require_once '/home/kir330489/public_html/papillon-nagoya.com/vendor/smarty/smarty/libs/plugins/modifier.day_of_week.php';
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '160568553658a3a789a0f16_47446777';
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
$_smarty_tpl->properties['nocache_hash'] = '160568553658a3a789a0f16_47446777';
?>

<div class="shutter"><div class="spinner"></div><p class="text">Papillon</p></div>
<section id="contents_schedule">

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
			<p class="sub"><?php echo $_smarty_tpl->tpl_vars['html']->value['name_kana']['schedule'];?>
</p>
		</h2>
	</div>
	<!-- //サブビジュアル -->

	<div class="inner">
		<h3 class="title_h3">日付をお選びください</h3>
		<ul class="schedule_nav">
		<?php
$_from = $_smarty_tpl->tpl_vars['week']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreachItemSav = $_smarty_tpl->tpl_vars['v'];
?>
			<li<?php if ($_smarty_tpl->tpl_vars['day']->value==$_smarty_tpl->tpl_vars['k']->value) {?> class="active"<?php }?>>
				<a href="<?php echo @constant('ROOT_URL');?>
/schedule.php?day=<?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
#contents_schedule">
					<?php if (smarty_modifier_day_of_week($_smarty_tpl->tpl_vars['v']->value)=='土') {?>
						<span class="atten_03"><?php echo substr($_smarty_tpl->tpl_vars['v']->value,4,2);?>
月<?php echo substr($_smarty_tpl->tpl_vars['v']->value,6,2);?>
日(<?php echo smarty_modifier_day_of_week($_smarty_tpl->tpl_vars['v']->value);?>
)</span>
					<?php } elseif (smarty_modifier_day_of_week($_smarty_tpl->tpl_vars['v']->value)=='日') {?>
						<span class="atten_04"><?php echo substr($_smarty_tpl->tpl_vars['v']->value,4,2);?>
月<?php echo substr($_smarty_tpl->tpl_vars['v']->value,6,2);?>
日(<?php echo smarty_modifier_day_of_week($_smarty_tpl->tpl_vars['v']->value);?>
)</span>
					<?php } else { ?>
						<?php echo substr($_smarty_tpl->tpl_vars['v']->value,4,2);?>
月<?php echo substr($_smarty_tpl->tpl_vars['v']->value,6,2);?>
日(<?php echo smarty_modifier_day_of_week($_smarty_tpl->tpl_vars['v']->value);?>
)
					<?php }?>
				</a>
			</li>
		<?php
$_smarty_tpl->tpl_vars['v'] = $foreachItemSav;
}
?>
		</ul>
		<ul class="cast_box">
			<?php
$_from = $_smarty_tpl->tpl_vars['schedule']->value;
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
echo $_smarty_tpl->getInlineSubTemplate("./common/staff/thumbnail.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '1536924756658a3a78a68d66_31291423', 'content_658a3a78a688b8_56084919');
/*  End of included template "./common/staff/thumbnail.html" */?>

						<?php /*  Call merged included template "./common/staff/icon_new.html" */
echo $_smarty_tpl->getInlineSubTemplate("./common/staff/icon_new.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '896654027658a3a78a7ca28_55259313', 'content_658a3a78a7c5d4_69112440');
/*  End of included template "./common/staff/icon_new.html" */?>

						<?php /*  Call merged included template "./common/staff/icon_twitter.html" */
echo $_smarty_tpl->getInlineSubTemplate("./common/staff/icon_twitter.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '245906897658a3a78a84f98_16619469', 'content_658a3a78a84b47_73873225');
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
echo $_smarty_tpl->getInlineSubTemplate("./common/staff/icon_class.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '729371895658a3a78a90689_90831464', 'content_658a3a78a90249_00232299');
/*  End of included template "./common/staff/icon_class.html" */?>

						</p>
						<p class="time"><?php echo $_smarty_tpl->tpl_vars['v']->value['schedule']['time'];?>
&nbsp;<?php /*  Call merged included template "./common/staff/work_info.html" */
echo $_smarty_tpl->getInlineSubTemplate("./common/staff/work_info.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '1613657265658a3a78ab0d13_05948690', 'content_658a3a78ab08d4_04002828');
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
/*%%SmartyHeaderCode:1536924756658a3a78a68d66_31291423%%*/
if ($_valid && !is_callable('content_658a3a78a688b8_56084919')) {
function content_658a3a78a688b8_56084919 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1536924756658a3a78a68d66_31291423';
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
/*/%%SmartyNocache:1536924756658a3a78a68d66_31291423%%*/
}
}
?><?php
/*%%SmartyHeaderCode:896654027658a3a78a7ca28_55259313%%*/
if ($_valid && !is_callable('content_658a3a78a7c5d4_69112440')) {
function content_658a3a78a7c5d4_69112440 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '896654027658a3a78a7ca28_55259313';
if ($_smarty_tpl->tpl_vars['v']->value['new_flg']==@constant('SET_ON')) {?><img src="<?php echo @constant('IMAGES_URL');?>
/icon_new.png" alt="新人" class="icon_new"><?php }?>
<?php
/*/%%SmartyNocache:896654027658a3a78a7ca28_55259313%%*/
}
}
?><?php
/*%%SmartyHeaderCode:245906897658a3a78a84f98_16619469%%*/
if ($_valid && !is_callable('content_658a3a78a84b47_73873225')) {
function content_658a3a78a84b47_73873225 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '245906897658a3a78a84f98_16619469';
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
/*/%%SmartyNocache:245906897658a3a78a84f98_16619469%%*/
}
}
?><?php
/*%%SmartyHeaderCode:729371895658a3a78a90689_90831464%%*/
if ($_valid && !is_callable('content_658a3a78a90249_00232299')) {
function content_658a3a78a90249_00232299 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '729371895658a3a78a90689_90831464';
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
/*/%%SmartyNocache:729371895658a3a78a90689_90831464%%*/
}
}
?><?php
/*%%SmartyHeaderCode:1613657265658a3a78ab0d13_05948690%%*/
if ($_valid && !is_callable('content_658a3a78ab08d4_04002828')) {
function content_658a3a78ab08d4_04002828 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1613657265658a3a78ab0d13_05948690';
if ($_smarty_tpl->tpl_vars['v']->value['schedule']['work']==@constant('SCH_WORK_BEFORE')) {?>
出勤前
<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['schedule']['work']==@constant('SCH_WORK_NOW')) {?>
	出勤中
<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['schedule']['work']==@constant('SCH_WORK_AFTER')) {?>
出勤後
<?php } else { ?>
<?php }?>
<?php
/*/%%SmartyNocache:1613657265658a3a78ab0d13_05948690%%*/
}
}
?>