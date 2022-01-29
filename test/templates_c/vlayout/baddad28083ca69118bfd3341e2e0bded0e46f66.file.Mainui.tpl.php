<?php /* Smarty version Smarty-3.1.7, created on 2019-11-22 03:10:31
         compiled from "/var/www/html/egar/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7009477365dd751a74d9707-34799326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'baddad28083ca69118bfd3341e2e0bded0e46f66' => 
    array (
      0 => '/var/www/html/egar/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl',
      1 => 1493828331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7009477365dd751a74d9707-34799326',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAILBOX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5dd751a74e38d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dd751a74e38d')) {function content_5dd751a74e38d($_smarty_tpl) {?>

<input type="hidden" name="refresh_timeout" id="refresh_timeout" value="<?php echo $_smarty_tpl->tpl_vars['MAILBOX']->value->refreshTimeOut();?>
"/><?php }} ?>