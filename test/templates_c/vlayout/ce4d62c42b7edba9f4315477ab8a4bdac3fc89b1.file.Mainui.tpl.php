<?php /* Smarty version Smarty-3.1.7, created on 2017-05-06 10:26:42
         compiled from "/var/www/html/cairobrokers/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1050559739590da4e220c162-82502889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce4d62c42b7edba9f4315477ab8a4bdac3fc89b1' => 
    array (
      0 => '/var/www/html/cairobrokers/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl',
      1 => 1493828331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1050559739590da4e220c162-82502889',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAILBOX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_590da4e22187a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590da4e22187a')) {function content_590da4e22187a($_smarty_tpl) {?>

<input type="hidden" name="refresh_timeout" id="refresh_timeout" value="<?php echo $_smarty_tpl->tpl_vars['MAILBOX']->value->refreshTimeOut();?>
"/><?php }} ?>