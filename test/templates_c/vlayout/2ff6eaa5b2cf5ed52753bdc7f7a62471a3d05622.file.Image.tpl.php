<?php /* Smarty version Smarty-3.1.7, created on 2017-05-03 17:13:14
         compiled from "/var/www/html/cairobrokers/includes/runtime/../../layouts/vlayout/modules/Vtiger/uitypes/Image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1396715878590a0faa69d822-29154085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ff6eaa5b2cf5ed52753bdc7f7a62471a3d05622' => 
    array (
      0 => '/var/www/html/cairobrokers/includes/runtime/../../layouts/vlayout/modules/Vtiger/uitypes/Image.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1396715878590a0faa69d822-29154085',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
    'FIELD_MODEL' => 0,
    'MODULE' => 0,
    'IMAGE_DETAILS' => 0,
    'FIELD_INFO' => 0,
    'SPECIAL_VALIDATOR' => 0,
    'IMAGE_INFO' => 0,
    'ITER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_590a0faa6eaf2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590a0faa6eaf2')) {function content_590a0faa6eaf2($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value=='Webforms'){?><input type="text" readonly="" /><?php }else{ ?><?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable(Vtiger_Util_Helper::toSafeHTML(Zend_Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())), null, 0);?><?php $_smarty_tpl->tpl_vars["SPECIAL_VALIDATOR"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator(), null, 0);?><input type="file" class="input-large <?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Products'){?>multi" maxlength="6"<?php }else{ ?>"<?php }?> name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue');?>
"data-validation-engine="validate[<?php if (($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()==true)&&(empty($_smarty_tpl->tpl_vars['IMAGE_DETAILS']->value))){?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)){?>data-validator=<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
<?php }?> /><?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Products'){?><div id="MultiFile1_wrap_list" class="MultiFile-list"></div><?php }?><?php  $_smarty_tpl->tpl_vars['IMAGE_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['IMAGE_INFO']->_loop = false;
 $_smarty_tpl->tpl_vars['ITER'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['IMAGE_DETAILS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['IMAGE_INFO']->key => $_smarty_tpl->tpl_vars['IMAGE_INFO']->value){
$_smarty_tpl->tpl_vars['IMAGE_INFO']->_loop = true;
 $_smarty_tpl->tpl_vars['ITER']->value = $_smarty_tpl->tpl_vars['IMAGE_INFO']->key;
?><div class="row-fluid"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['IMAGE_INFO']->value['orgname'];?>
<?php $_tmp1=ob_get_clean();?><?php if (!empty($_smarty_tpl->tpl_vars['IMAGE_INFO']->value['path'])&&!empty($_tmp1)){?><span class="span8" name="existingImages"><img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE_INFO']->value['path'];?>
_<?php echo $_smarty_tpl->tpl_vars['IMAGE_INFO']->value['orgname'];?>
" data-image-id="<?php echo $_smarty_tpl->tpl_vars['IMAGE_INFO']->value['id'];?>
"></span><span class="span3 row-fluid"><span class="row-fluid">[<?php echo $_smarty_tpl->tpl_vars['IMAGE_INFO']->value['name'];?>
]</span><span class="row-fluid"><input type="button" id="file_<?php echo $_smarty_tpl->tpl_vars['ITER']->value;?>
" value=<?php echo vtranslate("LBL_DELETE");?>
 class="imageDelete"></span></span><?php }?></div><?php } ?><?php }?><?php }} ?>