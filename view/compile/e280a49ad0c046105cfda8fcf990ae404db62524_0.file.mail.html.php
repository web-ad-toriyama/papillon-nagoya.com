<?php /* Smarty version 3.1.22-dev/9, created on 2023-11-15 22:31:22
         compiled from "/home/kir330489/public_html/papillon-nagoya.com/view/pc/enquete/mail.html" */ ?>
<?php
/*%%SmartyHeaderCode:18898989666554c82a993a38_68496422%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e280a49ad0c046105cfda8fcf990ae404db62524' => 
    array (
      0 => '/home/kir330489/public_html/papillon-nagoya.com/view/pc/enquete/mail.html',
      1 => 1680160202,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18898989666554c82a993a38_68496422',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'posts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/9',
  'unifunc' => 'content_6554c82a9c4314_54865102',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6554c82a9c4314_54865102')) {
function content_6554c82a9c4314_54865102 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '18898989666554c82a993a38_68496422';
echo $_smarty_tpl->tpl_vars['posts']->value['name'];?>
様から<?php echo $_smarty_tpl->tpl_vars['posts']->value['staff_name'];?>
のアンケートが投稿されました。<?php }
}
?>