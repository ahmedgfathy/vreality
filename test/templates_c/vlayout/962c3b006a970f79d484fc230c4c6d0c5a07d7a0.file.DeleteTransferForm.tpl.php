<?php /* Smarty version Smarty-3.1.7, created on 2019-11-23 05:49:38
         compiled from "/var/www/html/egar/includes/runtime/../../layouts/vlayout/modules/Settings/Groups/DeleteTransferForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16521922785dd8c872229814-44757288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '962c3b006a970f79d484fc230c4c6d0c5a07d7a0' => 
    array (
      0 => '/var/www/html/egar/includes/runtime/../../layouts/vlayout/modules/Settings/Groups/DeleteTransferForm.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16521922785dd8c872229814-44757288',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'MODULE' => 0,
    'RECORD_MODEL' => 0,
    'ALL_USERS' => 0,
    'USER_ID' => 0,
    'USER_MODEL' => 0,
    'ALL_GROUPS' => 0,
    'GROUP_ID' => 0,
    'GROUP_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5dd8c87225ad5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dd8c87225ad5')) {function content_5dd8c87225ad5($_smarty_tpl) {?>
<div class="modelContainer"><div class="modal-header"><button class="close vtButton" data-dismiss="modal">×</button><h3><?php echo vtranslate('LBL_DELETE_RECORD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <?php echo vtranslate(('SINGLE_').($_smarty_tpl->tpl_vars['MODULE']->value),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 - <?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getName();?>
</h3></div><form class="form-horizontal" id="DeleteModal" name="AddComment" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="action" value="DeleteAjax" /><input type="hidden" name="record" id="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getId();?>
" /><div class="modal-body tabbable"><div class="control-group"><span class="control-label"><strong><?php echo vtranslate('LBL_TRANSFORM_OWNERSHIP',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <?php echo vtranslate('LBL_TO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></strong></span><div class="controls"><select id="transfer_record" name="transfer_record" class="chzn-select"><optgroup label="<?php echo vtranslate('LBL_USERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php  $_smarty_tpl->tpl_vars['USER_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['USER_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['USER_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ALL_USERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['USER_MODEL']->key => $_smarty_tpl->tpl_vars['USER_MODEL']->value){
$_smarty_tpl->tpl_vars['USER_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['USER_ID']->value = $_smarty_tpl->tpl_vars['USER_MODEL']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['USER_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->getName();?>
</option><?php } ?></optgroup><optgroup label="<?php echo vtranslate('LBL_GROUPS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php  $_smarty_tpl->tpl_vars['GROUP_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['GROUP_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['GROUP_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ALL_GROUPS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['GROUP_MODEL']->key => $_smarty_tpl->tpl_vars['GROUP_MODEL']->value){
$_smarty_tpl->tpl_vars['GROUP_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['GROUP_ID']->value = $_smarty_tpl->tpl_vars['GROUP_MODEL']->key;
?><?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getId()!=$_smarty_tpl->tpl_vars['GROUP_ID']->value){?><option value="<?php echo $_smarty_tpl->tpl_vars['GROUP_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['GROUP_MODEL']->value->getName();?>
</option><?php }?><?php } ?></optgroup></select></div></div></div><div class="modal-footer"><div class=" pull-right cancelLinkContainer"><a class="cancelLink" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><button class="btn btn-success" type="submit"><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div></form></div><?php }} ?>