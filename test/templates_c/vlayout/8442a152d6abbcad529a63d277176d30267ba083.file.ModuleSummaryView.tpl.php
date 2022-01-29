<?php /* Smarty version Smarty-3.1.7, created on 2019-01-06 17:03:57
         compiled from "/var/www/html/cairobrokers/includes/runtime/../../layouts/vlayout/modules/Project/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8537543765c3234fd03f9d5-84770356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8442a152d6abbcad529a63d277176d30267ba083' => 
    array (
      0 => '/var/www/html/cairobrokers/includes/runtime/../../layouts/vlayout/modules/Project/ModuleSummaryView.tpl',
      1 => 1493828417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8537543765c3234fd03f9d5-84770356',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
    'SUMMARY_INFORMATION' => 0,
    'SUMMARY_CATEGORY' => 0,
    'FIELD_NAME' => 0,
    'FIELD_VALUE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c3234fd083b4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c3234fd083b4')) {function content_5c3234fd083b4($_smarty_tpl) {?>
<div class="recordDetails"><div><h4> <?php echo vtranslate('LBL_RECORD_SUMMARY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
	</h4><hr></div><?php  $_smarty_tpl->tpl_vars['SUMMARY_CATEGORY'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['SUMMARY_CATEGORY']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUMMARY_INFORMATION']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['SUMMARY_CATEGORY']->key => $_smarty_tpl->tpl_vars['SUMMARY_CATEGORY']->value){
$_smarty_tpl->tpl_vars['SUMMARY_CATEGORY']->_loop = true;
?><div class="row-fluid textAlignCenter roundedCorners"><?php  $_smarty_tpl->tpl_vars['FIELD_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SUMMARY_CATEGORY']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_VALUE']->key => $_smarty_tpl->tpl_vars['FIELD_VALUE']->value){
$_smarty_tpl->tpl_vars['FIELD_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_NAME']->value = $_smarty_tpl->tpl_vars['FIELD_VALUE']->key;
?><span class="well squeezedWell span3"><div><label class="font-x-small"><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label></div><div><label class="font-x-x-large"><?php if (!empty($_smarty_tpl->tpl_vars['FIELD_VALUE']->value)){?><?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
<?php }else{ ?>0<?php }?></label></div></span><?php } ?></div><?php } ?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>