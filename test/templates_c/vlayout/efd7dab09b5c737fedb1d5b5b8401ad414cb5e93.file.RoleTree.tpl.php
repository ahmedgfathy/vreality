<?php /* Smarty version Smarty-3.1.7, created on 2021-05-25 22:29:45
         compiled from "/var/www/html/ar.e-egar.com/includes/runtime/../../layouts/vlayout/modules/Settings/Roles/RoleTree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15435056435e0b2af92b9435-60485237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efd7dab09b5c737fedb1d5b5b8401ad414cb5e93' => 
    array (
      0 => '/var/www/html/ar.e-egar.com/includes/runtime/../../layouts/vlayout/modules/Settings/Roles/RoleTree.tpl',
      1 => 1620549542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15435056435e0b2af92b9435-60485237',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5e0b2af92e55d',
  'variables' => 
  array (
    'ROLE' => 0,
    'CHILD_ROLE' => 0,
    'VIEW_NAME' => 0,
    'VIEW_TYPE' => 0,
    'SOURCE_ROLE' => 0,
    'SOURCE_ROLE_SUBPATTERN' => 0,
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e0b2af92e55d')) {function content_5e0b2af92e55d($_smarty_tpl) {?>
<ul><?php  $_smarty_tpl->tpl_vars['CHILD_ROLE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['CHILD_ROLE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ROLE']->value->getChildren(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['CHILD_ROLE']->key => $_smarty_tpl->tpl_vars['CHILD_ROLE']->value){
$_smarty_tpl->tpl_vars['CHILD_ROLE']->_loop = true;
?><li data-role="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getParentRoleString();?>
" data-roleid="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getId();?>
"><?php ob_start();?><?php echo getPurifiedSmartyParameters('view');?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['VIEW_NAME'] = new Smarty_variable($_tmp1, null, 0);?><?php ob_start();?><?php echo getPurifiedSmartyParameters('type');?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['VIEW_TYPE'] = new Smarty_variable($_tmp2, null, 0);?><div <?php if ($_smarty_tpl->tpl_vars['VIEW_NAME']->value!='Popup'){?>class="toolbar-handle"<?php }?>><?php if ($_smarty_tpl->tpl_vars['VIEW_TYPE']->value=='Transfer'){?><?php $_smarty_tpl->tpl_vars["SOURCE_ROLE_SUBPATTERN"] = new Smarty_variable(('::').($_smarty_tpl->tpl_vars['SOURCE_ROLE']->value->getId()), null, 0);?><?php if (strpos($_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getParentRoleString(),$_smarty_tpl->tpl_vars['SOURCE_ROLE_SUBPATTERN']->value)!==false){?><?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getName();?>
<?php }else{ ?><a href="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getEditViewUrl();?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getEditViewUrl();?>
" class="btn roleEle" rel="tooltip" ><?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getName();?>
</a><?php }?><?php }else{ ?><a href="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getEditViewUrl();?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getEditViewUrl();?>
" class="btn draggable droppable" rel="tooltip" title="<?php echo vtranslate('LBL_CLICK_TO_EDIT_OR_DRAG_TO_MOVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getName();?>
</a><?php }?><?php if ($_smarty_tpl->tpl_vars['VIEW_NAME']->value!='Popup'){?><div class="toolbar">&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getCreateChildUrl();?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getCreateChildUrl();?>
" title="<?php echo vtranslate('LBL_ADD_RECORD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="icon-plus-sign"></span></a>&nbsp;<a data-id="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getId();?>
" href="javascript:;" data-url="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getDeleteActionUrl();?>
" data-action="modal" title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="icon-trash"></span></a></div><?php }?></div><?php $_smarty_tpl->tpl_vars["ROLE"] = new Smarty_variable($_smarty_tpl->tpl_vars['CHILD_ROLE']->value, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("RoleTree.tpl","Settings:Roles"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</li><?php } ?></ul><?php }} ?>