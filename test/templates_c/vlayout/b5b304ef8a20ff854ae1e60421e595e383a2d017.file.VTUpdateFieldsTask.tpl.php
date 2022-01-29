<?php /* Smarty version Smarty-3.1.7, created on 2019-01-05 12:34:17
         compiled from "/var/www/html/cairobrokers/includes/runtime/../../layouts/vlayout/modules/Settings/Workflows/Tasks/VTUpdateFieldsTask.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11718576585c30a4490981c4-84567417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5b304ef8a20ff854ae1e60421e595e383a2d017' => 
    array (
      0 => '/var/www/html/cairobrokers/includes/runtime/../../layouts/vlayout/modules/Settings/Workflows/Tasks/VTUpdateFieldsTask.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11718576585c30a4490981c4-84567417',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'TASK_OBJECT' => 0,
    'FIELD_VALUE_MAPPING' => 0,
    'MODULE_MODEL' => 0,
    'FIELD_MODEL' => 0,
    'RESTRICTFIELDS' => 0,
    'FIELD_MAP' => 0,
    'FIELD_INFO' => 0,
    'SOURCE_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c30a44918626',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c30a44918626')) {function content_5c30a44918626($_smarty_tpl) {?>
<div class="row-fluid"><div class="span2"><strong><?php echo vtranslate('LBL_SET_FIELD_VALUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></div></div><br><div><button type="button" class="btn" id="addFieldBtn"><?php echo vtranslate('LBL_ADD_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div><br><div class="row-fluid conditionsContainer" id="save_fieldvaluemapping"><?php $_smarty_tpl->tpl_vars['FIELD_VALUE_MAPPING'] = new Smarty_variable(ZEND_JSON::decode($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->field_value_mapping), null, 0);?><input type="hidden" id="fieldValueMapping" name="field_value_mapping" value='<?php echo Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->field_value_mapping);?>
' /><?php  $_smarty_tpl->tpl_vars['FIELD_MAP'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MAP']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FIELD_VALUE_MAPPING']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MAP']->key => $_smarty_tpl->tpl_vars['FIELD_MAP']->value){
$_smarty_tpl->tpl_vars['FIELD_MAP']->_loop = true;
?><div class="row-fluid conditionRow padding-bottom1per"><span class="span4"><select name="fieldname" class="chzn-select" style="min-width: 250px" data-placeholder="<?php echo vtranslate('LBL_SELECT_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><option></option><?php  $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getFields(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = true;
?><?php if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditable()||$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType()=='reference'||($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name')=="Documents"&&in_array($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name'),$_smarty_tpl->tpl_vars['RESTRICTFIELDS']->value))){?><?php continue 1?><?php }?><?php $_smarty_tpl->tpl_vars['FIELD_INFO'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo(), null, 0);?><?php $_smarty_tpl->tpl_vars['MODULE_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModule(), null, 0);?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_MAP']->value['fieldname']==$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name')){?>selected=""<?php }?>data-fieldtype="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldType();?>
" data-field-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
" data-fieldinfo='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value);?>
' ><?php if ($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value!=$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name')){?>(<?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'));?>
)  <?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'));?>
<?php }else{ ?><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
<?php }?></option><?php } ?></select></span><span class="fieldUiHolder span4 marginLeftZero"><input type="text" class="getPopupUi row-fluid" readonly="" name="fieldValue" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MAP']->value['value'];?>
" /><input type="hidden" name="valuetype" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MAP']->value['valuetype'];?>
" /></span><span class="cursorPointer span"><i class="alignMiddle deleteCondition icon-trash"></i></span></div><?php } ?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("FieldExpressions.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><br><div class="row-fluid basicAddFieldContainer hide padding-bottom1per"><span class="span4"><select name="fieldname" data-placeholder="<?php echo vtranslate('LBL_SELECT_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" style="min-width: 250px"><option></option><?php  $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getFields(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = true;
?><?php if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditable()||$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType()=='reference'||($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name')=="Documents"&&in_array($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name'),$_smarty_tpl->tpl_vars['RESTRICTFIELDS']->value))){?><?php continue 1?><?php }?><?php $_smarty_tpl->tpl_vars['FIELD_INFO'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo(), null, 0);?><?php $_smarty_tpl->tpl_vars['MODULE_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModule(), null, 0);?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
" data-fieldtype="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldType();?>
" data-field-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
" data-fieldinfo='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value);?>
' ><?php if ($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value!=$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name')){?>(<?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'));?>
)  <?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'));?>
<?php }else{ ?><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
<?php }?></option><?php } ?></select></span><span class="fieldUiHolder span4 marginLeftZero"><input type="text" class="row-fluid" readonly="" name="fieldValue" value="" /><input type="hidden" name="valuetype" value="rawtext" /></span><span class="cursorPointer span"><i class="alignMiddle deleteCondition icon-trash"></i></span></div><?php }} ?>