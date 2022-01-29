<?php /* Smarty version Smarty-3.1.7, created on 2018-02-24 11:54:11
         compiled from "/var/www/html/cairobrokers/includes/runtime/../../layouts/vlayout/modules/Settings/MailConverter/Step1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17374378505a915263763f95-99936566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a6903539cfbafa64ea1d5fa5ae628d08984ae35' => 
    array (
      0 => '/var/www/html/cairobrokers/includes/runtime/../../layouts/vlayout/modules/Settings/MailConverter/Step1.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17374378505a915263763f95-99936566',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_MODEL' => 0,
    'RECORD_ID' => 0,
    'FIELDS' => 0,
    'FIELD_MODEL' => 0,
    'RECORD_MODEL' => 0,
    'RECORD_EXISTS' => 0,
    'QUALIFIED_MODULE' => 0,
    'FIELD_DATA_TYPE' => 0,
    'FIELD_NAME' => 0,
    'FIELD_VALUE' => 0,
    'PICKLIST_VALUES' => 0,
    'PICKLIST_KEY' => 0,
    'PICKLIST_VALUE' => 0,
    'RADIO_OPTIONS' => 0,
    'RADIO_NAME' => 0,
    'RADIO_VALUE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a915263840ae',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a915263840ae')) {function content_5a915263840ae($_smarty_tpl) {?>
<div class="span9 addMailBoxBlock"><form class="form-horizontal" id="mailBoxEditView" name="step1"><?php $_smarty_tpl->tpl_vars['FIELDS'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getFields(), null, 0);?><?php if (empty($_smarty_tpl->tpl_vars['RECORD_ID']->value)){?><?php $_smarty_tpl->tpl_vars['RECORD_EXISTS'] = new Smarty_variable(false, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['RECORD_EXISTS'] = new Smarty_variable(true, null, 0);?><?php }?><div class="addMailBoxStep"><?php  $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_NAME']->value = $_smarty_tpl->tpl_vars['FIELD_MODEL']->key;
?><?php if (!$_smarty_tpl->tpl_vars['RECORD_MODEL']->value->isFieldEditable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value)){?><?php continue 1?><?php }?><?php if ($_smarty_tpl->tpl_vars['RECORD_EXISTS']->value){?><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getId();?>
" /><input type="hidden" name="scannerOldName" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getName();?>
" /><?php }?><div class="control-group"><div class="control-label"><label><span class="redColor">*</span>&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()){?><?php }?></label></div><div class="controls"><?php $_smarty_tpl->tpl_vars['FIELD_DATA_TYPE'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['FIELD_DATA_TYPE']->value=='password'){?><input type="password" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" <?php if ($_smarty_tpl->tpl_vars['RECORD_EXISTS']->value){?> value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get($_smarty_tpl->tpl_vars['FIELD_NAME']->value);?>
" <?php }?><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()){?>data-validation-engine="validate[required]"<?php }?> /><?php }elseif($_smarty_tpl->tpl_vars['FIELD_DATA_TYPE']->value=='boolean'){?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" value="0" /><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
"<?php $_smarty_tpl->tpl_vars['RECORD_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getId(), null, 0);?><?php if (($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName())=='1')||(empty($_smarty_tpl->tpl_vars['RECORD_ID']->value))){?>checked<?php }?> /><?php }elseif($_smarty_tpl->tpl_vars['FIELD_DATA_TYPE']->value=='picklist'){?><?php $_smarty_tpl->tpl_vars['PICKLIST_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getPickListValues(), null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_VALUE'] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get($_smarty_tpl->tpl_vars['FIELD_NAME']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName()=='time_zone'&&empty($_smarty_tpl->tpl_vars['FIELD_VALUE']->value)){?><?php $_smarty_tpl->tpl_vars['FIELD_VALUE'] = new Smarty_variable(" ", null, 0);?><?php }?><select name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" class="select2" style="min-width:220px"<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName()=='time_zone'){?>data-dropdownCssClass="select2-drop-above"<?php }?>><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName()=='time_zone'){?><?php  $_smarty_tpl->tpl_vars['PICKLIST_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['PICKLIST_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->key => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value){
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['PICKLIST_KEY']->value = $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_KEY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_VALUE']->value==$_smarty_tpl->tpl_vars['PICKLIST_KEY']->value){?> selected <?php }?> ><?php echo vtranslate($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php } ?><?php }else{ ?><?php  $_smarty_tpl->tpl_vars['PICKLIST_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['PICKLIST_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->key => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value){
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['PICKLIST_KEY']->value = $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_KEY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get($_smarty_tpl->tpl_vars['FIELD_NAME']->value)==$_smarty_tpl->tpl_vars['PICKLIST_KEY']->value){?> selected <?php }?> ><?php echo $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value;?>
</option><?php } ?><?php }?></select><?php }elseif($_smarty_tpl->tpl_vars['FIELD_DATA_TYPE']->value=='radio'){?><?php $_smarty_tpl->tpl_vars['RADIO_OPTIONS'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getRadioOptions(), null, 0);?><?php  $_smarty_tpl->tpl_vars['RADIO_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RADIO_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['RADIO_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['RADIO_OPTIONS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RADIO_VALUE']->key => $_smarty_tpl->tpl_vars['RADIO_VALUE']->value){
$_smarty_tpl->tpl_vars['RADIO_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['RADIO_NAME']->value = $_smarty_tpl->tpl_vars['RADIO_VALUE']->key;
?><label class="radio inline"><input class="radio" type="radio" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['RADIO_NAME']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['RECORD_EXISTS']->value){?> <?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get($_smarty_tpl->tpl_vars['FIELD_NAME']->value)==$_smarty_tpl->tpl_vars['RADIO_NAME']->value){?> checked <?php }?><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['RADIO_NAME']->value=='imap4'||$_smarty_tpl->tpl_vars['RADIO_NAME']->value=='ssl'||$_smarty_tpl->tpl_vars['RADIO_NAME']->value=='novalidate-cert'){?> checked <?php }?><?php }?> /><?php echo $_smarty_tpl->tpl_vars['RADIO_VALUE']->value;?>
</label><?php } ?><?php }else{ ?><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
"<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()){?>data-validation-engine="validate[required]"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get($_smarty_tpl->tpl_vars['FIELD_NAME']->value);?>
"/><?php }?></div></div><?php } ?></div><div class="pull-right" style="margin:20px 0;"><button class="btn btn-success" type="submit" onclick="javascript:Settings_MailConverter_Edit_Js.firstStep()"><strong><?php echo vtranslate('LBL_NEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><a class="cancelLink" type="reset" onclick="javascript:window.history.back();"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></div></form></div><?php }} ?>