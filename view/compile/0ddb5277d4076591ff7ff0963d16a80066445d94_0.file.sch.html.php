<?php /* Smarty version 3.1.22-dev/9, created on 2023-11-15 17:33:41
         compiled from "/home/kir330489/public_html/papillon-nagoya.com/view/admin/staff/sch.html" */ ?>
<?php
/*%%SmartyHeaderCode:7793009065548265c00af8_23085220%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ddb5277d4076591ff7ff0963d16a80066445d94' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/admin/staff/sch.html',
      1 => 1680160205,
      2 => 'file',
    ),
    '8f3d7ec36a5c5a878ec24cdf7b93bed163a7cb49' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/admin/common/frame.html',
      1 => 1680160203,
      2 => 'file',
    ),
    'edb29ee6e13c403864654386b3ec3bc4ec43520f' => 
    array (
      0 => 'edb29ee6e13c403864654386b3ec3bc4ec43520f',
      1 => 0,
      2 => 'string',
    ),
    '996817cc72e063d11e5c515a7a42a73a629b6c34' => 
    array (
      0 => '996817cc72e063d11e5c515a7a42a73a629b6c34',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '7793009065548265c00af8_23085220',
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
  'unifunc' => 'content_65548265d5f0e6_39128347',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65548265d5f0e6_39128347')) {
function content_65548265d5f0e6_39128347 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_day_of_week')) require_once '/home/kir330489/public_html/papillon-nagoya.com/vendor/smarty/smarty/libs/plugins/modifier.day_of_week.php';
if (!is_callable('smarty_function_html_options')) require_once '/home/kir330489/public_html/papillon-nagoya.com/vendor/smarty/smarty/libs/plugins/function.html_options.php';
if (!is_callable('smarty_function_html_checkboxes')) require_once '/home/kir330489/public_html/papillon-nagoya.com/vendor/smarty/smarty/libs/plugins/function.html_checkboxes.php';
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '7793009065548265c00af8_23085220';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow">
    <title>WEB管理システム -
        <?php
$_smarty_tpl->properties['nocache_hash'] = '7793009065548265c00af8_23085220';
echo @constant('STAFF_CALL');?>
スケジュール登録
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
$_smarty_tpl->properties['nocache_hash'] = '7793009065548265c00af8_23085220';
echo @constant('STAFF_CALL');?>
スケジュール登録</h3>

        <div class="row mt">
            <div class="col-lg-12">
                <?php
$_smarty_tpl->properties['nocache_hash'] = '7793009065548265c00af8_23085220';
?>

<div class="form-panel mb">
<?php if (count($_smarty_tpl->tpl_vars['data']->value)>0) {?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['id']!='') {?>
    <ul class="nav nav-tabs mb15">
        <li><a href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['params']->value['id'];?>
&p=<?php echo $_smarty_tpl->tpl_vars['params']->value['p'];?>
">基本情報</a></li>
        <li><a href="photo.php?id=<?php echo $_smarty_tpl->tpl_vars['params']->value['id'];?>
&p=<?php echo $_smarty_tpl->tpl_vars['params']->value['p'];?>
">画像</a></li>
        <li class="active"><a href="#">スケジュール</a></li>
    </ul>
    <?php }?>
    <form class="form-horizontal style-form" action="" method="post" onsubmit="return formCheck(this)">
        <input type="hidden" name="<?php echo @constant('TOKEN_KEY');?>
" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
">
        <ul class="pager">
            <?php if ($_smarty_tpl->tpl_vars['params']->value['w']<=1) {?>
            <li class="previous disabled"><a href="#">&larr; 前の週へ</a></li>
            <?php } else { ?>
            <li class="previous"><a href="?id=<?php echo $_smarty_tpl->tpl_vars['params']->value['id'];?>
&p=<?php echo $_smarty_tpl->tpl_vars['params']->value['p'];?>
&w=<?php echo $_smarty_tpl->tpl_vars['params']->value['w']-1;?>
">&larr; 前の週へ</a></li>
            <?php }?>
            <li class="next"><a href="?id=<?php echo $_smarty_tpl->tpl_vars['params']->value['id'];?>
&p=<?php echo $_smarty_tpl->tpl_vars['params']->value['p'];?>
&w=<?php echo $_smarty_tpl->tpl_vars['params']->value['w']+1;?>
">次の週へ &rarr;</a></li>
        </ul>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['id']=='') {?>
        <div class="text-center"><?php echo $_smarty_tpl->tpl_vars['pager']->value->outputTag();?>
</div>
        <?php }?>
        <section id="no-more-tables">
            <table class="table table-bordered table-condensed cf table-box">
            <thead class="cf">
            <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreachItemSav = $_smarty_tpl->tpl_vars['value'];
?>
            <tr id="anc_<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">
                <th class="text-center"><?php echo @constant('STAFF_CALL');?>
</th>
                <?php
$_from = $_smarty_tpl->tpl_vars['week']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreachItemSav = $_smarty_tpl->tpl_vars['v'];
?>
                    <th class="text-center <?php if (smarty_modifier_day_of_week($_smarty_tpl->tpl_vars['v']->value)=='土') {?>info<?php } elseif (smarty_modifier_day_of_week($_smarty_tpl->tpl_vars['v']->value)=='日') {?>danger<?php }?>">
                    <?php echo substr($_smarty_tpl->tpl_vars['v']->value,4,2);?>
月<?php echo substr($_smarty_tpl->tpl_vars['v']->value,6,2);?>
日(<?php echo smarty_modifier_day_of_week($_smarty_tpl->tpl_vars['v']->value);?>
)
                    </th>
                <?php
$_smarty_tpl->tpl_vars['v'] = $foreachItemSav;
}
?>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-title="<?php echo @constant('STAFF_CALL');?>
">
                        <a href="<?php echo @constant('ROOT_URL');?>
/profile.php?sid=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">
                            <p><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</p>
                            <?php if ($_smarty_tpl->tpl_vars['value']->value['photo']!='') {?>
                            <img src="<?php echo @constant('IMG_STAFF_URL');?>
/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['value']->value['photo'];?>
"
                                    width="<?php echo @constant('IMAGE_SIZE_MB_W');?>
"
                                    height="<?php echo @constant('IMAGE_SIZE_MB_H');?>
">
                            <?php } else { ?>
                            <img src="<?php echo @constant('ROOT_URL');?>
/images/no_image.jpg"
                                    width="<?php echo @constant('IMAGE_SIZE_MB_W');?>
"
                                    height="<?php echo @constant('IMAGE_SIZE_MB_H');?>
">
                            <?php }?>
                        </a>
                    </td>
                    <?php
$_from = $_smarty_tpl->tpl_vars['week']->value;
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
                    <td data-title="<?php echo substr($_smarty_tpl->tpl_vars['v']->value,4,2);?>
月<?php echo substr($_smarty_tpl->tpl_vars['v']->value,6,2);?>
日(<?php echo smarty_modifier_day_of_week($_smarty_tpl->tpl_vars['v']->value);?>
)" class="reserves">
                        <p><span class="txt-sm">出勤</span><br />
                        <?php echo smarty_function_html_options(array('name'=>"going_hour[".((string)$_smarty_tpl->tpl_vars['v']->value)."][".((string)$_smarty_tpl->tpl_vars['value']->value['id'])."]",'options'=>$_smarty_tpl->tpl_vars['form']->value['hour'],'selected'=>$_smarty_tpl->tpl_vars['value']->value['sch'][$_smarty_tpl->tpl_vars['k']->value]['going_hour']),$_smarty_tpl);?>
:
                        <?php echo smarty_function_html_options(array('name'=>"going_min[".((string)$_smarty_tpl->tpl_vars['v']->value)."][".((string)$_smarty_tpl->tpl_vars['value']->value['id'])."]",'options'=>$_smarty_tpl->tpl_vars['form']->value['min'],'selected'=>$_smarty_tpl->tpl_vars['value']->value['sch'][$_smarty_tpl->tpl_vars['k']->value]['going_min']),$_smarty_tpl);?>

                        </p>
                        <p><span class="txt-sm">退勤</span><br />
                        <?php echo smarty_function_html_options(array('name'=>"leave_hour[".((string)$_smarty_tpl->tpl_vars['v']->value)."][".((string)$_smarty_tpl->tpl_vars['value']->value['id'])."]",'options'=>$_smarty_tpl->tpl_vars['form']->value['hour'],'selected'=>$_smarty_tpl->tpl_vars['value']->value['sch'][$_smarty_tpl->tpl_vars['k']->value]['leave_hour']),$_smarty_tpl);?>
:
                        <?php echo smarty_function_html_options(array('name'=>"leave_min[".((string)$_smarty_tpl->tpl_vars['v']->value)."][".((string)$_smarty_tpl->tpl_vars['value']->value['id'])."]",'options'=>$_smarty_tpl->tpl_vars['form']->value['min'],'selected'=>$_smarty_tpl->tpl_vars['value']->value['sch'][$_smarty_tpl->tpl_vars['k']->value]['leave_min']),$_smarty_tpl);?>

                        </p>
                        <p class="sch-check">
                        <?php echo smarty_function_html_checkboxes(array('class'=>"allow_mode",'name'=>"allow_mode[".((string)$_smarty_tpl->tpl_vars['v']->value)."][".((string)$_smarty_tpl->tpl_vars['value']->value['id'])."]",'options'=>$_smarty_tpl->tpl_vars['form']->value['allow_mode'],'selected'=>$_smarty_tpl->tpl_vars['value']->value['sch'][$_smarty_tpl->tpl_vars['k']->value]['allow_mode']),$_smarty_tpl);?>

                        </p>
                        
                        <p>
                        <input type="text" name="free_text[<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
]" class="free_text form-control" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['sch'][$_smarty_tpl->tpl_vars['k']->value]['free_text'];?>
" maxlength="15"><br>
                        <span class="help-block txt-sm">（15文字）</span>
                        </p>
                    </td>
                    <?php
$_smarty_tpl->tpl_vars['v'] = $foreachItemSav;
}
?>
                </tr>
            <?php
$_smarty_tpl->tpl_vars['value'] = $foreachItemSav;
}
?>
            </tbody>
            </table>

        <?php if ($_smarty_tpl->tpl_vars['params']->value['id']=='') {?>
        <div class="text-center"><?php echo $_smarty_tpl->tpl_vars['pager']->value->outputTag();?>
</div>
        <?php }?>
        </section>
        <div class="sch-btn-box">
            <?php if ($_smarty_tpl->tpl_vars['params']->value['id']=='') {?>
            <!-- スタッフ選択ボタン -->
            <div class="sch-modal">
                <input id="sch-modal-trigger" type="checkbox" name="checkbox1">
                <label for="sch-modal-trigger"><i class="fa fa-user fa-fw" aria-hidden="true"></i><?php echo @constant('STAFF_CALL');?>
選択</label>
                <div class="sch-modal-overlay">
                    <div class="sch-modal-wrap">
                        <label for="sch-modal-trigger">&#x00D7;&nbsp;閉じる</label>
                        <p class="ch-modal-title"><?php echo @constant('STAFF_CALL');?>
選択</p>
                        <ul>
                            <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreachItemSav = $_smarty_tpl->tpl_vars['value'];
?>
                            <li><a href="#anc_<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a></li>
                            <?php
$_smarty_tpl->tpl_vars['value'] = $foreachItemSav;
}
?>
                        </ul>
                        <label for="sch-modal-trigger">&#x00D7;&nbsp;閉じる</label>
                    </div>
                </div>
            </div>
            <!-- / スタッフ選択ボタン -->
            <?php }?>
            <div class="staff-select mt text-center">
                <input type="submit" name="sch_edit" class="btn btn-primary btn-smart" value="登録">
                <input type="button" name="back" class="btn btn-default btn-smart" value="戻る" onclick="history.back();">
            </div>
        </div>
    </form>
<?php } else { ?>
<div class="alert alert-warning">データが登録されていません。</div>
<p class="mt text-center">
    <input type="button" name="back" class="btn btn-default btn-smart" value="戻る" onclick="history.back();">
</p>
<?php }?>
</div>
<?php echo '<script'; ?>
 src="<?php echo @constant('AD_URL');?>
/js/check/schedule.js"><?php echo '</script'; ?>
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