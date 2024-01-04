<?php /* Smarty version 3.1.22-dev/9, created on 2023-12-26 11:26:05
         compiled from "/home/kir330489/public_html/papillon-nagoya.com/view/pc/common/head.html" */ ?>
<?php
/*%%SmartyHeaderCode:1951723307658a39bd3f8b93_47262787%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '609fdef2901f8623c072d45df8865b39f181a6fe' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/pc/common/head.html',
      1 => 1703557563,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1951723307658a39bd3f8b93_47262787',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'sp_dir_path' => 0,
    'mb_dir_path' => 0,
    'pc_dir_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/9',
  'unifunc' => 'content_658a39bd449ad9_22295508',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_658a39bd449ad9_22295508')) {
function content_658a39bd449ad9_22295508 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1951723307658a39bd3f8b93_47262787';
?>
<!-- Google tag (gtag.js) -->
<?php echo '<script'; ?>
 async src="https://www.googletagmanager.com/gtag/js?id=G-NQQ88T5G9B"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-NQQ88T5G9B');
<?php echo '</script'; ?>
>

<meta charset="utf-8">
<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page']->value['description'])===null||$tmp==='' ? '' : $tmp);?>
">
<meta name="keywords" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page']->value['keywords'])===null||$tmp==='' ? '' : $tmp);?>
">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="referrer" content="unsafe-url">

<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"><!-- Webfont -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
<link rel="preload" href="css/flexslider.css" as="style" onload="this.onload=null;this.rel='stylesheet'" /><!-- 体験漫画 -->
<link rel="preload" href="css/swiper.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'" /><!-- RSS -->
<!-- <link rel="stylesheet" href="https://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" /> --><!-- 日付ピッカー -->
<link rel="stylesheet" href="<?php echo @constant('ROOT_URL');?>
/css/style.css">
<link rel="shortcut icon" href="<?php echo @constant('IMAGES_URL');?>
/favicon.ico">
<link rel="apple-touch-icon" href="<?php echo @constant('IMAGES_URL');?>
/apple-touch-icon.png">
<link rel="alternate" media="only screen and (max-width: 640px)" href="<?php echo @constant('SHOP_URL');
echo $_smarty_tpl->tpl_vars['sp_dir_path']->value;?>
">
<link rel="alternate" media="handheld" href="<?php echo @constant('SHOP_URL');
echo $_smarty_tpl->tpl_vars['mb_dir_path']->value;?>
">
<link rel="canonical" href="<?php echo @constant('SHOP_URL');
echo $_smarty_tpl->tpl_vars['pc_dir_path']->value;?>
">

<?php echo '<script'; ?>
 src="js/jquery-1.11.2.min.js"><?php echo '</script'; ?>
><!-- jQuery -->
<?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.9.2/jquery-ui.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/jquery.cycle.all.min.js" defer><?php echo '</script'; ?>
><!-- ヘッドライン -->
<?php echo '<script'; ?>
 src="js/jquery.flexslider-min.js" defer><?php echo '</script'; ?>
><!-- 体験漫画 -->
<?php echo '<script'; ?>
 src="js/swiper.min.js" defer><?php echo '</script'; ?>
><!-- RSS -->
<?php echo '<script'; ?>
 src="js/matchHeight-min.js" defer><?php echo '</script'; ?>
><!-- トップページセラピストの高さ統一 -->
<!-- <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.ui.datepicker-ja.js" defer><?php echo '</script'; ?>
> --><!-- 日付ピッカー -->
<?php echo '<script'; ?>
 src="js/my.js"><?php echo '</script'; ?>
>
<!--[if lt IE 9]>
	<?php echo '<script'; ?>
 src="https://html5shiv.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
<![endif]-->
<?php }
}
?>