<?php /* Smarty version 3.1.22-dev/9, created on 2023-12-26 18:02:35
         compiled from "/home/kir330489/public_html/papillon-nagoya.com/view/pc/contact/confirm.html" */ ?>
<?php
/*%%SmartyHeaderCode:926050958658a96ab815664_68980067%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd724a0bcecd808a899cb2e69a1a5b91d767c4ba3' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/pc/contact/confirm.html',
      1 => 1680160200,
      2 => 'file',
    ),
    '64d637c448d853e47cbf92a7231cad2bb0bc4597' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/pc/common/frame.html',
      1 => 1703557474,
      2 => 'file',
    ),
    'b87a2b237edb9192a7d43668079cce0712a98f23' => 
    array (
      0 => 'b87a2b237edb9192a7d43668079cce0712a98f23',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '926050958658a96ab815664_68980067',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'top_script_name' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/9',
  'unifunc' => 'content_658a96ab89f376_35237938',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_658a96ab89f376_35237938')) {
function content_658a96ab89f376_35237938 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '926050958658a96ab815664_68980067';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('VIEW_DIR'))."/pc/common/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</head>
<body>
    <?php echo $_smarty_tpl->getSubTemplate (((string)@constant('VIEW_DIR'))."/pc/common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <?php if ($_SERVER['SCRIPT_NAME']==$_smarty_tpl->tpl_vars['top_script_name']->value) {?>
    <section>
        <!-- 花びらひらひら -->
        <div class="hana"></div>
        <!-- //花びらひらひら -->

        <div id="mainvisual">
            <div class="bg_img">
                <!-- 波紋 -->
                
                <!-- //波紋 -->

                

                
                
                
            </div>
            <p class="logo_img">
                <!-- <img src="<?php echo @constant('IMAGES_URL');?>
/mainvisual_logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['page']->value['h1'];?>
"> -->
                <img src="<?php echo @constant('IMAGES_URL');?>
/mainvisual_newyear_logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['page']->value['h1'];?>
">
            </p>

            <!-- 電話番号・営業時間・受付時間 -->
            <div class="top_info">
                <ul class="info_box">
                    <li>
                        <a href="tel:<?php echo @constant('SHOP_TEL');?>
" class="link_act_01"><span>電話番号</span><?php echo @constant('SHOP_TEL');?>
</a>
                    </li>
                    <li><span>営業時間</span><?php echo @constant('SHOP_OPEN');?>
<br><span class="info_font">(木•金•土•祝前日は24時間営業)</span></li>
                    <li><span>受付時間</span><?php echo @constant('SHOP_RECEPTION');?>
<br><span class="info_font">(木•金•土•祝前日は24時間営業)</span></li>
                </ul>
            </div>
            <!-- //電話番号・営業時間・受付時間 -->

        </div><!-- //mainvisual終わり -->
    </section>
    <?php }?>

    <main>
    <?php
$_smarty_tpl->properties['nocache_hash'] = '926050958658a96ab815664_68980067';
?>

<section id="contents_contact">
	<!-- サブビジュアル -->
  <div class="subvisual">
      <p class="center">
        <img src="<?php echo @constant('IMAGES_URL');?>
/mainvisual_center.png" alt="波紋">
      </p>
      <p class="left">
        <img src="<?php echo @constant('IMAGES_URL');?>
/subvisual_left.png" alt="左バラ">
      </p>
      <p class="right">
        <img src="<?php echo @constant('IMAGES_URL');?>
/subvisual_right.png" alt="右バラ">
      </p>
    <h2 class="contents_title">
      <p class="main"><?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
</p>
      <p class="sub"><?php echo $_smarty_tpl->tpl_vars['html']->value['name_kana']['contact'];?>
</p>
    </h2>
  </div>
  <!-- //サブビジュアル -->

  <div id="contents" class="inner">
  	<form method="post" action="?mode=finish">
    <table class="table03">
        <tr>
            <th width="30%">お名前&nbsp;<span class="atten_01">※</span></th>
            <td>
            	<?php if ($_smarty_tpl->tpl_vars['error']->value['name']!='') {?><span class="atten_01"><?php echo $_smarty_tpl->tpl_vars['error']->value['name'];?>
</span><?php } else {
echo $_smarty_tpl->tpl_vars['posts']->value['name'];
}?>
            </td>
        </tr>
        <tr>
            <th width="20%">メールアドレス&nbsp;<span class="atten_01">※</span></th>
            <td>
            	<?php if ($_smarty_tpl->tpl_vars['error']->value['mail1']!='') {?><span class="atten_01"><?php echo $_smarty_tpl->tpl_vars['error']->value['mail1'];?>
</span><?php } else {
echo $_smarty_tpl->tpl_vars['posts']->value['mail1'];
}?>
            </td>
        </tr>
        <tr>
            <th width="20%">メールアドレス(確認)&nbsp;<span class="atten_01">※</span></th>
            <td>
            	<?php if ($_smarty_tpl->tpl_vars['error']->value['mail2']!='') {?><span class="atten_01"><?php echo $_smarty_tpl->tpl_vars['error']->value['mail2'];?>
</span><?php } else {
echo $_smarty_tpl->tpl_vars['posts']->value['mail2'];
}?>
            </td>
        </tr>
        <tr>
            <th width="20%">お問合せの種類&nbsp;<span class="atten_01">※</span></th>
            <td>
            	<?php if ($_smarty_tpl->tpl_vars['error']->value['item']!='') {?><span class="atten_01"><?php echo $_smarty_tpl->tpl_vars['error']->value['item'];?>
</span><?php } else {
echo $_smarty_tpl->tpl_vars['posts']->value['item'];
}?>
            </td>
        </tr>
        <tr>
            <th width="20%">お問合せ内容(500文字以内)</th>
            <td>
            	<?php if ($_smarty_tpl->tpl_vars['error']->value['detail']!='') {?><span class="atten_01"><?php echo $_smarty_tpl->tpl_vars['error']->value['detail'];?>
</span><?php } else {
echo nl2br($_smarty_tpl->tpl_vars['posts']->value['detail']);
}?>
            </td>
        </tr>
    </table>

    <input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['posts']->value['name'];?>
">
  	<input type="hidden" name="mail1" value="<?php echo $_smarty_tpl->tpl_vars['posts']->value['mail1'];?>
">
  	<input type="hidden" name="mail2" value="<?php echo $_smarty_tpl->tpl_vars['posts']->value['mail2'];?>
">
  	<input type="hidden" name="item" value="<?php echo $_smarty_tpl->tpl_vars['posts']->value['item'];?>
">
  	<input type="hidden" name="detail" value="<?php echo $_smarty_tpl->tpl_vars['posts']->value['detail'];?>
">
  	<input type="hidden" name="<?php echo @constant('TOKEN_KEY');?>
" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
">

  	<?php if ($_smarty_tpl->tpl_vars['error']->value=='') {?>
  	<input type="submit" name="send" value="送信" class="btn_form">
  	<?php }?>
  	<input type="button" value="戻る" onclick="history.back();" class="btn_reset">

  	</form>
  </div>
</section>


    </main>

    <?php echo $_smarty_tpl->getSubTemplate (((string)@constant('VIEW_DIR'))."/pc/common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <?php if ($_SERVER['SCRIPT_NAME']=="/index.php") {?>
    <!-- Twitter遅延読み込み -->
    <?php echo '<script'; ?>
>
        (function (window, document) {
            function main1() {
                // TwitterのJS読み込み
                var ad = document.createElement('script');
                ad.type = 'text/javascript';
                ad.async = true;
                ad.src = 'https://platform.twitter.com/widgets.js';
                var sc = document.getElementsByTagName('script')[0];
                sc.parentNode.insertBefore(ad, sc);
            }

            // 遅延読み込み
            var lazyLoad = false;
            // 新人セラピストのコンテンツをトリガーにする
            var TwitterTrigger = document.getElementById('section_new');

            function onLazyLoad() {
                if (lazyLoad === false && isElementInViewport(TwitterTrigger)) {
                // 複数呼び出し回避
                lazyLoad = true;
                window.removeEventListener('scroll', onLazyLoad);
                window.removeEventListener('mousemove', onLazyLoad);
                window.removeEventListener('mousedown', onLazyLoad);
                window.removeEventListener('touchstart', onLazyLoad);
                window.removeEventListener('keydown', onLazyLoad);
                main1(); // TwitterのJS読み込み
                }
            }

            function isElementInViewport(el) {
                var rect = el.getBoundingClientRect();
                return rect.top < window.innerHeight && rect.bottom >= 0;
            }

            window.addEventListener('scroll', onLazyLoad);
            window.addEventListener('mousemove', onLazyLoad);
            window.addEventListener('mousedown', onLazyLoad);
            window.addEventListener('touchstart', onLazyLoad);
            window.addEventListener('keydown', onLazyLoad);

            window.addEventListener('load', function () {
                // ドキュメント途中（更新時 or ページ内リンク）
                if (isElementInViewport(TwitterTrigger)) {
                onLazyLoad();
                }
            });

        })(window, document);
    <?php echo '</script'; ?>
>
    <?php }?>

</body>
</html>
<?php }
}
?>