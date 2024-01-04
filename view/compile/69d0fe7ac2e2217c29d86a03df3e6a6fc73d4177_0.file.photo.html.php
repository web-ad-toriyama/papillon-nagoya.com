<?php /* Smarty version 3.1.22-dev/9, created on 2023-11-20 22:21:26
         compiled from "/home/kir330489/public_html/papillon-nagoya.com/view/admin/staff/photo.html" */ ?>
<?php
/*%%SmartyHeaderCode:1534102485655b5d5681b7b0_50310462%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69d0fe7ac2e2217c29d86a03df3e6a6fc73d4177' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/admin/staff/photo.html',
      1 => 1680160205,
      2 => 'file',
    ),
    '8f3d7ec36a5c5a878ec24cdf7b93bed163a7cb49' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/admin/common/frame.html',
      1 => 1680160203,
      2 => 'file',
    ),
    '254b24dc3aa3d332010db1eadc95ccec79d50cfe' => 
    array (
      0 => '254b24dc3aa3d332010db1eadc95ccec79d50cfe',
      1 => 0,
      2 => 'string',
    ),
    '7f027b86ca4ff1bc9b0be92d0e95cac7d243e320' => 
    array (
      0 => '7f027b86ca4ff1bc9b0be92d0e95cac7d243e320',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1534102485655b5d5681b7b0_50310462',
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
  'unifunc' => 'content_655b5d56a53d72_62358273',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_655b5d56a53d72_62358273')) {
function content_655b5d56a53d72_62358273 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1534102485655b5d5681b7b0_50310462';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow">
    <title>WEB管理システム -
        <?php
$_smarty_tpl->properties['nocache_hash'] = '1534102485655b5d5681b7b0_50310462';
echo @constant('STAFF_CALL');?>
画像登録
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
$_smarty_tpl->properties['nocache_hash'] = '1534102485655b5d5681b7b0_50310462';
echo @constant('STAFF_CALL');?>
画像登録</h3>

        <div class="row mt">
            <div class="col-lg-12">
                <?php
$_smarty_tpl->properties['nocache_hash'] = '1534102485655b5d5681b7b0_50310462';
?>

<div class="form-panel">
    <?php if ($_smarty_tpl->tpl_vars['params']->value['id']!='') {?>
    <ul class="nav nav-tabs mb15">
        <li><a href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['params']->value['id'];?>
&p=<?php echo $_smarty_tpl->tpl_vars['params']->value['p'];?>
">基本情報</a></li>
        <li class="active"><a href="#">画像</a></li>
        <li><a href="sch.php?id=<?php echo $_smarty_tpl->tpl_vars['params']->value['id'];?>
&w=1&p=<?php echo $_smarty_tpl->tpl_vars['params']->value['p'];?>
">スケジュール</a></li>
    </ul>
    <p class="vis_bar">名前：<?php echo $_smarty_tpl->tpl_vars['staff_name']->value;?>
</p>
    <?php }?>
    <form name="frm" class="form-horizontal style-form" action="finish.php?p=<?php echo $_smarty_tpl->tpl_vars['params']->value['p'];?>
" method="post" onsubmit="return alertConfirm('edit')">
        <input type="hidden" name="<?php echo @constant('TOKEN_KEY');?>
" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
">
        <input type="hidden" name="id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['params']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
">
        <input type="hidden" id="seq" name="seq" value="">
        <h4>画像</h4>
        <div id="sort_photo" class="row" style="margin: 0 2px;">
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['thumb'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['name'] = 'thumb';
$_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['start'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['loop'] = is_array($_loop=@constant('IMAGE_COUNT')+1) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['thumb']['total']);
?>
            <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable($_smarty_tpl->getVariable('smarty')->value['section']['thumb']['index'], null, 0);?>
            <div id="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" class="thumbnail pull-left text-center mr20">
                <p id="photo_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
_div">
                <?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['index']->value-1]['file_name']!='') {?>
                    <img src="<?php echo @constant('IMG_STAFF_URL');?>
/<?php echo $_smarty_tpl->tpl_vars['params']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['index']->value-1]['file_name'];?>
">
                <?php } else { ?>
                    <img src="<?php echo @constant('ROOT_URL');?>
/images/no_image.jpg">
                <?php }?>
                </p>
                <p>
                    <input type="button" class="btn btn-primary" onclick="return uploadFile(this.name,<?php echo $_smarty_tpl->tpl_vars['params']->value['id'];?>
);" name="photo_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" value="アップロード">
                    <input type="hidden" value="" id="photo_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
_f_name" name="photo<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">
                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['index']->value-1]['file_name'];?>
" name="photo<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
_old">
                </p>
                <p>
                    <label><input type="checkbox" name="photo_del<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><span class="label label-danger">ファイル削除</span></label>
                </p>
            </div>
            <?php endfor; endif; ?>
        </div>

        

        <p class="mt text-center">
            <input type="submit" name="img_edit" class="btn btn-primary btn-smart" value="登録">
            <input type="button" name="back" class="btn btn-default btn-smart" value="戻る" onclick="history.back();">
        </p>
    </form>
</div>
<!-- /content-panel -->
<?php echo '<script'; ?>
 src="<?php echo @constant('ROOT_URL');?>
/js/jwplayer/jwplayer.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>

    <?php if ($_smarty_tpl->tpl_vars['data']->value['movie']['movie_file_name']!='') {?>
    movie_write("<?php echo $_smarty_tpl->tpl_vars['data']->value['movie']['movie_file_name'];?>
");
    <?php }?>

    function movie_write(file_name){
        var fname = document.getElementById('movie_f_name').value;
        var fname_old = document.getElementById('movie_old').value;
        if (file_name != '') {
            var movie_file = "<?php echo @constant('IMG_STAFF_URL');?>
/<?php echo $_smarty_tpl->tpl_vars['params']->value['id'];?>
/"+file_name;
        } else {
            if (fname != '') {
                var movie_file = "<?php echo @constant('IMG_TEMP_URL');?>
/"+fname;
            } else {
                if (fname_old != '') {
                    var movie_file = "<?php echo @constant('IMG_STAFF_URL');?>
/<?php echo $_smarty_tpl->tpl_vars['params']->value['id'];?>
/"+fname_old;
                }
            }
        }
        if (movie_file != '') {
            document.getElementById('movie_div').innerHTML = '<video preload="none" width="250" height="140" onclick=”this.play();” autoplay="" muted="" controls><source src="' + movie_file + '"></video>';
            // jwplayer("movie_div").setup({
            //     flashplayer: "<?php echo @constant('ROOT_URL');?>
/js/jwplayer/player.swf",
            //     file: movie_file,
            //     width: "<?php echo @constant('IMAGE_MOVIE_SIZE_W');?>
",
            //     height: "<?php echo @constant('IMAGE_MOVIE_SIZE_H');?>
",
            //     controls: true,
            //     mute: true,
            //     autostart: true
            // });
        }
    }
    var ua = navigator.userAgent.toLowerCase(), isAndroid = (ua.indexOf('android') > -1) && (ua.indexOf('mobile') > -1), isAndroidTablet = (ua.indexOf('android') > -1) && (ua.indexOf('mobile') == -1);
     
    if(isAndroid || isAndroidTablet) {
        document.getElementById('att_txt_ad').innerHTML = 'Androidでは正常に動画再生されない場合がございますのでパソコンからご確認下さい。';
    }

<?php echo '</script'; ?>
>

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