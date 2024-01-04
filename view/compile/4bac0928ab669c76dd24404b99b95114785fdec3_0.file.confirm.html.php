<?php /* Smarty version 3.1.22-dev/9, created on 2023-11-20 22:22:29
         compiled from "/home/kir330489/public_html/papillon-nagoya.com/view/admin/upload/confirm.html" */ ?>
<?php
/*%%SmartyHeaderCode:320471606655b5d9504c184_50075165%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bac0928ab669c76dd24404b99b95114785fdec3' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/admin/upload/confirm.html',
      1 => 1680160206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '320471606655b5d9504c184_50075165',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'result' => 0,
    'up_base_file_name' => 0,
    'params' => 0,
    'image_tag' => 0,
    'base_file_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/9',
  'unifunc' => 'content_655b5d950f1011_73827631',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_655b5d950f1011_73827631')) {
function content_655b5d950f1011_73827631 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '320471606655b5d9504c184_50075165';
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
        <?php if ($_smarty_tpl->tpl_vars['result']->value===true) {?>
        <form id="upload" name="upload" class="form-horizontal style-form" action="" method="post"
              enctype="multipart/form-data" onsubmit="xxx();">
            <div class="form-group">
                <label class="col-xs-3 control-label">ファイル名</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control mt" readonly="" value="<?php echo $_smarty_tpl->tpl_vars['up_base_file_name']->value;?>
">
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-3 control-label">
                <?php if ($_smarty_tpl->tpl_vars['params']->value['field']!='movie') {?>
                   サムネイル
                <?php } else { ?>
                    動画ファイル
                <?php }?>
                </label>

                <div class="col-xs-9">
                    <?php if ($_smarty_tpl->tpl_vars['params']->value['field']!='movie') {?>
                        <?php echo $_smarty_tpl->tpl_vars['image_tag']->value;?>

                    <?php } else { ?>
                        <div id="movie"></div>
                    <?php }?>
                </div>
            </div>
            <p class="mt text-right">
                <input type="submit" class="btn btn-primary" value="登録">
                <input type="button" name="back" class="btn btn-default" value="戻る" onclick="history.back();">
                <input type="button" name="back" class="btn btn-default" value="閉じる" onclick="window.close();">
            </p>
            <input type="hidden" name="image_name" value="<?php echo $_smarty_tpl->tpl_vars['base_file_name']->value;?>
"/>
            <input type="hidden" name="save_flag" value="yes"/>
        </form>
        <?php } else { ?>
        <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['result']->value;?>
</div>
        <p class="mt text-right">
            <input type="button" name="back" class="btn btn-default" value="戻る" onclick="history.back();">
            <input type="button" name="back" class="btn btn-default" value="閉じる" onclick="window.close();">
        </p>
        <?php }?>
    </div>
</div>
<?php echo '<script'; ?>
 src="<?php echo @constant('ROOT_URL');?>
/js/jwplayer/jwplayer.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    //<!--
    function xxx() {
        var _mother;
        var save_flag = document.forms["upload"].save_flag.value;
        if (save_flag == "yes") {
            _mother = opener ? opener : window.dialogArguments;
            //本体画像
            //DIV設定
            <?php if ($_smarty_tpl->tpl_vars['params']->value['field']!='movie') {?>
            var f_div = _mother.document.getElementById('<?php echo $_smarty_tpl->tpl_vars['params']->value['field'];?>
_div');
            f_div.innerHTML = '<?php echo $_smarty_tpl->tpl_vars['image_tag']->value;?>
';
            <?php }?>
            //ファイル名設定
            var f_text = _mother.document.getElementById('<?php echo $_smarty_tpl->tpl_vars['params']->value['field'];?>
_f_name');
            f_text.value = '<?php echo $_smarty_tpl->tpl_vars['base_file_name']->value;?>
';
            <?php if ($_smarty_tpl->tpl_vars['params']->value['field']=='movie') {?>
                _mother.document.frm.movie_del.focus();
            <?php }?>
            window.close();
        }
    }

    function set_flag() {
        document.forms["upload"].save_flag.value = "yes";
        onUnload();
    }

    document.getElementById('movie').innerHTML = '<video preload="none" onclick=”this.play();” width="<?php echo @constant('IMAGE_MOVIE_SIZE_W');?>
" height="<?php echo @constant('IMAGE_MOVIE_SIZE_H');?>
" autoplay="" loop="" muted=""><source src="<?php echo @constant('IMG_TEMP_URL');?>
/<?php echo $_smarty_tpl->tpl_vars['base_file_name']->value;?>
"></video>';

    // jwplayer("movie").setup({
    //     flashplayer: "<?php echo @constant('ROOT_URL');?>
/js/jwplayer/player.swf",
    //     file: "<?php echo @constant('IMG_TEMP_URL');?>
/<?php echo $_smarty_tpl->tpl_vars['base_file_name']->value;?>
",
    //     width: "<?php echo @constant('IMAGE_MOVIE_SIZE_W');?>
",
    //     height: "<?php echo @constant('IMAGE_MOVIE_SIZE_H');?>
",
    //     controls: true,
    //     mute: true,
    //     autostart: true
    // });
    //-->
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
?>