<?php /* Smarty version Smarty-3.1.7, created on 2019-11-03 01:47:40
         compiled from "/var/www/html/cairobrokers/includes/runtime/../../layouts/vlayout/modules/Vtiger/Header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18800101515909fc655c76b7-16767369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e0d7c96f9cfdce7a119a15798277ded0d407b93' => 
    array (
      0 => '/var/www/html/cairobrokers/includes/runtime/../../layouts/vlayout/modules/Vtiger/Header.tpl',
      1 => 1572745658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18800101515909fc655c76b7-16767369',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5909fc656b9a4',
  'variables' => 
  array (
    'PAGETITLE' => 0,
    'MODULE_NAME' => 0,
    'STYLES' => 0,
    'cssModel' => 0,
    'SKIN_PATH' => 0,
    'LANGUAGE' => 0,
    'LANGUAGE_STRINGS' => 0,
    'CURRENT_USER_MODEL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5909fc656b9a4')) {function content_5909fc656b9a4($_smarty_tpl) {?>
<!DOCTYPE html><html><head><title><?php echo vtranslate($_smarty_tpl->tpl_vars['PAGETITLE']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</title><link rel="manifest" href="/manifest.json"><meta name="format-detection" content="telephone=no"><link REL="SHORTCUT ICON" HREF="layouts/vlayout/skins/images/favicon.ico"><meta name="viewport" content="width=device-width, initial-scale=1"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><link rel="stylesheet" href="libraries/jquery/chosen/chosen.css" type="text/css" media="screen" /><link rel="stylesheet" href="libraries/jquery/jquery-ui/css/custom-theme/jquery-ui-1.8.16.custom.css" type="text/css" media="screen" /><link rel="stylesheet" href="libraries/jquery/select2/select2.css" type="text/css" media="screen" /><link rel="stylesheet" href="libraries/bootstrap/css/bootstrap.css" type="text/css" media="screen" /><link rel="stylesheet" href="libraries/bootstrap/css/jqueryBxslider.css" type="text/css" media="screen" /><link rel="stylesheet" href="resources/styles.css" type="text/css" media="screen" /><link rel="stylesheet" href="libraries/jquery/posabsolute-jQuery-Validation-Engine/css/validationEngine.jquery.css" /><link rel="stylesheet" href="libraries/jquery/select2/select2.css" /><link rel="stylesheet" href="libraries/guidersjs/guiders-1.2.6.css"/><link rel="stylesheet" href="libraries/jquery/pnotify/jquery.pnotify.default.css"/><link rel="stylesheet" href="libraries/jquery/pnotify/use for pines style icons/jquery.pnotify.default.icons.css"/><link rel="stylesheet" media="screen" type="text/css" href="libraries/jquery/datepicker/css/datepicker.css" /><?php  $_smarty_tpl->tpl_vars['cssModel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cssModel']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['STYLES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cssModel']->key => $_smarty_tpl->tpl_vars['cssModel']->value){
$_smarty_tpl->tpl_vars['cssModel']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['cssModel']->key;
?><link rel="<?php echo $_smarty_tpl->tpl_vars['cssModel']->value->getRel();?>
" href="<?php echo vresource_url($_smarty_tpl->tpl_vars['cssModel']->value->getHref());?>
" type="<?php echo $_smarty_tpl->tpl_vars['cssModel']->value->getType();?>
" media="<?php echo $_smarty_tpl->tpl_vars['cssModel']->value->getMedia();?>
" /><?php } ?><script type="text/javascript" src="libraries/jquery/jquery.min.js"></script><script src="app.js"></script><!--[if IE]><script type="text/javascript" src="libraries/html5shim/html5.js"></script><script type="text/javascript" src="libraries/html5shim/respond.js"></script><![endif]--></head><body data-skinpath="<?php echo $_smarty_tpl->tpl_vars['SKIN_PATH']->value;?>
" data-language="<?php echo $_smarty_tpl->tpl_vars['LANGUAGE']->value;?>
"><div id="js_strings" class="hide noprint"><?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['LANGUAGE_STRINGS']->value);?>
</div><?php $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL'] = new Smarty_variable(Users_Record_Model::getCurrentUserModel(), null, 0);?><input type="hidden" id="start_day" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('dayoftheweek');?>
" /><input type="hidden" id="row_type" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('rowheight');?>
" /><input type="hidden" id="current_user_id" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('id');?>
" /><div id="page"><!-- container which holds data temporarly for pjax calls --><div id="pjaxContainer" class="hide noprint"></div><script>if ('serviceWorker' in navigator) {window.addEventListener('load', () => {navigator.serviceWorker.register('/sw.js').then((reg) => {console.log('Service worker registered.', reg);});});}</script>
<?php }} ?>