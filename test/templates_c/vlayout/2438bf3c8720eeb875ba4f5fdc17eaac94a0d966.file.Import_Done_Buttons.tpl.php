<?php /* Smarty version Smarty-3.1.7, created on 2021-10-18 14:57:02
         compiled from "/var/www/html/ar.e-egar.com/includes/runtime/../../layouts/vlayout/modules/Import/Import_Done_Buttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1544259070616d8b3eefd477-48613918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2438bf3c8720eeb875ba4f5fdc17eaac94a0d966' => 
    array (
      0 => '/var/www/html/ar.e-egar.com/includes/runtime/../../layouts/vlayout/modules/Import/Import_Done_Buttons.tpl',
      1 => 1620549542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1544259070616d8b3eefd477-48613918',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FOR_MODULE' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_616d8b3eeffdd',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_616d8b3eeffdd')) {function content_616d8b3eeffdd($_smarty_tpl) {?>

<button class="btn btn-success" name="ok"
		onclick="location.href='index.php?module=<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
&view=Import'"><strong><?php echo vtranslate('LBL_OK_BUTTON_LABEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><?php }} ?>