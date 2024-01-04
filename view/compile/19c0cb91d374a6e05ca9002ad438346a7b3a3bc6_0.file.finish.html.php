<?php /* Smarty version 3.1.22-dev/9, created on 2023-11-16 14:44:24
         compiled from "/home/kir330489/public_html/papillon-nagoya.com/view/admin/staff/finish.html" */ ?>
<?php
/*%%SmartyHeaderCode:8360842446555ac3810a831_01119814%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19c0cb91d374a6e05ca9002ad438346a7b3a3bc6' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/admin/staff/finish.html',
      1 => 1680160205,
      2 => 'file',
    ),
    '7af2d331fd3612503193ae1b5d3f778febd8e015' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/admin/common/finish.html',
      1 => 1680160203,
      2 => 'file',
    ),
    '8f3d7ec36a5c5a878ec24cdf7b93bed163a7cb49' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/admin/common/frame.html',
      1 => 1680160203,
      2 => 'file',
    ),
    'f0219e226596c475b2eed1a020962c537efcc07b' => 
    array (
      0 => 'f0219e226596c475b2eed1a020962c537efcc07b',
      1 => 0,
      2 => 'string',
    ),
    '6b4d47d8353c1bf03aed10cac7a064a58a5f492f' => 
    array (
      0 => '6b4d47d8353c1bf03aed10cac7a064a58a5f492f',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '8360842446555ac3810a831_01119814',
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
  'unifunc' => 'content_6555ac38220fe0_42735787',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6555ac38220fe0_42735787')) {
function content_6555ac38220fe0_42735787 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '8360842446555ac3810a831_01119814';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow">
    <title>WEB管理システム -
        <?php
$_smarty_tpl->properties['nocache_hash'] = '8360842446555ac3810a831_01119814';
?>
処理完了画面

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
$_smarty_tpl->properties['nocache_hash'] = '8360842446555ac3810a831_01119814';
?>
処理完了画面
</h3>

        <div class="row mt">
            <div class="col-lg-12">
                <?php
$_smarty_tpl->properties['nocache_hash'] = '8360842446555ac3810a831_01119814';
?>

<div class="content-panel">
    <?php if ($_smarty_tpl->tpl_vars['csrf']->value==true) {?>
    <?php if ($_smarty_tpl->tpl_vars['result']->value) {?>
    <div class="alert alert-success">処理が正常に完了しました。</div>
    <?php } else { ?>
    <div class="alert alert-danger">データ処理中にエラーが発生した為、処理を停止しました。</div>
    <?php }?>
    <?php } else { ?>
    <div class="alert alert-danger">不正なアクセスがあった為、処理を停止しました。</div>
    <?php }?>
    
<div class="text-right"><a href="./?p=<?php echo $_smarty_tpl->tpl_vars['params']->value['p'];?>
" class="btn btn-default">一覧へ戻る</a>
    
</div>
</div>

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