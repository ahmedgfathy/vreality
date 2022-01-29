<?php /* Smarty version Smarty-3.1.7, created on 2021-10-18 14:57:39
         compiled from "/var/www/html/ar.e-egar.com/includes/runtime/../../layouts/vlayout/modules/Settings/CronTasks/EditAjax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:636506341616d8b639065b1-16792667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd2e1af8e1097fd59db27b60a14fc29c918e813b' => 
    array (
      0 => '/var/www/html/ar.e-egar.com/includes/runtime/../../layouts/vlayout/modules/Settings/CronTasks/EditAjax.tpl',
      1 => 1620549542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '636506341616d8b639065b1-16792667',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD_MODEL' => 0,
    'QUALIFIED_MODULE' => 0,
    'MODULE' => 0,
    'RECORD' => 0,
    'VALUES' => 0,
    'FIELD_VALUE' => 0,
    'MINUTES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_616d8b63923ac',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_616d8b63923ac')) {function content_616d8b63923ac($_smarty_tpl) {?>
<div class="modelContainer"><div class="modal-header"><button data-dismiss="modal" class="close" title="<?php echo vtranslate('LBL_CLOSE');?>
">x</button><h3><?php echo vtranslate($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('name'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div><form class="form-horizontal" id="cronJobSaveAjax" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="action" value="SaveAjax" /><input  type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value;?>
" /><input type="hidden" id="minimumFrequency" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getMinimumFrequency();?>
" /><input type="hidden" id="frequency" name="frequency" value="" /><div class="modal-body tabbable"><div class="control-group"><div class="control-label"><?php echo vtranslate('LBL_STATUS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="controls"><select class="chzn-select" name="status"><optgroup><option <?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('status')==1){?> selected="" <?php }?> value="1"><?php echo vtranslate('LBL_ACTIVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option <?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('status')==0){?> selected="" <?php }?> value="0"><?php echo vtranslate('LBL_INACTIVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></optgroup></select></div></div><div class="control-group"><div class="control-label"><?php echo vtranslate('Frequency',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="controls row-fluid"><?php $_smarty_tpl->tpl_vars['VALUES'] = new Smarty_variable(explode(':',$_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getDisplayValue('frequency')), null, 0);?><?php if ($_smarty_tpl->tpl_vars['VALUES']->value[0]=='00'&&$_smarty_tpl->tpl_vars['VALUES']->value[1]=='00'){?><?php $_smarty_tpl->tpl_vars['MINUTES'] = new Smarty_variable("true", null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_VALUE'] = new Smarty_variable($_smarty_tpl->tpl_vars['VALUES']->value[1], null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['VALUES']->value[0]=='00'){?><?php $_smarty_tpl->tpl_vars['MINUTES'] = new Smarty_variable("true", null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_VALUE'] = new Smarty_variable($_smarty_tpl->tpl_vars['VALUES']->value[1], null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['VALUES']->value[1]=='00'){?><?php $_smarty_tpl->tpl_vars['MINUTES'] = new Smarty_variable("false", null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_VALUE'] = new Smarty_variable(($_smarty_tpl->tpl_vars['VALUES']->value[0]), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['MINUTES'] = new Smarty_variable("true", null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_VALUE'] = new Smarty_variable(($_smarty_tpl->tpl_vars['VALUES']->value[0]*60)+$_smarty_tpl->tpl_vars['VALUES']->value[1], null, 0);?><?php }?><input type="text" class="span2" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
" data-validation-engine="validate[required,funcCall[Vtiger_WholeNumberGreaterThanZero_Validator_Js.invokeValidation]]" id="frequencyValue"/>&nbsp;<select class="chzn-select span5" id="time_format"><optgroup><option value="mins" <?php if ($_smarty_tpl->tpl_vars['MINUTES']->value=='true'){?> selected="" <?php }?>><?php echo vtranslate('LBL_MINUTES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="hours" <?php if ($_smarty_tpl->tpl_vars['MINUTES']->value=='false'){?>selected="" <?php }?>><?php echo vtranslate('LBL_HOURS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></optgroup></select></div></div><div class="alert alert-info"><?php echo vtranslate($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('description'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div>	<?php }} ?>