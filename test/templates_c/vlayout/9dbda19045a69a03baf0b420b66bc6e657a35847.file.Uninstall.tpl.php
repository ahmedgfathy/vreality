<?php /* Smarty version Smarty-3.1.7, created on 2019-01-05 11:13:21
         compiled from "/var/www/html/cairobrokers/includes/runtime/../../layouts/vlayout/modules/PDFMaker/Uninstall.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2180120685b94529b6fce05-99941616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9dbda19045a69a03baf0b420b66bc6e657a35847' => 
    array (
      0 => '/var/www/html/cairobrokers/includes/runtime/../../layouts/vlayout/modules/PDFMaker/Uninstall.tpl',
      1 => 1546678403,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2180120685b94529b6fce05-99941616',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5b94529b71ac3',
  'variables' => 
  array (
    'LICENSE' => 0,
    'MODE' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b94529b71ac3')) {function content_5b94529b71ac3($_smarty_tpl) {?>
<div class="container-fluid" id="UninstallPDFMakerContainer"><form name="profiles_privilegies" action="index.php" method="post" class="form-horizontal"><br><label class="pull-left themeTextColor font-x-x-large"><?php echo vtranslate('LBL_UNINSTALL','PDFMaker');?>
</label><br clear="all"><hr><input type="hidden" name="module" value="PDFMaker" /><input type="hidden" name="view" value="" /><input type="hidden" name="license_key_val" id="license_key_val" value="<?php echo $_smarty_tpl->tpl_vars['LICENSE']->value;?>
" /><br /><div class="row-fluid"><label class="fieldLabel"><strong><?php echo vtranslate('LBL_UNINSTALL_DESC','PDFMaker');?>
:</strong></label><br><table class="table table-bordered table-condensed themeTableColor"><thead><tr class="blockHeader"><th class="mediumWidthType"><span class="alignMiddle"><?php echo vtranslate('LBL_UNINSTALL','PDFMaker');?>
</span></th></tr></thead><tbody><tr><td class="textAlignCenter"><button id="uninstall_pdfmaker_btn" type="button" class="btn btn-danger marginLeftZero"><?php echo vtranslate('LBL_UNINSTALL','PDFMaker');?>
</button></td></tr></tbody></table></div><?php if ($_smarty_tpl->tpl_vars['MODE']->value=="edit"){?><div class="pull-right"><button class="btn btn-success" type="submit"><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button><a class="cancelLink" onclick="javascript:window.history.back();" type="reset"><?php echo vtranslate('LBL_CANCEL','PDFMaker');?>
</a></div><?php }?></form></div><?php }} ?>