<?php /* Smarty version 3.1.22-dev/9, created on 2023-12-26 11:27:57
         compiled from "/home/kir330489/public_html/papillon-nagoya.com/view/pc/index.html" */ ?>
<?php
/*%%SmartyHeaderCode:1086070903658a3a2dabbc23_85866049%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c66cfdb3b2372c8aadcb93057e89eb8c5d29f22e' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/pc/index.html',
      1 => 1703557623,
      2 => 'file',
    ),
    '64d637c448d853e47cbf92a7231cad2bb0bc4597' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/pc/common/frame.html',
      1 => 1703557474,
      2 => 'file',
    ),
    '3471744ceec1914a14c9514cdbb346bf8fe75b15' => 
    array (
      0 => '3471744ceec1914a14c9514cdbb346bf8fe75b15',
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
  'nocache_hash' => '1086070903658a3a2dabbc23_85866049',
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
  'unifunc' => 'content_658a3a2dbcfaa2_55653830',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_658a3a2dbcfaa2_55653830')) {
function content_658a3a2dbcfaa2_55653830 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_day_of_week')) require_once '/home/kir330489/public_html/papillon-nagoya.com/vendor/smarty/smarty/libs/plugins/modifier.day_of_week.php';
if (!is_callable('smarty_modifier_date_format')) require_once '/home/kir330489/public_html/papillon-nagoya.com/vendor/smarty/smarty/libs/plugins/modifier.date_format.php';
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1086070903658a3a2dabbc23_85866049';
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
$_smarty_tpl->properties['nocache_hash'] = '1086070903658a3a2dabbc23_85866049';
?>


<!-- イベント -->
<section id="section_event">
	<!-- <div class="bg"></div> -->
	<div class="event_box">
		<h2 class="left_fadein">EVENT<br><span>イベント</span></h2>
		<!-- <div class="flexslider"> -->
		<ul class="flexslider slides">
			<?php
$_from = $_smarty_tpl->tpl_vars['events']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['event'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['event']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->_loop = true;
$foreachItemSav = $_smarty_tpl->tpl_vars['event'];
?>
			<li>
				<img src="<?php echo @constant('IMG_EVENT_URL');?>
/<?php echo $_smarty_tpl->tpl_vars['event']->value['file_name'];?>
" alt="イベント画像" loading="lazy">
			</li>
			<?php
$_smarty_tpl->tpl_vars['event'] = $foreachItemSav;
}
?>
		</ul>
		<!-- </div> -->
	</div>
</section>
<!-- //イベント -->

<!-- 本日の出勤情報 -->
<section id="section_today" class="slider">
	<div class="bg"></div>
	<div class="inner">
		<h2 class="left_fadein">Today's Schedule<br><span>本日の<?php echo @constant('STAFF_CALL');?>
</span></h2>

		<div class="swiper-container">
			<ul class="cast_box swiper-wrapper">
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
				<li class="swiper-slide matchHeight">
					<a href="<?php echo @constant('ROOT_URL');?>
/profile.php?sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
						<div class="img_box">
							<?php /*  Call merged included template "./common/staff/thumbnail.html" */
echo $_smarty_tpl->getInlineSubTemplate("./common/staff/thumbnail.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '485772211658a3a2db1b3d8_28351795', 'content_658a3a2db1aef6_38689344');
/*  End of included template "./common/staff/thumbnail.html" */?>

							<?php /*  Call merged included template "./common/staff/icon_new.html" */
echo $_smarty_tpl->getInlineSubTemplate("./common/staff/icon_new.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '1848680638658a3a2db2ec14_33754190', 'content_658a3a2db2e7d9_39536132');
/*  End of included template "./common/staff/icon_new.html" */?>

							<?php /*  Call merged included template "./common/staff/icon_twitter.html" */
echo $_smarty_tpl->getInlineSubTemplate("./common/staff/icon_twitter.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '758673981658a3a2db36fc2_04278371', 'content_658a3a2db36b88_70522650');
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
echo $_smarty_tpl->getInlineSubTemplate("./common/staff/icon_class.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '1105903064658a3a2db42df8_10480254', 'content_658a3a2db42998_04023405');
/*  End of included template "./common/staff/icon_class.html" */?>

							</p>
							<p class="time"><?php echo $_smarty_tpl->tpl_vars['v']->value['schedule']['time'];?>
&nbsp;<?php /*  Call merged included template "./common/staff/work_info.html" */
echo $_smarty_tpl->getInlineSubTemplate("./common/staff/work_info.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '1218585229658a3a2db63e65_63902083', 'content_658a3a2db638d4_43748833');
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
		<div class="swiper-pagination pagination"></div>
		<div class="swiper-button-next next"><i class="fa fa-angle-right"></i></div>
		<div class="swiper-button-prev prev"><i class="fa fa-angle-left"></i></div>

		<a href="<?php echo @constant('ROOT_URL');?>
/schedule.php" class="btn_more">
			<?php echo substr($_smarty_tpl->tpl_vars['week']->value[$_smarty_tpl->tpl_vars['day']->value],4,2);?>
/<?php echo substr($_smarty_tpl->tpl_vars['week']->value[$_smarty_tpl->tpl_vars['day']->value],6,2);?>
(<?php echo smarty_modifier_day_of_week($_smarty_tpl->tpl_vars['week']->value[$_smarty_tpl->tpl_vars['day']->value]);?>
)出勤の<?php echo @constant('STAFF_CALL');?>
はこちら
		</a>
	</div><!-- inner終わり -->
</section>
<!-- //本日の出勤情報 -->


<!-- 新人情報 -->
<section id="section_new" class="slider">
	<h2 class="left_fadein">New Therapist<br><span>新人<?php echo @constant('STAFF_CALL');?>
</span></h2>

	<div class="inner">
		<div class="swiper-container">
			<ul class="cast_box swiper-wrapper">
				<?php
$_from = $_smarty_tpl->tpl_vars['newface']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreachItemSav = $_smarty_tpl->tpl_vars['v'];
?>
				<li class="swiper-slide matchHeight">
					<a href="<?php echo @constant('ROOT_URL');?>
/profile.php?sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
						<div class="img_box">
							<?php /*  Call merged included template "./common/staff/thumbnail.html" */
echo $_smarty_tpl->getInlineSubTemplate("./common/staff/thumbnail.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '485772211658a3a2db1b3d8_28351795', 'content_658a3a2db1aef6_38689344');
/*  End of included template "./common/staff/thumbnail.html" */?>

							<?php /*  Call merged included template "./common/staff/icon_new.html" */
echo $_smarty_tpl->getInlineSubTemplate("./common/staff/icon_new.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '1848680638658a3a2db2ec14_33754190', 'content_658a3a2db2e7d9_39536132');
/*  End of included template "./common/staff/icon_new.html" */?>

							<?php /*  Call merged included template "./common/staff/icon_twitter.html" */
echo $_smarty_tpl->getInlineSubTemplate("./common/staff/icon_twitter.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '758673981658a3a2db36fc2_04278371', 'content_658a3a2db36b88_70522650');
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
echo $_smarty_tpl->getInlineSubTemplate("./common/staff/icon_class.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '1105903064658a3a2db42df8_10480254', 'content_658a3a2db42998_04023405');
/*  End of included template "./common/staff/icon_class.html" */?>

							</p>
							<p class="time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['published'],'%Y-%m-%d');?>
&nbsp;入店</p>
						</div>
					</a>
				</li>
				<?php
$_smarty_tpl->tpl_vars['v'] = $foreachItemSav;
}
?>
			</ul>
		</div>
		<div class="swiper-pagination pagination"></div>
		<div class="swiper-button-next next"><i class="fa fa-angle-right"></i></div>
		<div class="swiper-button-prev prev"><i class="fa fa-angle-left"></i></div>
	</div><!-- //inner終わり -->

</section>
<!-- //新人情報 -->





<!-- イベント＋twitter -->
<div id="contents_02">
	<div class="bg_sp"></div>
	<!-- 新着情報 -->
	<section id="section_topics">
		<div class="bg"></div>
		<div class="topics_box">
			<h2 class="left_fadein">What's&nbsp;New<br><span>新着情報</span></h2>
			<div class="bg_article">
				<div id="info_box">
					<?php
$_from = $_smarty_tpl->tpl_vars['topics']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreachItemSav = $_smarty_tpl->tpl_vars['v'];
?>
					<article>
						<time datetime="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['published'],'%Y-%m-%dT%H:%M');?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['published'],'%Y/%m/%d %H:%M');?>
</time>
						<h3><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</h3>
						<p>
							<?php echo $_smarty_tpl->tpl_vars['v']->value['detail'];?>

						</p>
					</article>
					<?php
$_smarty_tpl->tpl_vars['v'] = $foreachItemSav;
}
?>
					<!-- <p>
						<?php if ($_smarty_tpl->tpl_vars['page_info']->value['prev']['url']!='') {?><a href="<?php echo $_smarty_tpl->tpl_vars['page_info']->value['prev']['url'];?>
#section_topics" class="btn_back">戻る</a><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['page_info']->value['next']['url']!='') {?><a href="<?php echo $_smarty_tpl->tpl_vars['page_info']->value['next']['url'];?>
#section_topics" class="btn_next">次へ</a><?php }?>
					</p> -->
				</div>
			</div>
		</div>
	</section>
	<!-- //新着情報 -->
	<!-- Twitter -->
	<section id="section_twitter">
		<div class="bg"></div>
		<div class="twitter_box">
			<h2 class="left_fadein">Twitter<br><span>ツイッター</span></h2>
			<div class="article">
				<a class="twitter-timeline" data-height="450" data-width="450" href="https://twitter.com/papillon_nagoya?ref_src=twsrc%5Etfw">Tweets by papillon_nagoya</a> <!-- <?php echo '<script'; ?>
 async src="https://platform.twitter.com/widgets.js" charset="utf-8"><?php echo '</script'; ?>
> -->
			</div>
		</div>
	</section>
	<!-- //Twitter -->
</div>
<!-- //イベント＋twitter -->

<!-- バナー三種 -->
<section id="section_bnr">
	<h2 class="pc"><span>contents</span></h2>
	<div>
		<figure class="bnr">
			<img src="<?php echo @constant('IMAGES_URL');?>
/bottom_line.jpg" width="400" height="148" alt="LINEの友だち追加" loading="lazy">
			<figcaption>
				<h3>LINE</h3>
				<p>LINE ID：<?php echo @constant('SHOP_LINEID');?>
</p>
			</figcaption>
			<a href="<?php echo @constant('SHOP_LINEURL');?>
" target="_blank"></a>
		</figure>
		<figure class="bnr">
			<img src="<?php echo @constant('IMAGES_URL');?>
/bottom_credit.jpg" width="400" height="148" alt="カード決済" loading="lazy">
			<figcaption>
				<h3>CREDIT</h3>
				<p>カード決済はこちら</p>
			</figcaption>
			<a href="https://pay2.star-pay.jp/site/pc/shop.php?payc=A4070" target="_blank" class="pc"></a>
			<a href="https://pay2.star-pay.jp/site/pc/shop.php?payc=A4070" target="_blank" class="sp"></a>
		</figure>
		<figure class="bnr">
			<img src="<?php echo @constant('IMAGES_URL');?>
/bottom_contact.jpg" width="400" height="148" alt="お問い合わせ" loading="lazy">
			<figcaption>
				<h3>CONTACT</h3>
				<p>お問い合わせはこちら</p>
			</figcaption>
			<a href="<?php echo @constant('ROOT_URL');?>
/contact.php"></a>
		</figure>
		<figure class="bnr">
			<img src="<?php echo @constant('IMAGES_URL');?>
/bottom_enquete.jpg" width="400" height="148" alt="アンケート" loading="lazy">
			<figcaption>
				<h3>ENQUETE</h3>
				<p>アンケートはこちら</p>
			</figcaption>
			<a href="<?php echo @constant('ROOT_URL');?>
/enquete.php"></a>
		</figure>
		<!-- 外部リンク -->
		<p class="bnr_link">
			<a href="https://madamepapillon-nagoya.com/" target="_blank">
				<img src="<?php echo @constant('IMAGES_URL');?>
/madam_papillon_link.gif" width="400" height="148" alt="Madam Papillon マダムパピヨンのリンク" loading="lazy">
			</a>
		</p>
		<p class="bnr_link">
			<a href="https://mrs.ap2hp.com/" target="_blank">
				<img src="<?php echo @constant('IMAGES_URL');?>
/misesunoizumi_link.gif" width="400" height="148" alt="ミセスの泉のリンク" loading="lazy">
			</a>
		</p>
		<!-- 外部リンク -->

	</div>
</section>
<!-- //バナー三種 -->

<!-- 求人バナー -->
<section id="section_recruit">
	<div class="bg"></div>
	<div class="bnr_box">
		<h2 class="left_fadein">Recruit<br><span>セラピスト大募集!</span></h2>
			<ul class="flexslider slides">
				<li><img src="<?php echo @constant('IMAGES_URL');?>
/recruit_08.jpg" alt="待機保証最低時給2,000円〜" loading="lazy"></li>
				<li><img src="<?php echo @constant('IMAGES_URL');?>
/recruit_01.jpg" alt="お給料フルバック!" loading="lazy"></li>
				<li><img src="<?php echo @constant('IMAGES_URL');?>
/recruit_02.jpg" alt="今のお給料に満足してますか？" loading="lazy"></li>
				<li><img src="<?php echo @constant('IMAGES_URL');?>
/recruit_09.jpg" alt="女性事務員募集" loading="lazy"></li>
				<li><img src="<?php echo @constant('IMAGES_URL');?>
/recruit_06.jpg" alt="スタッフ急募中！" loading="lazy"></li>
			</ul>
	</div>
</section>
<!-- //求人バナー -->
<!-- 求人動画 -->
    <div class="recruit_movie"><a href="<?php echo @constant('ROOT_URL');?>
/recruit.php" class="btn_more"><span>詳しい求人情報を見る</span></a></div>
<!-- //求人動画 -->



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
/*%%SmartyHeaderCode:485772211658a3a2db1b3d8_28351795%%*/
if ($_valid && !is_callable('content_658a3a2db1aef6_38689344')) {
function content_658a3a2db1aef6_38689344 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '485772211658a3a2db1b3d8_28351795';
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
/*/%%SmartyNocache:485772211658a3a2db1b3d8_28351795%%*/
}
}
?><?php
/*%%SmartyHeaderCode:1848680638658a3a2db2ec14_33754190%%*/
if ($_valid && !is_callable('content_658a3a2db2e7d9_39536132')) {
function content_658a3a2db2e7d9_39536132 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1848680638658a3a2db2ec14_33754190';
if ($_smarty_tpl->tpl_vars['v']->value['new_flg']==@constant('SET_ON')) {?><img src="<?php echo @constant('IMAGES_URL');?>
/icon_new.png" alt="新人" class="icon_new"><?php }?>
<?php
/*/%%SmartyNocache:1848680638658a3a2db2ec14_33754190%%*/
}
}
?><?php
/*%%SmartyHeaderCode:758673981658a3a2db36fc2_04278371%%*/
if ($_valid && !is_callable('content_658a3a2db36b88_70522650')) {
function content_658a3a2db36b88_70522650 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '758673981658a3a2db36fc2_04278371';
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
/*/%%SmartyNocache:758673981658a3a2db36fc2_04278371%%*/
}
}
?><?php
/*%%SmartyHeaderCode:1105903064658a3a2db42df8_10480254%%*/
if ($_valid && !is_callable('content_658a3a2db42998_04023405')) {
function content_658a3a2db42998_04023405 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1105903064658a3a2db42df8_10480254';
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
/*/%%SmartyNocache:1105903064658a3a2db42df8_10480254%%*/
}
}
?><?php
/*%%SmartyHeaderCode:1218585229658a3a2db63e65_63902083%%*/
if ($_valid && !is_callable('content_658a3a2db638d4_43748833')) {
function content_658a3a2db638d4_43748833 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1218585229658a3a2db63e65_63902083';
if ($_smarty_tpl->tpl_vars['v']->value['schedule']['work']==@constant('SCH_WORK_BEFORE')) {?>
出勤前
<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['schedule']['work']==@constant('SCH_WORK_NOW')) {?>
	出勤中
<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['schedule']['work']==@constant('SCH_WORK_AFTER')) {?>
出勤後
<?php } else { ?>
<?php }?>
<?php
/*/%%SmartyNocache:1218585229658a3a2db63e65_63902083%%*/
}
}
?>