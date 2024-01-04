<?php /* Smarty version 3.1.22-dev/9, created on 2023-11-15 22:30:00
         compiled from "/home/kir330489/public_html/papillon-nagoya.com/view/pc/enquete/confirm.html" */ ?>
<?php
/*%%SmartyHeaderCode:2173928616554c7d8bbce74_73877590%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '540471bb4958215e78f8f297245b4fefa9b7816c' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/pc/enquete/confirm.html',
      1 => 1680160202,
      2 => 'file',
    ),
    '64d637c448d853e47cbf92a7231cad2bb0bc4597' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/pc/common/frame.html',
      1 => 1700036476,
      2 => 'file',
    ),
    'acfd86f54ec9f2e7133e28511ca0563c44637d6d' => 
    array (
      0 => 'acfd86f54ec9f2e7133e28511ca0563c44637d6d',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '2173928616554c7d8bbce74_73877590',
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
  'unifunc' => 'content_6554c7d8cc6871_55689213',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6554c7d8cc6871_55689213')) {
function content_6554c7d8cc6871_55689213 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2173928616554c7d8bbce74_73877590';
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
                <div class="container">
                    <div class="box">
                        <div class="circle layer-0"></div>
                        <div class="circle layer-1"></div>
                        <div class="circle layer-2"></div>
                        <div class="circle layer-3"></div>
                    </div>
                </div>
                <!-- //波紋 -->
                <picture  class="top">
                    <source srcset="images/mainvisual_top_sp.png" media="(max-width: 768px)" type="image/png">
                    <img src="images/mainvisual_top.png"alt="薔薇">
                </picture>
                <picture  class="santa">
                    <source srcset="images/mainvisual_christmas_santa_sp.png" media="(max-width: 768px)" type="image/png">
                    <img src="images/mainvisual_christmas_santa.png"alt="サンタクロース">
                </picture>
                <picture  class="town">
                    <source srcset="images/mainvisual_christmas_town_sp.png" media="(max-width: 768px)" type="image/png">
                    <img src="images/mainvisual_christmas_town.png"alt="街">
                </picture>
            </div>
            <p class="logo_img">
                <!-- <img src="<?php echo @constant('IMAGES_URL');?>
/mainvisual_logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['page']->value['h1'];?>
"> -->
                <img src="<?php echo @constant('IMAGES_URL');?>
/mainvisual_christmas_logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['page']->value['h1'];?>
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
$_smarty_tpl->properties['nocache_hash'] = '2173928616554c7d8bbce74_73877590';
?>


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
		<form method="post" action="?mode=finish">
			<table class="table03">
				<tr>
					<th width="20%">ご利用日&nbsp;<span class="atten_01">※</span></th>
					<td>
						<?php echo $_smarty_tpl->tpl_vars['posts']->value['use_year'];?>
年<?php echo $_smarty_tpl->tpl_vars['posts']->value['use_month'];?>
月<?php echo $_smarty_tpl->tpl_vars['posts']->value['use_day'];?>
日
					</td>
				</tr>
				<tr>
					<th width="30%">お名前&nbsp;<span class="atten_01">※</span></th>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['error']->value['name']!='') {?><span class="atten_01"><?php echo $_smarty_tpl->tpl_vars['error']->value['name'];?>
</span><?php } else {
echo $_smarty_tpl->tpl_vars['posts']->value['name'];
}?>
					</td>
				</tr>
				<tr>
					<th width="20%">電話番号&nbsp;<span class="atten_01">※</span></th>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['error']->value['phone']!='') {?><span class="atten_01"><?php echo $_smarty_tpl->tpl_vars['error']->value['phone'];?>
</span><?php } else {
echo $_smarty_tpl->tpl_vars['posts']->value['phone'];
}?>
					</td>
				</tr>

				<tr>
					<th width="20%">担当<?php echo @constant('STAFF_CALL');?>
&nbsp;<span class="atten_01">※</span></th>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['error']->value['staff_id']!='') {?><span class="atten_01"><?php echo $_smarty_tpl->tpl_vars['error']->value['staff_id'];?>
</span><?php } else {
echo $_smarty_tpl->tpl_vars['staff_name']->value;
}?>
					</td>
				</tr>
				<tr>
					<th width="20%">ルックス&nbsp;<span class="atten_01">※</span></th>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['error']->value['looks']!='') {?><span class="atten_01"><?php echo $_smarty_tpl->tpl_vars['error']->value['looks'];?>
</span><?php } else {
echo $_smarty_tpl->tpl_vars['posts']->value['looks'];
}?>
					</td>
				</tr>
				<tr>
					<th width="20%">接客態度&nbsp;<span class="atten_01">※</span></th>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['error']->value['service']!='') {?><span class="atten_01"><?php echo $_smarty_tpl->tpl_vars['error']->value['service'];?>
</span><?php } else {
echo $_smarty_tpl->tpl_vars['posts']->value['service'];
}?>
					</td>
				</tr>
				<tr>
					<th width="20%">マッサージ&nbsp;<span class="atten_01">※</span></th>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['error']->value['massage']!='') {?><span class="atten_01"><?php echo $_smarty_tpl->tpl_vars['error']->value['massage'];?>
</span><?php } else {
echo $_smarty_tpl->tpl_vars['posts']->value['massage'];
}?>
					</td>
				</tr>
				<tr>
					<th width="20%">総合評価&nbsp;<span class="atten_01">※</span></th>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['error']->value['total']!='') {?><span class="atten_01"><?php echo $_smarty_tpl->tpl_vars['error']->value['total'];?>
</span><?php } else {
echo $_smarty_tpl->tpl_vars['posts']->value['total'];
}?>
					</td>
				</tr>
				<tr>
					<th width="20%">スタッフの電話対応&nbsp;<span class="atten_01">※</span></th>
						<td>
							<?php if ($_smarty_tpl->tpl_vars['error']->value['staff_phone']!='') {?><span class="atten_01"><?php echo $_smarty_tpl->tpl_vars['error']->value['staff_phone'];?>
</span><?php } else {
echo $_smarty_tpl->tpl_vars['posts']->value['staff_phone'];
}?>
						</td>
					</tr>
					<tr>
						<th width="20%">ルームの清潔度&nbsp;<span class="atten_01">※</span></th>
							<td>
								<?php if ($_smarty_tpl->tpl_vars['error']->value['room']!='') {?><span class="atten_01"><?php echo $_smarty_tpl->tpl_vars['error']->value['room'];?>
</span><?php } else {
echo $_smarty_tpl->tpl_vars['posts']->value['room'];
}?>
							</td>
						</tr>

						<tr>
							<th width="20%">今までで一番良かった<?php echo @constant('STAFF_CALL');?>
</th>
							<td>
								<?php if ($_smarty_tpl->tpl_vars['best_staff_name']->value!='') {
echo $_smarty_tpl->tpl_vars['best_staff_name']->value;
}?>
								<?php echo nl2br($_smarty_tpl->tpl_vars['posts']->value['staff_comment']);?>

							</td>
						</tr>
						<tr>
							<th width="20%">お店、セラピストへのご意見ご要望、メッセージなど&nbsp;<span class="atten_01">※</span></th>
							<td>
								<?php if (nl2br($_smarty_tpl->tpl_vars['error']->value['comment'])!='') {?><span class="atten_01"><?php echo nl2br($_smarty_tpl->tpl_vars['error']->value['comment']);?>
</span><?php } else {
echo nl2br($_smarty_tpl->tpl_vars['posts']->value['comment']);
}?>
							</td>
						</tr>
					</table>
					<input type="hidden" name="use_year" value="<?php echo $_smarty_tpl->tpl_vars['posts']->value['use_year'];?>
">
					<input type="hidden" name="use_month" value="<?php echo $_smarty_tpl->tpl_vars['posts']->value['use_month'];?>
">
					<input type="hidden" name="use_day" value="<?php echo $_smarty_tpl->tpl_vars['posts']->value['use_day'];?>
">
					<input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['posts']->value['name'];?>
">
					<input type="hidden" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['posts']->value['phone'];?>
">
					<input type="hidden" name="staff_id" value="<?php echo $_smarty_tpl->tpl_vars['posts']->value['staff_id'];?>
">
					<input type="hidden" name="staff_name" value="<?php echo $_smarty_tpl->tpl_vars['staff_name']->value;?>
">
					<input type="hidden" name="looks" value="<?php echo $_smarty_tpl->tpl_vars['posts']->value['looks'];?>
">
					<input type="hidden" name="service" value="<?php echo $_smarty_tpl->tpl_vars['posts']->value['service'];?>
">
					<input type="hidden" name="massage" value="<?php echo $_smarty_tpl->tpl_vars['posts']->value['massage'];?>
">
					<input type="hidden" name="total" value="<?php echo $_smarty_tpl->tpl_vars['posts']->value['total'];?>
">
					<input type="hidden" name="staff_phone" value="<?php echo $_smarty_tpl->tpl_vars['posts']->value['staff_phone'];?>
">
					<input type="hidden" name="room" value="<?php echo $_smarty_tpl->tpl_vars['posts']->value['room'];?>
">
					<input type="hidden" name="best_staff_id" value="<?php echo $_smarty_tpl->tpl_vars['posts']->value['best_staff_id'];?>
">
					<input type="hidden" name="staff_comment" value="<?php echo $_smarty_tpl->tpl_vars['posts']->value['staff_comment'];?>
">
					<input type="hidden" name="comment" value="<?php echo $_smarty_tpl->tpl_vars['posts']->value['comment'];?>
">
					<input type="hidden" name="<?php echo @constant('TOKEN_KEY');?>
" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
">

					<?php if ($_smarty_tpl->tpl_vars['error']->value=='') {?>
					<input type="submit" name="send" value="送信" class="reset_btn btn_form" >
					<?php }?>
					<input type="button" value="戻る" onclick="history.back();" class="reset_btn btn_form" >
				</form>
			</div>
		</section>

		
    </main>

    <?php echo $_smarty_tpl->getSubTemplate (((string)@constant('VIEW_DIR'))."/pc/common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</body>
</html>
<?php }
}
?>