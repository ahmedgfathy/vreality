<?php /* Smarty version Smarty-3.1.7, created on 2018-02-23 16:55:53
         compiled from "/var/www/html/cairobrokers/includes/runtime/../../layouts/vlayout/modules/Settings/Leads/MappingDetail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8578770875a904799e25c91-94001544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83096aa123e4ebe8b5256cdd89410f9313c5a45d' => 
    array (
      0 => '/var/www/html/cairobrokers/includes/runtime/../../layouts/vlayout/modules/Settings/Leads/MappingDetail.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8578770875a904799e25c91-94001544',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'MODULE_MODEL' => 0,
    'LINK_MODEL' => 0,
    'LABEL' => 0,
    'MAPPING_ID' => 0,
    'MAPPING' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a904799f189f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a904799f189f')) {function content_5a904799f189f($_smarty_tpl) {?>
<div class="container-fluid"><div class="row-fluid settingsHeader padding1per"><span class="span8"><span class="font-x-x-large"><?php echo vtranslate('LBL_CONVERT_LEAD_FIELD_MAPPING',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></span><span class="span4"><span class="pull-right"><?php  $_smarty_tpl->tpl_vars['LINK_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LINK_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getDetailViewLinks(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LINK_MODEL']->key => $_smarty_tpl->tpl_vars['LINK_MODEL']->value){
$_smarty_tpl->tpl_vars['LINK_MODEL']->_loop = true;
?><button type="button" class="btn" onclick=<?php echo $_smarty_tpl->tpl_vars['LINK_MODEL']->value->getUrl();?>
><strong><?php echo vtranslate($_smarty_tpl->tpl_vars['LINK_MODEL']->value->getLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><?php } ?></span></span></div><hr><div class="contents" id="detailView"><table class="table table-bordered" width="100%"><tbody><tr class="blockHeader"><th class="blockHeader" width="15%"><?php echo vtranslate('LBL_FIELD_LABEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th class="blockHeader" width="15%"><?php echo vtranslate('LBL_FIELD_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th class="blockHeader textAlignCenter" colspan="3" width="70%"><?php echo vtranslate('LBL_MAPPING_WITH_OTHER_MODULES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr><tr><?php  $_smarty_tpl->tpl_vars['LABEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LABEL']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getHeaders(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LABEL']->key => $_smarty_tpl->tpl_vars['LABEL']->value){
$_smarty_tpl->tpl_vars['LABEL']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['LABEL']->key;
?><td width="15%"><b><?php echo vtranslate($_smarty_tpl->tpl_vars['LABEL']->value,$_smarty_tpl->tpl_vars['LABEL']->value);?>
</b></td><?php } ?></tr><?php  $_smarty_tpl->tpl_vars['MAPPING'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MAPPING']->_loop = false;
 $_smarty_tpl->tpl_vars['MAPPING_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getMapping(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MAPPING']->key => $_smarty_tpl->tpl_vars['MAPPING']->value){
$_smarty_tpl->tpl_vars['MAPPING']->_loop = true;
 $_smarty_tpl->tpl_vars['MAPPING_ID']->value = $_smarty_tpl->tpl_vars['MAPPING']->key;
?><tr class="listViewEntries" data-cfmid="<?php echo $_smarty_tpl->tpl_vars['MAPPING_ID']->value;?>
"><td width="15%"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MAPPING']->value['Leads']['label'];?>
<?php $_tmp1=ob_get_clean();?><?php echo vtranslate($_tmp1,'Leads');?>
</td><td width="15%"><?php echo vtranslate($_smarty_tpl->tpl_vars['MAPPING']->value['Leads']['fieldDataType'],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td><td width="13%"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MAPPING']->value['Accounts']['label'];?>
<?php $_tmp2=ob_get_clean();?><?php echo vtranslate($_tmp2,'Accounts');?>
</td><td width="13%"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MAPPING']->value['Contacts']['label'];?>
<?php $_tmp3=ob_get_clean();?><?php echo vtranslate($_tmp3,'Contacts');?>
</td><td width="13%"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MAPPING']->value['Potentials']['label'];?>
<?php $_tmp4=ob_get_clean();?><?php echo vtranslate($_tmp4,'Potentials');?>
<?php if ($_smarty_tpl->tpl_vars['MAPPING']->value['editable']==1){?><?php  $_smarty_tpl->tpl_vars['LINK_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LINK_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getMappingLinks(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LINK_MODEL']->key => $_smarty_tpl->tpl_vars['LINK_MODEL']->value){
$_smarty_tpl->tpl_vars['LINK_MODEL']->_loop = true;
?><div class="pull-right actions"><span class="actionImages"><a onclick=<?php echo $_smarty_tpl->tpl_vars['LINK_MODEL']->value->getUrl();?>
><i title="<?php echo vtranslate($_smarty_tpl->tpl_vars['LINK_MODEL']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="icon-trash alignMiddle"></i></a></span></div><?php } ?><?php }?></td></tr><?php } ?></tbody></table></div></div><?php }} ?>