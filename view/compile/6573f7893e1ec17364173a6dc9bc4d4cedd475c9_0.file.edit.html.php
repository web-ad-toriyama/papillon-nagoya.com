<?php /* Smarty version 3.1.22-dev/9, created on 2023-12-01 19:06:43
         compiled from "/home/kir330489/public_html/papillon-nagoya.com/view/admin/topics/edit.html" */ ?>
<?php
/*%%SmartyHeaderCode:3514643106569b03359a6b5_45671922%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6573f7893e1ec17364173a6dc9bc4d4cedd475c9' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/admin/topics/edit.html',
      1 => 1680160207,
      2 => 'file',
    ),
    '4f7321a45d1ff51c312e3975478c5ebaae292671' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/admin/common/frame.html',
      1 => 1680160203,
      2 => 'file',
    ),
    '510ed4458dc576e80eff0381c529e864fecbcc75' => 
    array (
      0 => '510ed4458dc576e80eff0381c529e864fecbcc75',
      1 => 0,
      2 => 'string',
    ),
    '4f4cb46f20923310154fd73b1c21c96cb8ddb900' => 
    array (
      0 => '4f4cb46f20923310154fd73b1c21c96cb8ddb900',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '3514643106569b03359a6b5_45671922',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'base_path' => 0,
    'form' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/9',
  'unifunc' => 'content_6569b0336bd7b2_51126695',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6569b0336bd7b2_51126695')) {
function content_6569b0336bd7b2_51126695 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/home/kir330489/public_html/papillon-nagoya.com/vendor/smarty/smarty/libs/plugins/function.html_options.php';
if (!is_callable('smarty_function_html_radios')) require_once '/home/kir330489/public_html/papillon-nagoya.com/vendor/smarty/smarty/libs/plugins/function.html_radios.php';
if (!is_callable('smarty_modifier_date_format')) require_once '/home/kir330489/public_html/papillon-nagoya.com/vendor/smarty/smarty/libs/plugins/modifier.date_format.php';
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '3514643106569b03359a6b5_45671922';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow">
    <title>WEB管理システム -
        <?php
$_smarty_tpl->properties['nocache_hash'] = '3514643106569b03359a6b5_45671922';
?>
新着情報登録
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

          <!-- js placed at the end of the document so the pages load faster -->
          <?php echo '<script'; ?>
 src="<?php echo @constant('AD_URL');?>
/js/jquery.js"><?php echo '</script'; ?>
>
          <?php echo '<script'; ?>
 src="<?php echo @constant('AD_URL');?>
/js/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
          <?php echo '<script'; ?>
 src="<?php echo @constant('AD_URL');?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
          <?php echo '<script'; ?>
 class="include" type="text/javascript" src="<?php echo @constant('AD_URL');?>
/js/jquery.dcjqaccordion.2.7.js"><?php echo '</script'; ?>
>
          <?php echo '<script'; ?>
 src="<?php echo @constant('AD_URL');?>
/js/jquery.scrollTo.min.js"><?php echo '</script'; ?>
>

          <?php echo '<script'; ?>
 src="<?php echo @constant('AD_URL');?>
/js/jquery-ui-1.9.2.custom.min.js"><?php echo '</script'; ?>
>
          <?php echo '<script'; ?>
 src="<?php echo @constant('AD_URL');?>
/js/jquery.ui.touch-punch.js"><?php echo '</script'; ?>
>
          <?php echo '<script'; ?>
 src="<?php echo @constant('AD_URL');?>
/js/jquery-cookie.js"><?php echo '</script'; ?>
>

          <?php echo '<script'; ?>
 src="<?php echo @constant('AD_URL');?>
/js/check/method.js"><?php echo '</script'; ?>
>
          <?php echo '<script'; ?>
 src="<?php echo @constant('AD_URL');?>
/js/my.js"><?php echo '</script'; ?>
>
      </head>
      <body>
        <section id="container">
            <!--header start-->
            <header class="header black-bg">
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars tooltips" data-placement="right"></div>
                </div>
                <!--logo start-->
                <!-- {*
                <a href="<?php echo @constant('AD_URL');?>
/" class="logo"><span>pwc - JUSTICE</span>&nbsp;&nbsp;ver:α&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo @constant('SHOP_NAME');?>
&nbsp;様</a>
                *} -->
                <a href="<?php echo @constant('AD_URL');?>
/" class="logo"><span>HP管理システム</span>&nbsp;&nbsp;v2&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo @constant('SHOP_NAME');?>
&nbsp;様</a>
                <!--logo end-->
                <div class="top-menu">
                    <ul class="nav pull-right top-menu">
                        <li><a class="logout" href="<?php echo @constant('AD_URL');?>
/logout.php">ログアウト</a>
                        </li>
                    </ul>
                </div>
            </header>
            <!--header end-->

            <!--sidebar start-->
            <aside>
                <div id="sidebar" class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu" id="nav-accordion">

                        <li class="mt">
                            <a href="<?php echo @constant('ROOT_URL');?>
" target="_blank">
                                <i class="fa fa-desktop"></i>
                                <span>オフィシャル</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="<?php echo @constant('AD_URL');?>
/" <?php if ($_smarty_tpl->tpl_vars['base_path']->value=='') {?>class="active"<?php }?>>
                                <i class="fa fa-home"></i>
                                <span>ホーム</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="<?php echo @constant('AD_URL');?>
/info/" <?php if ($_smarty_tpl->tpl_vars['base_path']->value=='info') {?>class="active"<?php }?>>
                                <i class="fa fa-info"></i>
                                <span>運営部からのお知らせ</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="<?php echo @constant('AD_URL');?>
/page/" <?php if ($_smarty_tpl->tpl_vars['base_path']->value=='page') {?>class="active"<?php }?>>
                            <i class="fa fa-cogs"></i>
                            <span>内部情報設定</span>
                            </a>
                        </li>

                        <?php if (count($_smarty_tpl->tpl_vars['form']->value['item']['name'])>0) {?>
                        <li class="sub-menu">
                             <a href="" <?php if ($_smarty_tpl->tpl_vars['base_path']->value=='item') {?>class="active"<?php }?>>
                                <i class="fa fa-cogs"></i>
                                <span><?php echo @constant('STAFF_CALL');?>
項目設定</span>
                            </a>
                            <ul class="sub">
                                <?php
$_from = $_smarty_tpl->tpl_vars['form']->value['item']['name'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreachItemSav = $_smarty_tpl->tpl_vars['v'];
?>
                                <li><a href="<?php echo @constant('AD_URL');?>
/item/?pid=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
&p=1"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
一覧</a></li>
                                <?php
$_smarty_tpl->tpl_vars['v'] = $foreachItemSav;
}
?>
                            </ul>
                        </li>
                        <?php }?>


                        <li class="sub-menu">
                            <a href="<?php echo @constant('AD_URL');?>
/enquete/" <?php if ($_smarty_tpl->tpl_vars['base_path']->value=='enquete') {?>class="active"<?php }?>>
                                <i class="fa fa-send"></i>
                                <span>アンケート設定</span>
                            </a>
                        </li>


                        <li class="sub-menu">
                            <a href="" <?php if ($_smarty_tpl->tpl_vars['base_path']->value=='staff') {?>class="active"<?php }?>>
                                <i class="fa fa-user"></i>
                                <span><?php echo @constant('STAFF_CALL');?>
設定</span>
                            </a>
                            <ul class="sub">
                                <li><a href="<?php echo @constant('AD_URL');?>
/staff/?p=1">登録一覧</a></li>
                                <li><a href="<?php echo @constant('AD_URL');?>
/staff/sch.php?w=1&p=1">スケジュール登録</a></li>
                                
                                <li><a href="<?php echo @constant('AD_URL');?>
/staff/sort.php?w=1&p=1"><?php echo @constant('STAFF_CALL');?>
並べ替え</a></li>
                            </ul>
                        </li>

                        

                        <li class="sub-menu">
                            <a href="" <?php if ($_smarty_tpl->tpl_vars['base_path']->value=='topics') {?>class="active"<?php }?>>
                                <i class="fa fa-book"></i>
                                <span>新着情報設定</span>
                            </a>
                            <ul class="sub">
                                <li><a href="<?php echo @constant('AD_URL');?>
/topics/?p=1">登録一覧</a></li>
                                <li><a href="<?php echo @constant('AD_URL');?>
/topics/tpl.php?p=1">テンプレート登録</a></li>
                            </ul>
                        </li>

                        

                        <li class="sub-menu">
                            <a href="<?php echo @constant('AD_URL');?>
/event/" <?php if ($_smarty_tpl->tpl_vars['base_path']->value=='event') {?>class="active"<?php }?>>
                                <i class="fa fa-star"></i>
                                <span>イベント情報設定</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="<?php echo @constant('AD_URL');?>
/system/" <?php if ($_smarty_tpl->tpl_vars['base_path']->value=='system') {?>class="active"<?php }?>>
                            <i class="fa fa-star"></i>
                            <span>システム情報設定</span>
                            </a>
                        </li>
                        
                        

                        <?php if (count($_smarty_tpl->tpl_vars['form']->value['link'])>0) {?>
                        <li class="sub-menu">
                             <a href="" <?php if ($_smarty_tpl->tpl_vars['base_path']->value=='link') {?>class="active"<?php }?>>
                                <i class="fa fa-external-link"></i>
                                <span>リンク設定</span>
                            </a>
                            <ul class="sub">
                                <?php
$_from = $_smarty_tpl->tpl_vars['form']->value['link'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreachItemSav = $_smarty_tpl->tpl_vars['v'];
?>
                                <li><a href="<?php echo @constant('AD_URL');?>
/link/?pid=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
&p=1"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
リンク一覧</a></li>
                                <?php
$_smarty_tpl->tpl_vars['v'] = $foreachItemSav;
}
?>
                            </ul>
                        </li>
                        <?php }?>

                        <li class="sub-menu">
                            <a href="https://analytics.google.com/" target="_blank">
                                <i class="fa fa-bar-chart"></i><span>アクセス解析設定</span>
                            </a>
                        </li>
                        
                        <li class="sub-menu">
                            <a href="<?php echo @constant('AD_URL');?>
/contact/">
                                <i class="fa fa-comment-o"></i>
                                <span>修正依頼</span>
                            </a>
                        </li>                        
                        
                        <li class="sub-menu">
                            <a class="logout" href="<?php echo @constant('AD_URL');?>
/logout.php">
                                <i class="fa fa-unlock-alt"></i>
                                <span>ログアウト</span>
                            </a>
                        </li>
                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->

<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3><?php
$_smarty_tpl->properties['nocache_hash'] = '3514643106569b03359a6b5_45671922';
?>
新着情報登録</h3>

        <div class="row mt">
            <div class="col-lg-12">
                <?php
$_smarty_tpl->properties['nocache_hash'] = '3514643106569b03359a6b5_45671922';
?>

<div class="form-panel">
    <form class="form-horizontal style-form" action="finish.php?p=<?php echo $_smarty_tpl->tpl_vars['params']->value['p'];?>
" method="post" onsubmit="return formCheck(this)">
        <input type="hidden" name="<?php echo @constant('TOKEN_KEY');?>
" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
">
        <input type="hidden" name="id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
">

        <?php if (!empty($_smarty_tpl->tpl_vars['a_template']->value)) {?>
        <div class="form-group">
            <label class="col-sm-2 control-label">テンプレート番号</label>

            <div class="col-sm-10">
                <?php echo smarty_function_html_options(array('id'=>'template_id','name'=>'template_id','options'=>$_smarty_tpl->tpl_vars['a_template']->value,'class'=>'form-control','selected'=>(($tmp = @$_smarty_tpl->tpl_vars['data']->value['id'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['template_id']->value : $tmp)),$_smarty_tpl);?>

            </div>
        </div>
        <?php }?>

        <div class="form-group">
            <label class="col-sm-2 control-label">表示設定
            </label>
            <div class="col-sm-10">
                <?php echo smarty_function_html_radios(array('name'=>'show_flg','options'=>$_smarty_tpl->tpl_vars['form']->value['show'],'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['data']->value['show_flg'])===null||$tmp==='' ? @constant('SHOW_ON') : $tmp)),$_smarty_tpl);?>

            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">登録日 <span class="btn-danger btn-xs txt-sm">必須</span>
                <br/><span class="txt-sm">（2015-00-00 00:00形式）</span></label>

            <div class="col-sm-10">
                <input class="form-control" name="published" type="text"
                       value="<?php echo smarty_modifier_date_format((($tmp = @$_smarty_tpl->tpl_vars['data']->value['published'])===null||$tmp==='' ? time() : $tmp),'%Y-%m-%d %H:%M');?>
">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">タイトル <span class="btn-danger btn-xs txt-sm">必須</span>
                <br/><span class="txt-sm">（30文字）</span></label>

            <div class="col-sm-10">
                <input class="form-control" id="title" name="title" type="text" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">内容 <span class="btn-danger btn-xs txt-sm">必須</span></label>

            <div class="col-sm-10">
                <?php echo '<script'; ?>
 src="<?php echo @constant('AD_URL');?>
/js/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
                <?php echo '<script'; ?>
 src="<?php echo @constant('AD_URL');?>
/js/ckfinder/ckfinder.js"><?php echo '</script'; ?>
>
                <textarea id="editor1" name="detail">
                    <?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['detail'])===null||$tmp==='' ? '' : $tmp);?>

                </textarea>
                <?php echo '<script'; ?>
 type="text/javascript">
                    if (typeof CKEDITOR == 'undefined') {
                    } else {
                        var editor = CKEDITOR.replace('editor1');
                        CKFinder.setupCKEditor(editor, '<?php echo @constant('AD_URL');?>
/js/ckfinder/');
                        CKEDITOR.config.height = '1000px';
                    }
                <?php echo '</script'; ?>
>
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['id']!='') {?>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>

            <div class="col-sm-10">
                <label>
                    <input type="checkbox" name="del" value="1"> <span class="label label-danger">データを削除する</span>
                </label>
            </div>
        </div>
        <?php }?>
        <p class="mt text-center">
            <input type="submit" name="edit" class="btn btn-primary btn-smart" value="登録">
            <input type="button" name="back" class="btn btn-default btn-smart" value="戻る" onclick="history.back();">
        </p>
    </form>
</div>
<?php echo '<script'; ?>
 src="<?php echo @constant('AD_URL');?>
/js/check/topics.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(function(){
        $("#template_id").change(function() {
            var url = "?p=1&template_id="+$(this).val();
            $(location).attr('href',url);
        });
    });
<?php echo '</script'; ?>
>
<!-- /content-panel -->

            </div>
        </div>
    </section>
    <!--/wrapper -->
</section>
<!-- /MAIN CONTENT -->
<!--main content end-->

<!--footer start-->
<footer class="site-footer">
    <div class="text-center">
        &copy;
        <?php echo '<script'; ?>
 type="text/javascript">
            $y = 2011;
            $ny = new Date().getFullYear();
            document.write($ny > $y ? $y + '-' + $ny : $y);
        <?php echo '</script'; ?>
>
        <a href="http://pandaweb.jp/">Panda Web Concierge</a>
        <a href="#" class="go-top">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>
</footer>
<!--footer end-->
</section>

<!--common script for all pages-->
<?php echo '<script'; ?>
 src="<?php echo @constant('AD_URL');?>
/js/common-scripts.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
?>