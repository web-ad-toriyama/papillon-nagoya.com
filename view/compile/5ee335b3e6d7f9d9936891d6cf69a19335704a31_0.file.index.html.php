<?php /* Smarty version 3.1.22-dev/9, created on 2023-11-15 17:33:41
         compiled from "/home/kir330489/public_html/papillon-nagoya.com/view/admin/staff/index.html" */ ?>
<?php
/*%%SmartyHeaderCode:1507729306655482651ad901_15261122%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ee335b3e6d7f9d9936891d6cf69a19335704a31' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/admin/staff/index.html',
      1 => 1680160205,
      2 => 'file',
    ),
    '8f3d7ec36a5c5a878ec24cdf7b93bed163a7cb49' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/admin/common/frame.html',
      1 => 1680160203,
      2 => 'file',
    ),
    '1690a04c4df3a43692824b8c6aedd1f6154c7c4b' => 
    array (
      0 => '1690a04c4df3a43692824b8c6aedd1f6154c7c4b',
      1 => 0,
      2 => 'string',
    ),
    '83cbc78275669a7d693a078c4b18c1d5b6f98175' => 
    array (
      0 => '83cbc78275669a7d693a078c4b18c1d5b6f98175',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1507729306655482651ad901_15261122',
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
  'unifunc' => 'content_655482652dde20_03171854',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_655482652dde20_03171854')) {
function content_655482652dde20_03171854 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1507729306655482651ad901_15261122';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow">
    <title>WEB管理システム -
        <?php
$_smarty_tpl->properties['nocache_hash'] = '1507729306655482651ad901_15261122';
echo @constant('STAFF_CALL');?>
一覧
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
$_smarty_tpl->properties['nocache_hash'] = '1507729306655482651ad901_15261122';
echo @constant('STAFF_CALL');?>
一覧</h3>

        <div class="row mt">
            <div class="col-lg-12">
                <?php
$_smarty_tpl->properties['nocache_hash'] = '1507729306655482651ad901_15261122';
?>

<div class="content-panel">
    <div class="col-lg-12">
        <form action="" method="get" class="form-inline">
            <p class="col-lg-9">
                <button class="btn btn-info" type="button" onclick="location.href='new.php?p=1'">新規登録</button>
                <button class="btn btn-info" type="button" onclick="location.href='sort.php?p=1'">並べ替え</button>
            </p>
            <p class="col-lg-3 text-right">
                <input type="text" name="search_name" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['search_name'];?>
" placeholder="<?php echo @constant('STAFF_CALL');?>
検索" class="form-control form-search">
                <input type="submit" name="staff_search" class="btn btn-info" value="検索" />
                <input type="hidden" name="p" value="1" />
            </p>
        </form>
    </div>
    <?php if (count($_smarty_tpl->tpl_vars['data']->value)>0) {?>
    <div class="text-center"><?php echo $_smarty_tpl->tpl_vars['pager']->value->outputTag();?>
</div>
    <section id="no-more-tables">
        <table class="table table-bordered table-condensed cf">
            <tbody>
            <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreachItemSav = $_smarty_tpl->tpl_vars['v'];
?>
            <tr id="anc_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" 
            <?php if ($_smarty_tpl->tpl_vars['v']->value['show_flg']==@constant('SHOW_OFF')) {?>class="danger"<?php }?>>
            <td>
                <?php if ($_smarty_tpl->tpl_vars['v']->value['new_flg']==@constant('SET_ON')) {?>
                <label class="label label-success">新人</label>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['v']->value['cover_flg']==@constant('SET_ON')) {?>
                <label class="label label-success">カバーガール</label>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['v']->value['rest_flg']==@constant('SET_ON')) {?>
                <label class="label label-success">常時お休み</label>
                <?php }?>
                <br>
                <?php
$_from = $_smarty_tpl->tpl_vars['v']->value['class'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['class'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['class']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['class']->value) {
$_smarty_tpl->tpl_vars['class']->_loop = true;
$foreachItemSav = $_smarty_tpl->tpl_vars['class'];
?>
                    <?php if ($_smarty_tpl->tpl_vars['class']->value['value']!='未設定') {?>
                    <label class="label label-warning"><?php echo $_smarty_tpl->tpl_vars['class']->value['value'];?>
</label>
                    <?php }?>
                <?php
$_smarty_tpl->tpl_vars['class'] = $foreachItemSav;
}
?>
                <?php
$_from = $_smarty_tpl->tpl_vars['v']->value['check'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['check'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['check']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['check']->value) {
$_smarty_tpl->tpl_vars['check']->_loop = true;
$foreachItemSav = $_smarty_tpl->tpl_vars['check'];
?>
                    <label class="label label-warning"><?php echo $_smarty_tpl->tpl_vars['check']->value['name'];?>
</label>
                <?php
$_smarty_tpl->tpl_vars['check'] = $foreachItemSav;
}
?>
            </td>
            <td>
                <p>名前：<span class="txt-lg"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</span></p>
                <?php if ($_smarty_tpl->tpl_vars['v']->value['age']!=='') {?>
                <p>年齢：<?php echo $_smarty_tpl->tpl_vars['v']->value['age'];?>
</p>
                <?php }?>
                <p>
                    <!-- 身長 --><?php if ($_smarty_tpl->tpl_vars['v']->value['t']!=='') {?>T.<?php echo $_smarty_tpl->tpl_vars['v']->value['t'];?>
&nbsp;<?php }?>
                    <!-- バスト --><?php if ($_smarty_tpl->tpl_vars['v']->value['b']!=='') {?>B.<?php echo $_smarty_tpl->tpl_vars['v']->value['b'];
}?>
                    <!-- カップ --><?php if ($_smarty_tpl->tpl_vars['v']->value['c']!=='') {?>(<?php echo $_smarty_tpl->tpl_vars['v']->value['c'];?>
)<?php }?>&nbsp;
                    <!-- ウエスト --><?php if ($_smarty_tpl->tpl_vars['v']->value['w']!=='') {?>W.<?php echo $_smarty_tpl->tpl_vars['v']->value['w'];?>
&nbsp;<?php }?>
                    <!-- ヒップ --><?php if ($_smarty_tpl->tpl_vars['v']->value['h']!=='') {?>H.<?php echo $_smarty_tpl->tpl_vars['v']->value['h'];
}?>
                </p>
            </td>
            <td>
                <a href="<?php echo @constant('ROOT_URL');?>
/profile.php?sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
                    <p class="text-center">
                    <?php if ($_smarty_tpl->tpl_vars['v']->value['photo']!='') {?>
                    <img class="mt" src="<?php echo @constant('IMG_STAFF_URL');?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['photo'];?>
"
                            width="<?php echo @constant('IMAGE_SIZE_MB_W');?>
"
                            height="<?php echo @constant('IMAGE_SIZE_MB_H');?>
">
                    <?php } else { ?>
                    <img src="<?php echo @constant('IMAGES_URL');?>
/no_image.jpg"
                            width="<?php echo @constant('IMAGE_SIZE_MB_W');?>
"
                            height="<?php echo @constant('IMAGE_SIZE_MB_H');?>
">
                    <?php }?>
                    </p>
                </a>
            </td>
            <td>
                <button class="btn btn-primary btn-sm" onclick="location.href='edit.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&p=<?php echo $_smarty_tpl->tpl_vars['params']->value['p'];?>
'">
                    <i class="fa fa-pencil fa-lg"></i>
                </button>
                <button class="btn btn-primary btn-sm" onclick="location.href='photo.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&p=<?php echo $_smarty_tpl->tpl_vars['params']->value['p'];?>
'">
                    <i class="fa fa-camera fa-lg"></i>
                </button>
                <button class="btn btn-primary btn-sm" onclick="location.href='sch.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&p=<?php echo $_smarty_tpl->tpl_vars['params']->value['p'];?>
'">
                    <i class="fa fa-calendar fa-lg"></i>
                </button>
                <button class="btn btn-danger btn-sm"
                        onclick="delCheck('del.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&p=<?php echo $_smarty_tpl->tpl_vars['params']->value['p'];?>
')">
                    <i class="fa fa-trash-o fa-lg"></i>
                </button>
            </td>
            </tr>
            <?php
$_smarty_tpl->tpl_vars['v'] = $foreachItemSav;
}
?>
            </tbody>
        </table>
        <div class="text-center"><?php echo $_smarty_tpl->tpl_vars['pager']->value->outputTag();?>
</div>
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
        </div>
    </section>
    <?php } else { ?>
    <div class="alert alert-warning">データが登録されていません。</div>
    <?php }?>
</div>
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