<?php /* Smarty version 3.1.22-dev/9, created on 2023-11-16 14:44:05
         compiled from "/home/kir330489/public_html/papillon-nagoya.com/view/admin/staff/edit.html" */ ?>
<?php
/*%%SmartyHeaderCode:14626335786555ac25a1de97_69422828%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dca017c206c6078402ab997987cfb1a4b9d6aca7' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/admin/staff/edit.html',
      1 => 1680160205,
      2 => 'file',
    ),
    '8f3d7ec36a5c5a878ec24cdf7b93bed163a7cb49' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/admin/common/frame.html',
      1 => 1680160203,
      2 => 'file',
    ),
    'e7e101cfd289a390c48cd989339bb8c1da70d97d' => 
    array (
      0 => 'e7e101cfd289a390c48cd989339bb8c1da70d97d',
      1 => 0,
      2 => 'string',
    ),
    'f7a394d8d25dff63d9ecf769b122c634b4b1eb78' => 
    array (
      0 => 'f7a394d8d25dff63d9ecf769b122c634b4b1eb78',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '14626335786555ac25a1de97_69422828',
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
  'unifunc' => 'content_6555ac25bdfce9_36863029',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6555ac25bdfce9_36863029')) {
function content_6555ac25bdfce9_36863029 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/kir330489/public_html/papillon-nagoya.com/vendor/smarty/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_html_radios')) require_once '/home/kir330489/public_html/papillon-nagoya.com/vendor/smarty/smarty/libs/plugins/function.html_radios.php';
if (!is_callable('smarty_function_html_checkboxes')) require_once '/home/kir330489/public_html/papillon-nagoya.com/vendor/smarty/smarty/libs/plugins/function.html_checkboxes.php';
if (!is_callable('smarty_function_html_options')) require_once '/home/kir330489/public_html/papillon-nagoya.com/vendor/smarty/smarty/libs/plugins/function.html_options.php';
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '14626335786555ac25a1de97_69422828';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow">
    <title>WEB管理システム -
        <?php
$_smarty_tpl->properties['nocache_hash'] = '14626335786555ac25a1de97_69422828';
echo @constant('STAFF_CALL');?>
登録
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
$_smarty_tpl->properties['nocache_hash'] = '14626335786555ac25a1de97_69422828';
echo @constant('STAFF_CALL');?>
登録</h3>

        <div class="row mt">
            <div class="col-lg-12">
                <?php
$_smarty_tpl->properties['nocache_hash'] = '14626335786555ac25a1de97_69422828';
?>

<?php echo '<script'; ?>
><!--
chmax=2;        //最大チェック数
//--------------------------
function check(chobj){
    if(!chobj.checked)return;
        chname1=chobj.id;
        chint=0;
        elementleng=document.forms[0].elements[chname1].length;
        for(i=0;i<elementleng;i++){
        if(document.forms[0].elements[chname1][i].checked){
        chint++;
        if(chint>chmax){chobj.checked=false;break;}
        }
    }
}
// -->
<?php echo '</script'; ?>
>
<div class="form-panel">
    <?php if ($_smarty_tpl->tpl_vars['params']->value['id']!='') {?>
    <ul class="nav nav-tabs mb15">
        <li class="active"><a href="#">基本情報</a></li>
        <li><a href="photo.php?id=<?php echo $_smarty_tpl->tpl_vars['params']->value['id'];?>
&p=<?php echo $_smarty_tpl->tpl_vars['params']->value['p'];?>
">画像</a></li>
        <li><a href="sch.php?id=<?php echo $_smarty_tpl->tpl_vars['params']->value['id'];?>
&w=1&p=<?php echo $_smarty_tpl->tpl_vars['params']->value['p'];?>
">スケジュール</a></li>
    </ul>
    <?php }?>
    <form class="form-horizontal style-form" action="finish.php?p=<?php echo $_smarty_tpl->tpl_vars['params']->value['p'];?>
" method="post" onsubmit="return formCheck(this)">
        <input type="hidden" name="<?php echo @constant('TOKEN_KEY');?>
" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
">
        <input type="hidden" name="id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['params']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
">

        <div class="form-group">
            <label class="col-sm-2 control-label">登録日 <span class="btn-danger btn-xs txt-sm">必須</span>
                <br/><span class="txt-sm">（2016-00-00 00:00形式）</span></label>

            <div class="col-sm-10">
                <input class="form-control form-sm" name="published" type="text"
                       value="<?php echo smarty_modifier_date_format((($tmp = @$_smarty_tpl->tpl_vars['data']->value['published'])===null||$tmp==='' ? time() : $tmp),'%Y-%m-%d %H:%M');?>
">
                        <?php if ($_smarty_tpl->tpl_vars['data']->value['updated']=='') {?>
                        <?php } else { ?>
                        <p class="edit-updated">
                            （&nbsp;<i class="fa fa-repeat fa-fw" aria-hidden="true"></i>
                            最終更新 <span class="txt-b"><?php echo $_smarty_tpl->tpl_vars['data']->value['updated'];?>
&nbsp;）</span>
                        </p>
                        <?php }?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">名前 <span class="btn-danger btn-xs txt-sm">必須</span>
                <br/><span class="txt-sm">（15文字）</span></label>

            <div class="col-sm-10">
                <input type="text" name="name" class="form-control form-sm" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">表示設定</label>

            <div class="col-sm-10">
                <?php echo smarty_function_html_radios(array('name'=>'show_flg','options'=>$_smarty_tpl->tpl_vars['form']->value['show'],'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['data']->value['show_flg'])===null||$tmp==='' ? @constant('SHOW_ON') : $tmp)),$_smarty_tpl);?>

            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">新人設定</label>

            <div class="col-sm-10">
                <?php echo smarty_function_html_radios(array('name'=>'new_flg','options'=>$_smarty_tpl->tpl_vars['form']->value['set'],'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['data']->value['new_flg'])===null||$tmp==='' ? @constant('SET_ON') : $tmp)),$_smarty_tpl);?>

            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">カバーガール設定</label>

            <div class="col-sm-10">
                <?php echo smarty_function_html_radios(array('name'=>'cover_flg','options'=>$_smarty_tpl->tpl_vars['form']->value['set'],'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['data']->value['cover_flg'])===null||$tmp==='' ? @constant('SET_ON') : $tmp)),$_smarty_tpl);?>

            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">常時お休み設定</label>

            <div class="col-sm-10">
                <?php echo smarty_function_html_radios(array('name'=>'rest_flg','options'=>$_smarty_tpl->tpl_vars['form']->value['set'],'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['data']->value['rest_flg'])===null||$tmp==='' ? @constant('SET_OFF') : $tmp)),$_smarty_tpl);?>

            </div>
        </div>
        <?php if (count($_smarty_tpl->tpl_vars['form']->value['class']['name'])>0) {?>
        <?php
$_from = $_smarty_tpl->tpl_vars['form']->value['class']['name'];
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
        <div class="form-group">
            <label class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</label>

            <div class="col-sm-10">
                <?php echo smarty_function_html_radios(array('name'=>"class_flg".((string)$_smarty_tpl->tpl_vars['k']->value),'options'=>$_smarty_tpl->tpl_vars['form']->value['class']['value'][$_smarty_tpl->tpl_vars['k']->value],'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['data']->value['class_flg'][$_smarty_tpl->tpl_vars['k']->value])===null||$tmp==='' ? 0 : $tmp)),$_smarty_tpl);?>

            </div>
        </div>
        <?php
$_smarty_tpl->tpl_vars['v'] = $foreachItemSav;
}
?>
        <?php }?>

        <?php if (count($_smarty_tpl->tpl_vars['form']->value['check']['name'])>0) {?>
        <div class="form-group">
            <label class="col-sm-2 control-label">状態 </label>

            <div class="col-sm-10">
                <?php echo smarty_function_html_checkboxes(array('name'=>"check_flg",'id'=>"chkobj",'onclick'=>"check(this)",'options'=>$_smarty_tpl->tpl_vars['form']->value['check']['name'],'selected'=>$_smarty_tpl->tpl_vars['data']->value['check_flg']),$_smarty_tpl);?>

            </div>
        </div>
        <?php }?>

        <div class="form-group">
            <label class="col-sm-2 control-label">年齢
                <br/><span class="txt-sm">（数値のみ）</span></label>

            <div class="col-sm-10">
                <table width="20%">
                    <tr>
                        <td><input type="text" name="age" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['age'])===null||$tmp==='' ? '' : $tmp);?>
">
                        </td>
                        <td>歳</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">サイズ
                <br/><span class="txt-sm">（数値のみ）</span></label>

            <div class="staff-size col-sm-10">
                <table>
                    <tr>
                        <td>
                            <i class="fa fa-caret-down fa-lg" aria-hidden="true"></i>
                            T<span class="txt-sm">（身長）</span>
                            <input type="text" name="t" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['t'])===null||$tmp==='' ? '' : $tmp);?>
">
                        </td>
                    </tr>

                    
                    
                </table>
            </div>
        </div>

        <?php if (count($_smarty_tpl->tpl_vars['form']->value['item']['name'])>0) {?>
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
        <div class="form-group">
            <label class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</label>
            <div class="col-sm-10">
                <table class="table table-bordered table-condensed">
                    <?php
$_from = $_smarty_tpl->tpl_vars['data']->value['item'][$_smarty_tpl->tpl_vars['k']->value];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['val']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
$foreachItemSav = $_smarty_tpl->tpl_vars['val'];
?>
                    <tr>
                        <td class="col-sm-2"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</td>
                        <td class="col-sm-8">
                            <?php if ($_smarty_tpl->tpl_vars['form']->value['item']['type'][$_smarty_tpl->tpl_vars['k']->value]==='text') {?>
                            <input type="text" name="item_flg[<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
]" class="form-control"
                                   value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['staff_item'][$_smarty_tpl->tpl_vars['val']->value['id']])===null||$tmp==='' ? '' : $tmp);?>
">
                            <?php } else { ?>
                            <?php echo smarty_function_html_options(array('name'=>"item_flg[".((string)$_smarty_tpl->tpl_vars['val']->value['id'])."]",'options'=>$_smarty_tpl->tpl_vars['form']->value['item']['value'][$_smarty_tpl->tpl_vars['k']->value],'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['data']->value['staff_item'][$_smarty_tpl->tpl_vars['val']->value['id']])===null||$tmp==='' ? 0 : $tmp)),$_smarty_tpl);?>

                            <?php }?>
                        </td>
                    </tr>
                    <?php
$_smarty_tpl->tpl_vars['val'] = $foreachItemSav;
}
if (!$_smarty_tpl->tpl_vars['val']->_loop) {
?>
                    <tr>
                        <td class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
データが登録されていません。</td>
                    </tr>
                    <?php
}
?>
                </table>
            </div>
        </div>
        <?php
$_smarty_tpl->tpl_vars['v'] = $foreachItemSav;
}
?>
        <?php }?>


        

        

        

        <div class="form-group">
            <label class="col-sm-2 control-label">Twitter<br/><span class="txt-sm">（URL形式のみ）</span></label>

            <div class="col-sm-10">
                <input type="text" name="url" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['url'])===null||$tmp==='' ? '' : $tmp);?>
">
            </div>
        </div>



        <div class="form-group">
            <label class="col-sm-2 control-label">お店からのコメント
                <br/><span class="txt-sm">（1000文字）</span></label>

            <div class="col-sm-10">
                <textarea class="form-control" style="height:300px" name="long_comment1"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['long_comment1'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label"><?php if ($_smarty_tpl->tpl_vars['data']->value['name']!='') {
echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
さん<?php } else { ?>セラピスト<?php }?>からのコメント
                <br/><span class="txt-sm">（1000文字）</span></label>

            <div class="col-sm-10">
                <textarea class="form-control" style="height:300px" name="long_comment2"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['long_comment2'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">お客様からのコメント
                <br/><span class="txt-sm">（1000文字）</span></label>

            <div class="col-sm-10">
                <textarea class="form-control" style="height:300px" name="long_comment3"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['long_comment3'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-2 control-label">出勤時間</label>

            <div class="col-sm-10">
                <section id="no-more-tables">
                    <table class="table table-bordered table-condensed cf table-box">
                        <thead class="cf">
                            <tr>
                                <?php
$_from = $_smarty_tpl->tpl_vars['day_of_week']->value;
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
                                <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
曜日</th>
                                <?php
$_smarty_tpl->tpl_vars['v'] = $foreachItemSav;
}
?>
                            </tr>
                        </thead>
                        <tbody>
                        <tr style="font-size: 90%">
                            <?php
$_from = $_smarty_tpl->tpl_vars['day_of_week']->value;
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
                            <td data-title="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
曜日">
                                <p>出勤<br />
                                <?php echo smarty_function_html_options(array('name'=>"going_hour[".((string)$_smarty_tpl->tpl_vars['k']->value)."]",'options'=>$_smarty_tpl->tpl_vars['form']->value['hour'],'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['data']->value['sch'][$_smarty_tpl->tpl_vars['k']->value]['going_hour'])===null||$tmp==='' ? '' : $tmp)),$_smarty_tpl);?>
:
                                <?php echo smarty_function_html_options(array('name'=>"going_min[".((string)$_smarty_tpl->tpl_vars['k']->value)."]",'options'=>$_smarty_tpl->tpl_vars['form']->value['min'],'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['data']->value['sch'][$_smarty_tpl->tpl_vars['k']->value]['going_min'])===null||$tmp==='' ? '' : $tmp)),$_smarty_tpl);?>

                                </p>
                                <p>
                                退勤<br />
                                <?php echo smarty_function_html_options(array('name'=>"leave_hour[".((string)$_smarty_tpl->tpl_vars['k']->value)."]",'options'=>$_smarty_tpl->tpl_vars['form']->value['hour'],'selected'=>$_smarty_tpl->tpl_vars['data']->value['sch'][$_smarty_tpl->tpl_vars['k']->value]['leave_hour']),$_smarty_tpl);?>
:
                                <?php echo smarty_function_html_options(array('name'=>"leave_min[".((string)$_smarty_tpl->tpl_vars['k']->value)."]",'options'=>$_smarty_tpl->tpl_vars['form']->value['min'],'selected'=>$_smarty_tpl->tpl_vars['data']->value['sch'][$_smarty_tpl->tpl_vars['k']->value]['leave_min']),$_smarty_tpl);?>

                                </p>
                                <p class="sch-check">
                                <?php echo smarty_function_html_checkboxes(array('class'=>"allow_mode",'name'=>"allow_mode[".((string)$_smarty_tpl->tpl_vars['k']->value)."]",'options'=>$_smarty_tpl->tpl_vars['form']->value['allow_mode'],'selected'=>$_smarty_tpl->tpl_vars['data']->value['sch'][$_smarty_tpl->tpl_vars['k']->value]['allow_mode']),$_smarty_tpl);?>

                                </p>

                            </td>
                            <?php
$_smarty_tpl->tpl_vars['v'] = $foreachItemSav;
}
?>
                        </tr>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['params']->value['id']!='') {?>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>

            <div class="col-sm-10">
                <label><input type="checkbox" name="del" value="1"> <span
                        class="label label-danger">データを削除する</span></label>
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
/js/check/staff_basic.js"><?php echo '</script'; ?>
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