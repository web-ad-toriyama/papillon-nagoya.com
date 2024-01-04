<?php /* Smarty version 3.1.22-dev/9, created on 2023-11-15 17:25:17
         compiled from "/home/kir330489/public_html/papillon-nagoya.com/view/pc/common/header.html" */ ?>
<?php
/*%%SmartyHeaderCode:19724579136554806d42da98_54812253%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50d95deac982dab0d30940a6240e2dd12d84e97d' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/pc/common/header.html',
      1 => 1680160201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19724579136554806d42da98_54812253',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'html' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/9',
  'unifunc' => 'content_6554806d4899e3_00551155',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6554806d4899e3_00551155')) {
function content_6554806d4899e3_00551155 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '19724579136554806d42da98_54812253';
?>
<header>
	<div class="inner">
		<!-- logo -->
		<h1>
			<a href="<?php echo @constant('ROOT_URL');?>
" class="link_act_01">
				<img src="<?php echo @constant('IMAGES_URL');?>
/logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['page']->value['h1'];?>
">
			</a>
		</h1>
		<!-- //logo -->

		<!-- pc menu-->
		<ul class="nav pc">
			<li>
				<a href="<?php echo @constant('ROOT_URL');?>
" class="link_act_01">
					<?php echo $_smarty_tpl->tpl_vars['html']->value['name']['index'];?>

					<span><?php echo $_smarty_tpl->tpl_vars['html']->value['name_kana']['index'];?>
</span>
				</a>
			</li>
			<li>
				<a href="<?php echo @constant('ROOT_URL');?>
/staff.php" class="link_act_01">
					<?php echo $_smarty_tpl->tpl_vars['html']->value['name']['staff'];?>

					<span><?php echo $_smarty_tpl->tpl_vars['html']->value['name_kana']['staff'];?>
</span>
				</a>
			</li>
			<li>
				<a href="<?php echo @constant('ROOT_URL');?>
/schedule.php" class="link_act_01">
					<?php echo $_smarty_tpl->tpl_vars['html']->value['name']['schedule'];?>

					<span><?php echo $_smarty_tpl->tpl_vars['html']->value['name_kana']['schedule'];?>
</span>
				</a>
			</li>
			<li>
				<a href="<?php echo @constant('ROOT_URL');?>
/system.php" class="link_act_01">
					<?php echo $_smarty_tpl->tpl_vars['html']->value['name']['system'];?>

					<span><?php echo $_smarty_tpl->tpl_vars['html']->value['name_kana']['system'];?>
</span>
				</a>
			</li>
			<li>
				<a href="<?php echo @constant('ROOT_URL');?>
/access.php" class="link_act_01">
					<?php echo $_smarty_tpl->tpl_vars['html']->value['name']['access'];?>

					<span><?php echo $_smarty_tpl->tpl_vars['html']->value['name_kana']['access'];?>
</span>
				</a>
			</li>
			<li>
				<a href="<?php echo @constant('ROOT_URL');?>
/recruit.php" class="link_act_01">
					<?php echo $_smarty_tpl->tpl_vars['html']->value['name']['recruit'];?>

					<span><?php echo $_smarty_tpl->tpl_vars['html']->value['name_kana']['recruit'];?>
</span>
				</a>
			</li>
		</ul>
		<!-- //pc menu-->

		<!-- グローバルメニューsp用 -->
		<!--SP用ドロワーメニュー-->
		<!-- ハンバーガーボタン -->
		<div class="btn_menu">
			<div id="btn18" class="btn-trigger">
				<span></span>
				<span></span>
				<span></span>
				<p class="text_menu">MENU</p>
			</div>
		</div>
		<!-- //ハンバーガーボタン -->

		<!-- ドロワー内 -->
		<div id="nav-d-bg" class="drawer"></div>
		<nav id="nav_drawer">
			<ul>
				<li>
					<a href="<?php echo @constant('ROOT_URL');?>
">
						<span class="en"><?php echo $_smarty_tpl->tpl_vars['html']->value['name']['index'];?>
</span>
						<span class="jp"><?php echo $_smarty_tpl->tpl_vars['html']->value['name_kana']['index'];?>
</span>
					</a>
				</li>
				<li>
					<a href="<?php echo @constant('ROOT_URL');?>
/staff.php">
						<span class="en"><?php echo $_smarty_tpl->tpl_vars['html']->value['name']['staff'];?>
</span>
						<span class="jp"><?php echo $_smarty_tpl->tpl_vars['html']->value['name_kana']['staff'];?>
</span>
					</a>
				</li>
				<li>
					<a href="<?php echo @constant('ROOT_URL');?>
/schedule.php">
						<span class="en"><?php echo $_smarty_tpl->tpl_vars['html']->value['name']['schedule'];?>
</span>
						<span class="jp"><?php echo $_smarty_tpl->tpl_vars['html']->value['name_kana']['schedule'];?>
</span>
					</a>
				</li>
				<li>
					<a href="<?php echo @constant('ROOT_URL');?>
/system.php">
						<span class="en"><?php echo $_smarty_tpl->tpl_vars['html']->value['name']['system'];?>
</span>
						<span class="jp"><?php echo $_smarty_tpl->tpl_vars['html']->value['name_kana']['system'];?>
</span>
					</a>
				</li>
				<li>
					<a href="<?php echo @constant('ROOT_URL');?>
/access.php">
						<span class="en"><?php echo $_smarty_tpl->tpl_vars['html']->value['name']['access'];?>
</span>
						<span class="jp"><?php echo $_smarty_tpl->tpl_vars['html']->value['name_kana']['access'];?>
</span>
					</a>
				</li>
				<li>
					<a href="<?php echo @constant('ROOT_URL');?>
/contact.php">
						<span class="en"><?php echo $_smarty_tpl->tpl_vars['html']->value['name']['contact'];?>
</span>
						<span class="jp"><?php echo $_smarty_tpl->tpl_vars['html']->value['name_kana']['contact'];?>
</span>
					</a>
				</li>
				<li class="btn_entry">
					<a href="<?php echo @constant('ROOT_URL');?>
/enquete.php">
						<i class="fas fa-clipboard" aria-hidden="true"></i>&nbsp;
						<span class="en"><?php echo $_smarty_tpl->tpl_vars['html']->value['name']['enquete'];?>
</span>
						<span class="jp"><?php echo $_smarty_tpl->tpl_vars['html']->value['name_kana']['enquete'];?>
</span>
					</a>
				</li>					
				<li class="btn_entry">
					<a href="<?php echo @constant('ROOT_URL');?>
/recruit.php">
						<i class="fa fa-heart" aria-hidden="true"></i>&nbsp;
						<span class="en"><?php echo $_smarty_tpl->tpl_vars['html']->value['name']['recruit'];?>
</span>
						<span class="jp"><?php echo $_smarty_tpl->tpl_vars['html']->value['name_kana']['recruit'];?>
</span>
					</a>
				</li>
				<li class="btn_nav_tel">
					<a href="tel:<?php echo @constant('SHOP_TEL_RECRUIT');?>
"><span>TEL:<?php echo @constant('SHOP_TEL_RECRUIT');?>
</span></a>
				</li>
				<li class="info_open">
					<p><span>営業時間</span>&nbsp;<?php echo @constant('SHOP_OPEN');?>
</p>
					<p><span>受付時間</span>&nbsp;<?php echo @constant('SHOP_RECEPTION');?>
</p>
					
				</li>
			</ul>
		</nav>
		<!-- //ドロワー内 -->
		<!-- //グローバルメニューsp用 -->

	</div><!-- //inner終わり -->
</header>

<!-- SP用下部追尾ボタン -->
<div id="bottom_nav">
	<a href="tel:<?php echo @constant('SHOP_TEL');?>
">
		<i class="fas fa-mobile-alt"></i>&nbsp;TEL
	</a>
	<a href="<?php echo @constant('SHOP_LINEURL');?>
" target="_blank">
		<i class="fab fa-line"></i>&nbsp;LINE
	</a>
	<a href="<?php echo @constant('ROOT_URL');?>
/recruit.php">
		<i class="fa fa-heart" aria-hidden="true"></i>&nbsp;RECRUIT
	</a>
</div>
<!-- SP用下部追尾ボタン --><?php }
}
?>