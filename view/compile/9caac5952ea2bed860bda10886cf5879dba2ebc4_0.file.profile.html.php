<?php /* Smarty version 3.1.22-dev/9, created on 2023-12-26 11:33:09
         compiled from "/home/kir330489/public_html/papillon-nagoya.com/view/pc/profile.html" */ ?>
<?php
/*%%SmartyHeaderCode:775159449658a3b659b33b9_05487008%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9caac5952ea2bed860bda10886cf5879dba2ebc4' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/pc/profile.html',
      1 => 1680166177,
      2 => 'file',
    ),
    '64d637c448d853e47cbf92a7231cad2bb0bc4597' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/pc/common/frame.html',
      1 => 1703557474,
      2 => 'file',
    ),
    'f5aa0ac2aeb43dc8b3dbdc4c3ad881f360e86f3a' => 
    array (
      0 => 'f5aa0ac2aeb43dc8b3dbdc4c3ad881f360e86f3a',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '775159449658a3b659b33b9_05487008',
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
  'unifunc' => 'content_658a3b65b3f395_21661198',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_658a3b65b3f395_21661198')) {
function content_658a3b65b3f395_21661198 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_day_of_week')) require_once '/home/kir330489/public_html/papillon-nagoya.com/vendor/smarty/smarty/libs/plugins/modifier.day_of_week.php';
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '775159449658a3b659b33b9_05487008';
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
$_smarty_tpl->properties['nocache_hash'] = '775159449658a3b659b33b9_05487008';
?>

<?php $_smarty_tpl->tpl_vars['w'] = new Smarty_Variable(@constant('IMAGE_SIZE_PC_W'), null, 0);?>
<?php $_smarty_tpl->tpl_vars['h'] = new Smarty_Variable(@constant('IMAGE_SIZE_PC_H'), null, 0);?>
<style>
ul.timeline-head,ul.timeline{display:table;table-layout:fixed;width:100%;color: #ffffff;font-size: 0.5em;}
ul.timeline-head li,ul.timeline li{display:table-cell;text-align:center}
ul.timeline-head li:first-child{border-left:none}
ul.timeline li{text-indent:-600px;overflow:hidden;border-top:1px solid #CCC}
ul.timeline li:first-child{border-left:none}
ul.timeline li.ui-selected{background:#0092ef}
</style>


<div class="shutter"><div class="spinner"></div><p class="text">Papillon</p></div>
<section id="contents_profile">
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
			<p class="sub"><?php echo $_smarty_tpl->tpl_vars['page']->value['h2'];?>
</p>
		</h2>
	</div>
	<!-- //サブビジュアル -->

	<div id="contents" class="inner">

		<!-- 左 -->
		<div class="profile_box_left">
			<?php $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable(IMAGE_DETAIL_COUNT-1, null, 0);?>
			<div class="img_box">
				<?php if ($_smarty_tpl->tpl_vars['staff']->value['photo'][$_smarty_tpl->tpl_vars['index']->value]!='') {?>
				<img src="<?php echo @constant('IMG_STAFF_URL');?>
/<?php echo $_smarty_tpl->tpl_vars['staff']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['staff']->value['photo'][$_smarty_tpl->tpl_vars['index']->value];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['staff']->value['name'];?>
"  name="photo" class="img_staff">
				<?php } else { ?>
				<img src="<?php echo @constant('IMAGES_URL');?>
/no_image.jpg" alt="ノーイメージ"  name="photo" class="img_staff">
				<?php }?>
				<!-- newアイコン -->
				<?php if ($_smarty_tpl->tpl_vars['staff']->value['new_flg']==@constant('SET_ON')) {?>
				<img src="<?php echo @constant('IMAGES_URL');?>
/icon_new.png" alt="new" class="icon_new">
				<?php }?>
				<!-- //newアイコン -->
				<!-- twitterアイコン -->
				<?php if ($_smarty_tpl->tpl_vars['staff']->value['url']!='') {?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['staff']->value['url'];?>
" target="_blank">
					<img src="<?php echo @constant('IMAGES_URL');?>
/icon_twitter.png" alt="twitter" class="icon_twitter">
				</a>
				<?php }?>
				<!-- //twitteアイコン -->
			</div>
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['photo'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['photo']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['name'] = 'photo';
$_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['start'] = (int) IMAGE_DETAIL_COUNT-1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['loop'] = is_array($_loop=IMAGE_COUNT) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['photo']['total']);
?>
			<?php $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable($_smarty_tpl->getVariable('smarty')->value['section']['photo']['index'], null, 0);?>
			<?php if ($_smarty_tpl->tpl_vars['staff']->value['photo'][$_smarty_tpl->tpl_vars['index']->value]!='') {?>
			<a href="javascript:" onmouseover="look('<?php echo @constant('IMG_STAFF_URL');?>
/<?php echo $_smarty_tpl->tpl_vars['staff']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['staff']->value['photo'][$_smarty_tpl->tpl_vars['index']->value];?>
');">
				<img src="<?php echo @constant('IMG_STAFF_URL');?>
/<?php echo $_smarty_tpl->tpl_vars['staff']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['staff']->value['photo'][$_smarty_tpl->tpl_vars['index']->value];?>
" width="60" height="90" alt="<?php echo $_smarty_tpl->tpl_vars['staff']->value['name'];
echo $_smarty_tpl->tpl_vars['index']->value+1;?>
" class="cast_thumb">
			</a>
			<?php } else { ?>
			<a href="javascript:" onmouseover="look('<?php echo @constant('IMAGES_URL');?>
/no_image.jpg');">
				<img src="<?php echo @constant('IMAGES_URL');?>
/no_image.jpg" width="60" height="90" alt="ノーイメージ" class="cast_thumb">
			</a>
			<?php }?>
			<?php endfor; endif; ?>

			<?php echo '<script'; ?>
 language="JavaScript" type="text/javascript">
				function look(image){
					document.photo.src=image;
				}
			<?php echo '</script'; ?>
>
			<div class="bnr_enquete">
				<a href="<?php echo @constant('ROOT_URL');?>
/enquete.php?sid=<?php echo $_smarty_tpl->tpl_vars['staff']->value['id'];?>
">
					<img src="<?php echo @constant('IMAGES_URL');?>
/bnr_link_enquete.jpg" alt="アンケートページへ">
				</a>
			</div>
		</div><!-- //profile_box_left終わり -->
		<!-- //左 -->

		<!-- 右 -->
		<div class="profile_box_right">
			<h3>PROFILE</h3>
			<div class="prof_table">
				<dl>
					<dt>name</dt>
					<dd>
						<?php echo $_smarty_tpl->tpl_vars['staff']->value['name'];?>
&nbsp;&nbsp;
						<!-- 出張アイコン -->
						<?php
$_from = $_smarty_tpl->tpl_vars['staff']->value['class'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['class'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['class']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['class']->value) {
$_smarty_tpl->tpl_vars['class']->_loop = true;
$foreachItemSav = $_smarty_tpl->tpl_vars['class'];
?>
						<?php if ($_smarty_tpl->tpl_vars['class']->value['image']!='') {?>
						<img src="<?php echo @constant('IMAGES_URL');?>
/<?php echo $_smarty_tpl->tpl_vars['class']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['class']->value['value'];?>
">
						<?php }?>
						<?php
$_smarty_tpl->tpl_vars['class'] = $foreachItemSav;
}
?>
						<!-- //出張アイコン -->
					</dd>
				</dl>

				<dl>
					<dt>size</dt>
					<dd><?php echo $_smarty_tpl->tpl_vars['staff']->value['t'];?>
cm</dd>
				</dl>

				<!-- セラピストコメント -->
				<?php if ($_smarty_tpl->tpl_vars['staff']->value['long_comment2']!='') {?>
				<dl>
					<dt><?php echo $_smarty_tpl->tpl_vars['staff']->value['name'];?>
さんからのコメント</dt>
					<dd><?php echo nl2br($_smarty_tpl->tpl_vars['staff']->value['long_comment2']);?>
</dd>
				</dl>
				<?php }?>
				<!-- //セラピストコメント -->

				<!-- 店舗コメント -->
				<?php if ($_smarty_tpl->tpl_vars['staff']->value['long_comment1']!='') {?>
				<dl>
					<dt>お店からのコメント</dt>
					<dd><?php echo nl2br($_smarty_tpl->tpl_vars['staff']->value['long_comment1']);?>
</dd>
				</dl>
				<?php }?>
				<!-- //店舗コメント -->
				
				<!-- お客さまからのコメント -->
				<?php if ($_smarty_tpl->tpl_vars['staff']->value['long_comment3']!='') {?>
				<dl>
					<dt>お客様からのコメント</dt>
					<dd><?php echo nl2br($_smarty_tpl->tpl_vars['staff']->value['long_comment3']);?>
</dd>
				</dl>
				<?php }?>
				<!-- //お客さまからのコメント -->

				<!-- ツイッター -->
				<?php if ($_smarty_tpl->tpl_vars['staff']->value['url']!='') {?>
				<dl>
					<dt>Twitter</dt>
					<dd> 
						<div class="twitter_border">
                        <a class="twitter-timeline" data-height="350" href="<?php echo $_smarty_tpl->tpl_vars['staff']->value['url'];?>
"></a>
                        <?php echo '<script'; ?>
 async src="//platform.twitter.com/widgets.js" charset="utf-8"><?php echo '</script'; ?>
>               
                    	</div>
                </dd>
				</dl>
				<?php }?>
				<!-- //ツイッター -->

			</div><!-- //prof_box終わり -->

			<?php if ($_smarty_tpl->tpl_vars['form']->value['item']['name'][1]!='') {?>
			<h3><?php echo $_smarty_tpl->tpl_vars['form']->value['item']['name'][1];?>
</h3>
			<table class="table_01 text_box">
				<?php
$_from = $_smarty_tpl->tpl_vars['staff']->value['item'][1];
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
				<tr>
					<th width="30%"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</th>
					<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['v']->value['value'])===null||$tmp==='' ? @constant('DEFAULT_PROFILE') : $tmp);?>
</td>
				</tr>
				<?php
$_smarty_tpl->tpl_vars['v'] = $foreachItemSav;
}
?>
			</table>

			<?php }?>

		</div><!-- //profile_box_right終わり -->
		<!-- //右 -->

	</div>
</section>

<!-- 出勤スケジュールテーブル -->
<section class="profile_box_schedule">
	<div id="contents" class="inner">
		<h3>SCHEDULE</h3>
		<div class="profile_sch_box">
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['schedule'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['name'] = 'schedule';
$_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['loop'] = is_array($_loop=7) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['schedule']['total']);
?>
			<?php $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable($_smarty_tpl->getVariable('smarty')->value['section']['schedule']['index'], null, 0);?>
			<div class="profile_sch_variable">
				<div class="profile_sch_date">
							<?php if (smarty_modifier_day_of_week($_smarty_tpl->tpl_vars['week']->value[$_smarty_tpl->tpl_vars['index']->value])=='土') {?>
							<span class="atten_03"><?php echo substr($_smarty_tpl->tpl_vars['week']->value[$_smarty_tpl->tpl_vars['index']->value],4,2);?>
月<?php echo substr($_smarty_tpl->tpl_vars['week']->value[$_smarty_tpl->tpl_vars['index']->value],6,2);?>
日(<?php echo smarty_modifier_day_of_week($_smarty_tpl->tpl_vars['week']->value[$_smarty_tpl->tpl_vars['index']->value]);?>
)</span>
							<?php } elseif (smarty_modifier_day_of_week($_smarty_tpl->tpl_vars['week']->value[$_smarty_tpl->tpl_vars['index']->value])=='日') {?>
							<span class="atten_04"><?php echo substr($_smarty_tpl->tpl_vars['week']->value[$_smarty_tpl->tpl_vars['index']->value],4,2);?>
月<?php echo substr($_smarty_tpl->tpl_vars['week']->value[$_smarty_tpl->tpl_vars['index']->value],6,2);?>
日(<?php echo smarty_modifier_day_of_week($_smarty_tpl->tpl_vars['week']->value[$_smarty_tpl->tpl_vars['index']->value]);?>
)</span>
							<?php } else { ?>
							<?php echo substr($_smarty_tpl->tpl_vars['week']->value[$_smarty_tpl->tpl_vars['index']->value],4,2);?>
月<?php echo substr($_smarty_tpl->tpl_vars['week']->value[$_smarty_tpl->tpl_vars['index']->value],6,2);?>
日(<?php echo smarty_modifier_day_of_week($_smarty_tpl->tpl_vars['week']->value[$_smarty_tpl->tpl_vars['index']->value]);?>
)
							<?php }?>
				</div>
				<div class="profile_sch_check">
					<?php echo $_smarty_tpl->tpl_vars['staff']->value['schedule'][$_smarty_tpl->tpl_vars['index']->value]['time'];?>

				</div>
			</div>
			<?php endfor; endif; ?>
		</div>
	</div>
</section>
<!-- 出勤スケジュールテーブル -->

<!-- 口コミ一覧 -->
<?php if ($_smarty_tpl->tpl_vars['enquete']->value) {?>
<section id="anchor_impressions" class="profile_box_impressions">
	<div id="contents" class="inner">
		<h3>IMPRESSIONS&nbsp;LIST</h3>
		<div class="profile_impre_box">
			<div class="impre_frame">
				<div class="impre_outer">
					<ul>
						<?php
$_from = $_smarty_tpl->tpl_vars['enquete']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreachItemSav = $_smarty_tpl->tpl_vars['v'];
?>
						<li>
							<div class="user_box_left">
								<div class="user">
									<p class="pict"><i class="fa fa-lg fa-fw fa-user"></i></p>
									
									<div class="impre_sp">
										<div class="evaluation">
											<p><span class="impre_lead">ご利用日</span><?php echo $_smarty_tpl->tpl_vars['v']->value['use_year'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['use_month'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['use_day'];?>
</p>
											<p><span class="impre_lead">総合満足度</span><span class="review_star"><?php echo $_smarty_tpl->tpl_vars['v']->value['total'];?>
</span></p>
										</div>
									</div>
								</div>
							</div>
							<div class="user_box_right">
								<div class="evaluation impre_pc">
									<p><span class="impre_lead">ご利用日</span><?php echo $_smarty_tpl->tpl_vars['v']->value['use_year'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['use_month'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['use_day'];?>
</p>
									<p><span class="impre_lead">総合満足度</span><span class="review_star"><?php echo $_smarty_tpl->tpl_vars['v']->value['total'];?>
</span></p>
								</div>
								<div class="use_message">
									<p><span class="impre_lead">ご意見ご要望、メッセージなど</span></p>
									<p><?php echo nl2br($_smarty_tpl->tpl_vars['v']->value['comment']);?>
</p>
								</div>
							</div>
						</li>
						<?php
$_smarty_tpl->tpl_vars['v'] = $foreachItemSav;
}
?>
					</ul>
					<div class="btn_impre_list">
						<?php if ($_smarty_tpl->tpl_vars['page_info']->value['prev']['url']!='') {?><a href="<?php echo $_smarty_tpl->tpl_vars['page_info']->value['prev']['url'];?>
#anchor_impressions" class="prev link_act_01"><span>戻る</span></a><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['page_info']->value['next']['url']!='') {?><a href="<?php echo $_smarty_tpl->tpl_vars['page_info']->value['next']['url'];?>
#anchor_impressions" class="next link_act_01"><span>進む</span></a><?php }?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php }?>
<!-- //口コミ一覧 -->


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