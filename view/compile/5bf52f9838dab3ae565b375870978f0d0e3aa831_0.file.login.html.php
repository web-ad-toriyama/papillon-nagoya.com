<?php /* Smarty version 3.1.22-dev/9, created on 2023-11-15 17:33:40
         compiled from "/home/kir330489/public_html/papillon-nagoya.com/view/admin/login.html" */ ?>
<?php
/*%%SmartyHeaderCode:776159117655482648688c9_74502163%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bf52f9838dab3ae565b375870978f0d0e3aa831' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/admin/login.html',
      1 => 1680160192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '776159117655482648688c9_74502163',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'result' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/9',
  'unifunc' => 'content_655482648ec222_93138399',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_655482648ec222_93138399')) {
function content_655482648ec222_93138399 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '776159117655482648688c9_74502163';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow">
    <title>WEB管理システム - ログイン</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo @constant('AD_URL');?>
/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo @constant('AD_URL');?>
/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <!-- Custom styles for this template -->
    <link href="<?php echo @constant('AD_URL');?>
/css/style.css" rel="stylesheet">
    <link href="<?php echo @constant('AD_URL');?>
/css/style-responsive.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
</head>
<body>
<div id="login-page">
    <div class="container">
        <form class="form-login" action="login.php" method="post" onsubmit="return formCheck(this);">
            <h2 class="form-login-heading">ログインフォーム</h2>
            <div class="login-wrap">
                <?php if ($_smarty_tpl->tpl_vars['result']->value===false) {?>
                <p class="alert alert-danger">ログインに失敗しました。</p>
                <?php }?>
                <input type="text" name="login_id" class="form-control" placeholder="ログインID"
                       value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['login_id'])===null||$tmp==='' ? '' : $tmp);?>
">
                <br>
                <input type="password" name="login_pass" class="form-control" placeholder="パスワード">
                <label class="checkbox">
                        <span class="pull-right">
		                    <input type="checkbox" name="remember" value="1"> ログイン情報を保持する
		                </span>
                </label>
                <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> ログイン</button>
                <hr>
            </div>
        </form>
    </div>
</div>
<!-- js placed at the end of the document so the pages load faster -->
<?php echo '<script'; ?>
 src="<?php echo @constant('AD_URL');?>
/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo @constant('AD_URL');?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo @constant('AD_URL');?>
/js/check/method.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo @constant('AD_URL');?>
/js/check/login.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo @constant('AD_URL');?>
/js/my.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
?>