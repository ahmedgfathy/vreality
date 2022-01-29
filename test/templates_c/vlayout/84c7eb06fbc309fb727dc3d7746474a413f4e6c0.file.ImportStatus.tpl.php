<?php /* Smarty version Smarty-3.1.7, created on 2019-01-06 12:34:09
         compiled from "/var/www/html/cairobrokers/includes/runtime/../../layouts/vlayout/modules/Import/ImportStatus.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17842580715c31f5c1846dd4-25115551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84c7eb06fbc309fb727dc3d7746474a413f4e6c0' => 
    array (
      0 => '/var/www/html/cairobrokers/includes/runtime/../../layouts/vlayout/modules/Import/ImportStatus.tpl',
      1 => 1493828345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17842580715c31f5c1846dd4-25115551',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LEFTPANELHIDE' => 0,
    'FOR_MODULE' => 0,
    'CONTINUE_IMPORT' => 0,
    'MODULE' => 0,
    'ERROR_MESSAGE' => 0,
    'IMPORT_RESULT' => 0,
    'INVENTORY_MODULES' => 0,
    'IMPORT_ID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c31f5c189c15',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c31f5c189c15')) {function content_5c31f5c189c15($_smarty_tpl) {?>

<script type="text/javascript">
jQuery(document).ready(function() {
	setTimeout(function() {
		jQuery("[name=importStatusForm]").get(0).submit();
		}, 2000);
});
</script>
<div id="toggleButton" class="toggleButton" title="<?php echo vtranslate('LBL_LEFT_PANEL_SHOW_HIDE','Vtiger');?>
"><i id="tButtonImage" class="<?php if ($_smarty_tpl->tpl_vars['LEFTPANELHIDE']->value!='1'){?>icon-chevron-left<?php }else{ ?>icon-chevron-right<?php }?>"></i></div>&nbsp<div style="padding-left: 15px;"><form onsubmit="VtigerJS_DialogBox.block();" action="index.php" enctype="multipart/form-data" method="POST" name="importStatusForm"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
" /><input type="hidden" name="view" value="Import" /><?php if ($_smarty_tpl->tpl_vars['CONTINUE_IMPORT']->value=='true'){?><input type="hidden" name="mode" value="continueImport" /><?php }else{ ?><input type="hidden" name="mode" value="" /><?php }?></form><table style=" width:90%;margin-left: 5% " cellpadding="10" class="searchUIBasic well"><tr><td class="font-x-large" align="left" colspan="2"><?php echo vtranslate('LBL_IMPORT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo vtranslate($_smarty_tpl->tpl_vars['FOR_MODULE']->value,$_smarty_tpl->tpl_vars['FOR_MODULE']->value);?>
 -<span class="redColor"><?php echo vtranslate('LBL_RUNNING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 ... </span></td></tr><?php if ($_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value!=''){?><tr><td class="style1" align="left" colspan="2"><?php echo $_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value;?>
</td></tr><?php }?><tr><td valign="top"><table cellpadding="10" cellspacing="0" align="center" class="dvtSelectedCell thickBorder importContents"><tr><td><?php echo vtranslate('LBL_TOTAL_RECORDS_IMPORTED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td><td width="10%">:</td><td width="30%"><?php echo $_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['IMPORTED'];?>
 / <?php echo $_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['TOTAL'];?>
</td></tr><tr><td colspan="3"><table cellpadding="10" cellspacing="0" class="calDayHour"><tr><td><?php echo vtranslate('LBL_NUMBER_OF_RECORDS_CREATED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td><td width="10%">:</td><td width="10%"><?php echo $_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['CREATED'];?>
</td></tr><tr><td><?php echo vtranslate('LBL_NUMBER_OF_RECORDS_UPDATED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td><td width="10%">:</td><td width="10%"><?php echo $_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['UPDATED'];?>
</td></tr><?php if (in_array($_smarty_tpl->tpl_vars['FOR_MODULE']->value,$_smarty_tpl->tpl_vars['INVENTORY_MODULES']->value)==false){?><tr><td><?php echo vtranslate('LBL_NUMBER_OF_RECORDS_SKIPPED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td><td width="10%">:</td><td width="10%"><?php echo $_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['SKIPPED'];?>
</td></tr><tr><td><?php echo vtranslate('LBL_NUMBER_OF_RECORDS_MERGED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td><td width="10%">:</td><td width="10%"><?php echo $_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['MERGED'];?>
</td></tr><?php }?></table></td></tr></table></td></tr><tr><td align="right"><button name="cancel" class="delete btn btn-danger"onclick="location.href='index.php?module=<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
&view=Import&mode=cancelImport&import_id=<?php echo $_smarty_tpl->tpl_vars['IMPORT_ID']->value;?>
'"><strong><?php echo vtranslate('LBL_CANCEL_IMPORT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></td></tr></table></div><?php }} ?>