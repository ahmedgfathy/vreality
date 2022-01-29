<?php /* Smarty version Smarty-3.1.7, created on 2021-11-01 12:49:33
         compiled from "/var/www/html/ar.e-egar.com/includes/runtime/../../layouts/vlayout/modules/Settings/Vtiger/EditTax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11103006545ffb9426f1d417-15608132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb89ffa1dff828ec57e3801dbcdd6eb96241ca41' => 
    array (
      0 => '/var/www/html/ar.e-egar.com/includes/runtime/../../layouts/vlayout/modules/Settings/Vtiger/EditTax.tpl',
      1 => 1620549542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11103006545ffb9426f1d417-15608132',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5ffb9427053a4',
  'variables' => 
  array (
    'TAX_RECORD_MODEL' => 0,
    'TAX_ID' => 0,
    'TAX_MODEL_EXISTS' => 0,
    'QUALIFIED_MODULE' => 0,
    'TAX_TYPE' => 0,
    'TAX_DELETED' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ffb9427053a4')) {function content_5ffb9427053a4($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['TAX_MODEL_EXISTS'] = new Smarty_variable(true, null, 0);?><?php $_smarty_tpl->tpl_vars['TAX_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['TAX_RECORD_MODEL']->value->getId(), null, 0);?><?php if (empty($_smarty_tpl->tpl_vars['TAX_ID']->value)){?><?php $_smarty_tpl->tpl_vars['TAX_MODEL_EXISTS'] = new Smarty_variable(false, null, 0);?><?php }?><div class="taxModalContainer"><div class="modal-header contentsBackground"><button class="close vtButton" data-dismiss="modal">×</button><?php if ($_smarty_tpl->tpl_vars['TAX_MODEL_EXISTS']->value){?><h3><?php echo vtranslate('LBL_EDIT_TAX',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3><?php }else{ ?><h3><?php echo vtranslate('LBL_ADD_NEW_TAX',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3><?php }?></div><form id="editTax" class="form-horizontal" method="POST"><input type="hidden" name="taxid" value="<?php echo $_smarty_tpl->tpl_vars['TAX_ID']->value;?>
" /><input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['TAX_TYPE']->value;?>
" /><div class="modal-body"><div class="row-fluid"><div class="control-group"><label class="control-label"><?php echo vtranslate('LBL_TAX_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="controls"><input class="span3" type="text" name="taxlabel" placeholder="<?php echo vtranslate('LBL_ENTER_TAX_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" value="<?php echo $_smarty_tpl->tpl_vars['TAX_RECORD_MODEL']->value->getName();?>
" data-validation-engine='validate[required]' /></div></div><div class="control-group"><label class="control-label"><?php echo vtranslate('LBL_TAX_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="controls input-append"><input class="span2" type="text" name="percentage" class="input-medium" placeholder="<?php echo vtranslate('LBL_ENTER_TAX_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" value="<?php echo $_smarty_tpl->tpl_vars['TAX_RECORD_MODEL']->value->getTax();?>
" data-validation-engine='validate[required, funcCall[Vtiger_Percentage_Validator_Js.invokeValidation]]' /><span class="add-on">%</span></div></div><?php if ($_smarty_tpl->tpl_vars['TAX_MODEL_EXISTS']->value){?><?php $_smarty_tpl->tpl_vars['TAX_DELETED'] = new Smarty_variable($_smarty_tpl->tpl_vars['TAX_RECORD_MODEL']->value->isDeleted(), null, 0);?><div class="control-group"><label class="control-label"><?php echo vtranslate('LBL_STATUS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="controls"><input type="hidden" name="deleted" value="1" /><input type="checkbox" name="deleted" value="0" class="taxStatus alignBottom" <?php if (!$_smarty_tpl->tpl_vars['TAX_DELETED']->value){?> checked <?php }?> /><span>&nbsp;&nbsp;<?php echo vtranslate('LBL_TAX_STATUS_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div></div><?php }else{ ?><input type="hidden" class="addTaxView" value="true" /><input type="hidden" name="deleted" value="0" /><?php }?></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div><?php }} ?>