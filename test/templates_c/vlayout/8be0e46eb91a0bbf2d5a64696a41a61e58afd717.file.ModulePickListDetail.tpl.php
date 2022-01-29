<?php /* Smarty version Smarty-3.1.7, created on 2019-11-23 12:50:22
         compiled from "/var/www/html/egar/includes/runtime/../../layouts/vlayout/modules/Settings/Picklist/ModulePickListDetail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1247408385dd92b0e9f02f4-17179912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8be0e46eb91a0bbf2d5a64696a41a61e58afd717' => 
    array (
      0 => '/var/www/html/egar/includes/runtime/../../layouts/vlayout/modules/Settings/Picklist/ModulePickListDetail.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1247408385dd92b0e9f02f4-17179912',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NO_PICKLIST_FIELDS' => 0,
    'SELECTED_MODULE_NAME' => 0,
    'QUALIFIED_NAME' => 0,
    'CREATE_PICKLIST_URL' => 0,
    'QUALIFIED_MODULE' => 0,
    'PICKLIST_FIELDS' => 0,
    'FIELD_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5dd92b0ea1179',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dd92b0ea1179')) {function content_5dd92b0ea1179($_smarty_tpl) {?>
<?php if (!empty($_smarty_tpl->tpl_vars['NO_PICKLIST_FIELDS']->value)){?><label style="padding-top: 40px;"> <b><?php echo vtranslate($_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
 <?php echo vtranslate('NO_PICKLIST_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_NAME']->value);?>
. &nbsp;<?php if (!empty($_smarty_tpl->tpl_vars['CREATE_PICKLIST_URL']->value)){?><a href="<?php echo $_smarty_tpl->tpl_vars['CREATE_PICKLIST_URL']->value;?>
"><?php echo vtranslate('LBL_CREATE_NEW',$_smarty_tpl->tpl_vars['QUALIFIED_NAME']->value);?>
</a><?php }?></b></label><?php }else{ ?><div class="row-fluid"><label class="fieldLabel span3"><strong><?php echo vtranslate('LBL_SELECT_PICKLIST_IN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label><div class="span6 fieldValue"><select class="chzn-select" id="modulePickList"><optgroup><?php  $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['PICKLIST_FIELD'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PICKLIST_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['PICKLIST_FIELD']->value = $_smarty_tpl->tpl_vars['FIELD_MODEL']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getId();?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</option><?php } ?></optgroup></select></div></div><br><?php }?>	
<?php }} ?>