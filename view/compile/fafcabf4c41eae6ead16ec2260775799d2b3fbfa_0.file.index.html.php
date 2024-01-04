<?php /* Smarty version 3.1.22-dev/9, created on 2023-11-20 22:21:28
         compiled from "/home/kir330489/public_html/papillon-nagoya.com/view/admin/upload/index.html" */ ?>
<?php
/*%%SmartyHeaderCode:2000112129655b5d580e8ad0_82407927%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fafcabf4c41eae6ead16ec2260775799d2b3fbfa' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/admin/upload/index.html',
      1 => 1680160206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2000112129655b5d580e8ad0_82407927',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'base_width' => 0,
    'base_height' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/9',
  'unifunc' => 'content_655b5d5814fc61_98260104',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_655b5d5814fc61_98260104')) {
function content_655b5d5814fc61_98260104 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2000112129655b5d580e8ad0_82407927';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow">
    <title>WEB管理システム - ファイルアップローダー
    </title>
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
    <link href="<?php echo @constant('AD_URL');?>
/css/table-responsive.css" rel="stylesheet">
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
<div class="col-xs-12">
    <div class="form-panel">
        <form id="upload" name="upload" class="form-horizontal style-form"
              action="confirm.php?field=<?php echo $_smarty_tpl->tpl_vars['params']->value['field'];?>
" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['params']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
">
            <div class="form-group">
                <label class="col-xs-3 control-label">ファイル場所<span class="red">※</span>
                <p>(<?php echo $_smarty_tpl->tpl_vars['params']->value['ext'];?>
形式)</p>
                <?php if ($_smarty_tpl->tpl_vars['params']->value['field']!='movie'&&$_smarty_tpl->tpl_vars['params']->value['field']!='img') {?><p>(<?php echo $_smarty_tpl->tpl_vars['base_width']->value;?>
x<?php echo $_smarty_tpl->tpl_vars['base_height']->value;?>
以上)</p><?php }?>
                </label>
                <div class="col-xs-9">
                <?php if ($_smarty_tpl->tpl_vars['params']->value['field']!='movie') {?>
                    <label><input type="radio" name="method" id="method_url" value="url"/>URLを指定</label>
                    <input name="image_url" class="form-control col-xs-4" type="text" id="image_url"
                           onChange="set_button('url')" size="80"/><br/>
                <?php }?>
                    <label><input type="radio" name="method" id="method_file" value="file"/>ファイルを指定</label>
                    <input type="file" name="image_f" id="image_f" onChange="set_button('file')"/>
                </div>
            </div>
            <p class="mt text-right">
                <input type="submit" name="confirm" class="btn btn-primary" value="確認">
                <input type="button" name="back" class="btn btn-default" value="閉じる" onclick="window.close();">
            </p>
        </form>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    //<!--
    function set_button(btn_value) {
        if (btn_value == "file") {
            document.getElementById("method_file").checked = true;
            document.getElementById("method_url").checked = false;
        } else {
            document.getElementById("method_file").checked = false;
            document.getElementById("method_url").checked = true;
        }
    }
    //-->
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
?>