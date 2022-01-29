<?php /* Smarty version Smarty-3.1.7, created on 2021-05-25 11:08:01
         compiled from "/var/www/html/ar.e-egar.com/includes/runtime/../../layouts/vlayout/modules/Vtiger/MergeRecords.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3016745295df8bc7976aed4-52695538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db4d9354473885abe93e2eb270c1722b215beb30' => 
    array (
      0 => '/var/www/html/ar.e-egar.com/includes/runtime/../../layouts/vlayout/modules/Vtiger/MergeRecords.tpl',
      1 => 1620549542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3016745295df8bc7976aed4-52695538',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5df8bc79787a3',
  'variables' => 
  array (
    'MODULE' => 0,
    'RECORDS' => 0,
    'RECORDMODELS' => 0,
    'RECORD' => 0,
    'FIELDS' => 0,
    'FIELD' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5df8bc79787a3')) {function content_5df8bc79787a3($_smarty_tpl) {?>
<div style='background: white;'><div><br><div style='margin-left:10px'><h3><?php echo vtranslate('LBL_MERGE_RECORDS_IN',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 > <?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3></div><br><div class='alert-info'><?php echo vtranslate('LBL_MERGE_RECORDS_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div></div><form class="form-horizontal contentsBackground" name="massMerge" method="post" action="index.php"><input type="hidden" name=module value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="action" value="ProcessDuplicates" /><input type="hidden" name="records" value=<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['RECORDS']->value);?>
 /><div><table class='table table-bordered table-condensed'><thead class='listViewHeaders'><th><?php echo vtranslate('LBL_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</th><?php  $_smarty_tpl->tpl_vars['RECORD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RECORD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RECORDMODELS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['recordList']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['RECORD']->key => $_smarty_tpl->tpl_vars['RECORD']->value){
$_smarty_tpl->tpl_vars['RECORD']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['recordList']['index']++;
?><th><?php echo vtranslate('LBL_RECORD');?>
 #<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['recordList']['index']+1;?>
 &nbsp;<input <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['recordList']['index']==0){?>checked<?php }?> type=radio value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
" name=primaryRecord style='bottom:1px;position:relative;'/></th><?php } ?></thead><?php  $_smarty_tpl->tpl_vars['FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD']->key => $_smarty_tpl->tpl_vars['FIELD']->value){
$_smarty_tpl->tpl_vars['FIELD']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['FIELD']->value->isEditable()){?><tr><td><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td><?php  $_smarty_tpl->tpl_vars['RECORD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RECORD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RECORDMODELS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['recordList']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['RECORD']->key => $_smarty_tpl->tpl_vars['RECORD']->value){
$_smarty_tpl->tpl_vars['RECORD']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['recordList']['index']++;
?><td><input <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['recordList']['index']==0){?>checked<?php }?> type=radio name="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getName();?>
"data-id="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['FIELD']->value->getName());?>
" style='bottom:1px;position:relative;'/>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD']->value->getName());?>
</td><?php } ?></tr><?php }?><?php } ?></table></div><div class='row-fluid'><div class="offset4"><button type=submit class='btn btn-success'><?php echo vtranslate('LBL_MERGE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div></div></form><br></div><?php }} ?>