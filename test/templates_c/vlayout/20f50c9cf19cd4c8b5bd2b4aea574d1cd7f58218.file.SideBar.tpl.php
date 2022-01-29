<?php /* Smarty version Smarty-3.1.7, created on 2022-01-29 19:02:11
         compiled from "/var/www/html/demo/includes/runtime/../../layouts/vlayout/modules/Vtiger/SideBar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126975808061f563c7acb555-43220738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20f50c9cf19cd4c8b5bd2b4aea574d1cd7f58218' => 
    array (
      0 => '/var/www/html/demo/includes/runtime/../../layouts/vlayout/modules/Vtiger/SideBar.tpl',
      1 => 1643478352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126975808061f563c7acb555-43220738',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_61f563c7acf69',
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61f563c7acf69')) {function content_61f563c7acf69($_smarty_tpl) {?>
<div class="sideBarContents"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SideBarLinks.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="clearfix"></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SideBarWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>