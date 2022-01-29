<?php /* Smarty version Smarty-3.1.7, created on 2017-05-16 22:58:52
         compiled from "/var/www/html/cairobrokers/includes/runtime/../../layouts/vlayout/modules/Settings/Profiles/DeleteTransferForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1607963300591b842c077821-47210127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8d11270ed1ba1e11c550720799583d270f7fc8f' => 
    array (
      0 => '/var/www/html/cairobrokers/includes/runtime/../../layouts/vlayout/modules/Settings/Profiles/DeleteTransferForm.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1607963300591b842c077821-47210127',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'RECORD_MODEL' => 0,
    'MODULE' => 0,
    'ALL_RECORDS' => 0,
    'PROFILE_MODEL' => 0,
    'PROFILE_ID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_591b842c0aeb3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591b842c0aeb3')) {function content_591b842c0aeb3($_smarty_tpl) {?>
<div class="modelContainer"><div class="row-fluid"><div class="modal-header"><button class="close vtButton" data-dismiss="modal">×</button><h3><?php echo vtranslate('LBL_DELETE_PROFILE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 - <?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getName();?>
</h3></div><form class="form-horizontal" id="DeleteModal" name="AddComment" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="action" value="Delete" /><input type="hidden" name="record" id="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getId();?>
" /><div class="modal-body"><div class="control-group"><div class="control-label"><?php echo vtranslate('LBL_TRANSFER_ROLES_TO_PROFILE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="controls"><select id="transfer_record" name="transfer_record" class="chzn-select"><optgroup label="<?php echo vtranslate('LBL_PROFILES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php  $_smarty_tpl->tpl_vars['PROFILE_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PROFILE_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ALL_RECORDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PROFILE_MODEL']->key => $_smarty_tpl->tpl_vars['PROFILE_MODEL']->value){
$_smarty_tpl->tpl_vars['PROFILE_MODEL']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['PROFILE_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['PROFILE_MODEL']->value->get('profileid'), null, 0);?><?php if ($_smarty_tpl->tpl_vars['PROFILE_ID']->value!=$_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getId()){?><option value="<?php echo $_smarty_tpl->tpl_vars['PROFILE_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PROFILE_MODEL']->value->get('profilename');?>
</option><?php }?><?php } ?></optgroup></select></div></div></div><div class="modal-footer"><div class=" pull-right cancelLinkContainer"><a class="cancelLink" data-dismiss="modal" type="reset"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><button class="btn btn-success pull-right" type="submit"><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div></form></div></div><?php }} ?>