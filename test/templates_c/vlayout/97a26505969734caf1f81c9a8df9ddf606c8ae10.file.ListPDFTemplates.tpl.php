<?php /* Smarty version Smarty-3.1.7, created on 2019-01-05 09:08:39
         compiled from "/var/www/html/cairobrokers/includes/runtime/../../layouts/vlayout/modules/PDFMaker/ListPDFTemplates.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3893236775b94411a29cce0-73277803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97a26505969734caf1f81c9a8df9ddf606c8ae10' => 
    array (
      0 => '/var/www/html/cairobrokers/includes/runtime/../../layouts/vlayout/modules/PDFMaker/ListPDFTemplates.tpl',
      1 => 1546678403,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3893236775b94411a29cce0-73277803',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5b94411a2ae34',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b94411a2ae34')) {function content_5b94411a2ae34($_smarty_tpl) {?>
<script type="text/javascript" src="layouts/vlayout/modules/PDFMaker/resources/PDFMakerActions.js"></script><script type="text/javascript" src="layouts/vlayout/modules/PDFMaker/resources/PDFMaker.js"></script><div class="contentsDiv marginLeftZero"><div class="listViewPageDiv"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ListPDFHeader.tpl','PDFMaker'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="listViewContentDiv" id="listViewContents"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ListPDFTemplatesContents.tpl','PDFMaker'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div></div><?php }} ?>