<?php /* Smarty version 3.1.22-dev/9, created on 2023-11-15 17:25:01
         compiled from "/home/kir330489/public_html/papillon-nagoya.com/view/pc/common/footer.html" */ ?>
<?php
/*%%SmartyHeaderCode:20922789626554805d5fc961_14522963%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e34f871e302a88c7d25c8e6bcf04e2c37efdfc60' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/pc/common/footer.html',
      1 => 1680160201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20922789626554805d5fc961_14522963',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'bread' => 0,
    'value' => 0,
    'html' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/9',
  'unifunc' => 'content_6554805d6d8527_23949567',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6554805d6d8527_23949567')) {
function content_6554805d6d8527_23949567 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '20922789626554805d5fc961_14522963';
?>
<footer>
	<div>
		<!-- パンくず -->
		<div class="breadcrumbs">
			<ul>
			<?php
$_from = $_smarty_tpl->tpl_vars['bread']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreachItemSav = $_smarty_tpl->tpl_vars['value'];
?>
				<li>
				<?php if ($_smarty_tpl->tpl_vars['value']->value['url']!='') {?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a>
				<?php } else { ?>
					<?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>

				<?php }?>
				</li>
			<?php
$_smarty_tpl->tpl_vars['value'] = $foreachItemSav;
}
?>
			</ul>
		</div>
		<!-- //パンくず -->
		<ul class="nav pc">
			<li><a href="<?php echo @constant('ROOT_URL');?>
" class="link_act_01"><?php echo $_smarty_tpl->tpl_vars['html']->value['name']['index'];?>
</a></li>
			<li><a href="<?php echo @constant('ROOT_URL');?>
/staff.php" class="link_act_01"><?php echo $_smarty_tpl->tpl_vars['html']->value['name']['staff'];?>
</a></li>
			<li><a href="<?php echo @constant('ROOT_URL');?>
/schedule.php" class="link_act_01"><?php echo $_smarty_tpl->tpl_vars['html']->value['name']['schedule'];?>
</a></li>
			<li><a href="<?php echo @constant('ROOT_URL');?>
/system.php" class="link_act_01"><?php echo $_smarty_tpl->tpl_vars['html']->value['name']['system'];?>
</a></li>
			<li><a href="<?php echo @constant('ROOT_URL');?>
/access.php" class="link_act_01"><?php echo $_smarty_tpl->tpl_vars['html']->value['name']['access'];?>
</a></li>
			<li><a href="<?php echo @constant('ROOT_URL');?>
/recruit.php" class="link_act_01"><?php echo $_smarty_tpl->tpl_vars['html']->value['name']['recruit'];?>
</a></li>
			<li><a href="<?php echo @constant('ROOT_URL');?>
/enquete.php" class="link_act_01"><?php echo $_smarty_tpl->tpl_vars['html']->value['name']['enquete'];?>
</a></li>
			<li><a href="<?php echo @constant('ROOT_URL');?>
/contact.php" class="link_act_01"><?php echo $_smarty_tpl->tpl_vars['html']->value['name']['contact'];?>
</a></li>
			<li><a href="<?php echo @constant('ROOT_URL');?>
/link.php" class="link_act_01"><?php echo $_smarty_tpl->tpl_vars['html']->value['name']['link'];?>
</a></li>
		</ul>
		<!-- ロゴ -->
		<p class="logo">
			<a href="<?php echo @constant('ROOT_URL');?>
" class="link_act_01">
				<img src="<?php echo @constant('IMAGES_URL');?>
/logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['page']->value['h1'];?>
">
			</a>
		</p>
		<!-- ロゴ -->

		<!-- フッターバナー -->
		<div class="bnr_box">
			<p>
				<a href="https://nagoya.aroma-tsushin.com/" target="_blank" class="pc"><img src="https://nagoya.aroma-tsushin.com/banner/banner-468x060.gif" width="468" height="60" border="0" alt="リンク│名古屋でメンズエステを探すならアロマパンダ通信"><br>優良メンズエステと出張マッサージ探しはここ</a>
			</p>
			<p>
				<a href="https://nagoya.aroma-tsushin.com/" target="_blank" class="sp"><img src="https://nagoya.aroma-tsushin.com/banner/banner-300x060.gif" width="300" height="60" border="0" alt="リンク│名古屋でメンズエステを探すならアロマパンダ通信"><br>優良メンズエステ・出張マッサージはここ</a>
			</p>
			<!-- <p>
				<a href="https://nagoya.refle.info/"><img width="200" height="40" border="0" src="https://nagoya.refle.info/images/area/bunner200_2.gif" alt="名古屋でメンズエステ・マッサージ探すならリフナビ"></a>
			</p> -->
		</div>
		<!-- //フッターバナー -->

		<p>
			&copy;&nbsp;
			<?php echo '<script'; ?>
 type="text/javascript">
				$y=2020;$ny=new Date().getFullYear();
				document.write($ny>$y?$y+'-'+$ny: $y);
			<?php echo '</script'; ?>
>
			&nbsp;<?php echo @constant('SHOP_NAME');?>
&nbsp;All&nbsp;Rights&nbsp;Reserved.
		</p>
	</div>
</footer><?php }
}
?>