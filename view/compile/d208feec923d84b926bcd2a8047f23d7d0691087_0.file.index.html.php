<?php /* Smarty version 3.1.22-dev/9, created on 2023-12-26 12:02:26
         compiled from "/home/kir330489/public_html/papillon-nagoya.com/view/pc/enquete/index.html" */ ?>
<?php
/*%%SmartyHeaderCode:1860185166658a4242367a27_89572377%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd208feec923d84b926bcd2a8047f23d7d0691087' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/pc/enquete/index.html',
      1 => 1680166187,
      2 => 'file',
    ),
    '64d637c448d853e47cbf92a7231cad2bb0bc4597' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/pc/common/frame.html',
      1 => 1703557474,
      2 => 'file',
    ),
    '88aab836c2397c03ba54dfe665dea411c607036a' => 
    array (
      0 => '88aab836c2397c03ba54dfe665dea411c607036a',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1860185166658a4242367a27_89572377',
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
  'unifunc' => 'content_658a4242434529_83300610',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_658a4242434529_83300610')) {
function content_658a4242434529_83300610 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/home/kir330489/public_html/papillon-nagoya.com/vendor/smarty/smarty/libs/plugins/function.html_options.php';
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1860185166658a4242367a27_89572377';
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
$_smarty_tpl->properties['nocache_hash'] = '1860185166658a4242367a27_89572377';
?>

<div class="shutter"><div class="spinner"></div><p class="text">Papillon</p></div>
<section id="contents_enquete">
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
			<p class="sub"><?php echo $_smarty_tpl->tpl_vars['html']->value['name_kana']['enquete'];?>
</p>
		</h2>
	</div>
	<!-- //サブビジュアル -->

	<div id="contents" class="inner">
		<div class="table_txt">
			<p>
				<span class="atten_01">※</span>は必須項目です。
			</p>
		</div>
		<form method="post" action="?mode=confirm">
			<table class="table03">
				<tr>
					<th>ご利用日&nbsp;<span class="atten_01">※</span></th>
					<td>
						<?php echo smarty_function_html_options(array('name'=>'use_year','options'=>$_smarty_tpl->tpl_vars['form']->value['impressions']['year'],'selected'=>$_smarty_tpl->tpl_vars['year']->value),$_smarty_tpl);?>
年
						<?php echo smarty_function_html_options(array('name'=>'use_month','options'=>$_smarty_tpl->tpl_vars['form']->value['impressions']['month'],'selected'=>$_smarty_tpl->tpl_vars['month']->value),$_smarty_tpl);?>
月
						<?php echo smarty_function_html_options(array('name'=>'use_day','options'=>$_smarty_tpl->tpl_vars['form']->value['impressions']['day'],'selected'=>$_smarty_tpl->tpl_vars['day']->value),$_smarty_tpl);?>
日
					</td>
				</tr>                                    
				<tr>
					<th>お名前&nbsp;<span class="atten_01">※</span></th>
					<td>
						<input type="text" name="name" size="30">
					</td>
				</tr>
				<tr>
					<th class="tel">電話番号&nbsp;<span class="atten_01">※</span>&nbsp;<span class="fs_08em atten_01">ハイフンは入力しないでください</span></th>
					<td>
						<input type="text" name="phone" size="30">
					</td>
				</tr>                                        
				<tr>
					<th width="20%">担当<?php echo @constant('STAFF_CALL');?>
&nbsp;<span class="atten_01">※</span></th>
					<td>
						<span class="staff">
							<?php echo smarty_function_html_options(array('name'=>'staff_id','options'=>$_smarty_tpl->tpl_vars['staff_list']->value,'selected'=>$_smarty_tpl->tpl_vars['sid']->value,'class'=>'radio_input'),$_smarty_tpl);?>

						</span>
					</td>
				</tr>
				<tr>
					<th>ルックス&nbsp;<span class="atten_01">※</span></th>
					<td>
						<?php echo smarty_function_html_options(array('name'=>'looks','options'=>$_smarty_tpl->tpl_vars['form']->value['impressions']['detail']),$_smarty_tpl);?>

					</td>
				</tr>
				<tr>
					<th>接客態度&nbsp;<span class="atten_01">※</span></th>
					<td>
						<?php echo smarty_function_html_options(array('name'=>'service','options'=>$_smarty_tpl->tpl_vars['form']->value['impressions']['detail']),$_smarty_tpl);?>

					</td>
				</tr>
				<tr>
					<th>マッサージ&nbsp;<span class="atten_01">※</span></th>
					<td>
						<?php echo smarty_function_html_options(array('name'=>'massage','options'=>$_smarty_tpl->tpl_vars['form']->value['impressions']['detail']),$_smarty_tpl);?>

					</td>
				</tr>
				<tr>
					<th>総合評価&nbsp;<span class="atten_01">※</span></th>
					<td>
						<?php echo smarty_function_html_options(array('name'=>'total','options'=>$_smarty_tpl->tpl_vars['form']->value['impressions']['detail']),$_smarty_tpl);?>

					</td>
				</tr>
				<tr>
					<th>スタッフの電話対応&nbsp;<span class="atten_01">※</span></th>
					<td>
						<?php echo smarty_function_html_options(array('name'=>'staff_phone','options'=>$_smarty_tpl->tpl_vars['form']->value['impressions']['detail']),$_smarty_tpl);?>

					</td>
				</tr>
				<tr>
					<th>ルームの清潔度&nbsp;<span class="atten_01">※</span></th>
					<td>
						<?php echo smarty_function_html_options(array('name'=>'room','options'=>$_smarty_tpl->tpl_vars['form']->value['impressions']['detail']),$_smarty_tpl);?>

					</td>
				</tr>
				<tr>
					<th>今までで一番良かった<?php echo @constant('STAFF_CALL');?>
</th>
					<td class="best_staff">
						<p>在籍中のセラピストから選択される場合</p>
						<span class="staff">
						<?php echo smarty_function_html_options(array('name'=>'best_staff_id','options'=>$_smarty_tpl->tpl_vars['staff_list']->value,'selected'=>$_smarty_tpl->tpl_vars['sid']->value),$_smarty_tpl);?>
</span><br><br>
						<p>過去に在籍していたセラピストはご記入ください。</p>
						<textarea name="staff_comment" style="width:100%" width="100%"></textarea>
					</td>
				</tr>
				<tr>
					<th>お店、セラピストへのご意見ご要望、メッセージなど<span class="atten_01">※</span></th>
					<td>
						<textarea name="comment" cols="80" rows="10" style="width:100%" width="100%"></textarea>
					</td>
				</tr>                                        
			</table>
			<div class="table_txt">
				<p>
					セラピストへのコメント等はセラピストプロフィールコメントへ匿名で使用させていただく場合がございます。
				</p>
			</div>                              
		<input type="submit" name="confirm" value="確認" class="btn_form">
		<input type="reset" name="reset" value="リセット" class="btn_reset">
	</form>
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