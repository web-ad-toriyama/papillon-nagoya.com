<?php /* Smarty version 3.1.22-dev/9, created on 2023-11-15 22:31:22
         compiled from "/home/kir330489/public_html/papillon-nagoya.com/view/pc/enquete/finish.html" */ ?>
<?php
/*%%SmartyHeaderCode:2227293566554c82a9cbf72_07331490%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c92720c06edcb1403048475e783cbcb4df41d89' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/pc/enquete/finish.html',
      1 => 1680160202,
      2 => 'file',
    ),
    '64d637c448d853e47cbf92a7231cad2bb0bc4597' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/pc/common/frame.html',
      1 => 1700036476,
      2 => 'file',
    ),
    '5934843e2e1ffd2cd6d097fd19a3520cd77d3dfc' => 
    array (
      0 => '5934843e2e1ffd2cd6d097fd19a3520cd77d3dfc',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '2227293566554c82a9cbf72_07331490',
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
  'unifunc' => 'content_6554c82aa13570_63191975',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6554c82aa13570_63191975')) {
function content_6554c82aa13570_63191975 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2227293566554c82a9cbf72_07331490';
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
$_smarty_tpl->properties['nocache_hash'] = '2227293566554c82a9cbf72_07331490';
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
	<p class="txt_box_01">
		<?php if ($_smarty_tpl->tpl_vars['csrf']->value==true) {?>
		<?php if ($_smarty_tpl->tpl_vars['result']->value==true) {?>
		アンケートの送信が完了しました。
		<?php } else { ?>
		アンケートの送信に失敗しました。
		<?php }?>
		<?php } else { ?>
		不正な送信が行われました為送信を中止しました。
		<?php }?>
	</p>
	<input type="button" onclick="location.href='<?php echo @constant('ROOT_URL');?>
/enquete.php'"value="アンケートトップへ" class="reset_btn btn_form link_act_01" >
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