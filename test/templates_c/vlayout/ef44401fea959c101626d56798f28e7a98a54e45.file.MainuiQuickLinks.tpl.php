<?php /* Smarty version Smarty-3.1.7, created on 2021-11-01 13:02:30
         compiled from "/var/www/html/ar.e-egar.com/includes/runtime/../../layouts/vlayout/modules/MailManager/MainuiQuickLinks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12616726895e62849e2f7061-37970739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef44401fea959c101626d56798f28e7a98a54e45' => 
    array (
      0 => '/var/www/html/ar.e-egar.com/includes/runtime/../../layouts/vlayout/modules/MailManager/MainuiQuickLinks.tpl',
      1 => 1620549542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12616726895e62849e2f7061-37970739',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5e62849e305dc',
  'variables' => 
  array (
    'MAILBOX' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e62849e305dc')) {function content_5e62849e305dc($_smarty_tpl) {?>

<br><div class="quickWidget"><div class="accordion-heading accordion-toggle quickWidgetHeader"><table width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td class="span5"><div class="dashboardTitle textOverflowEllipsis" title="<?php echo vtranslate('LBL_Mailbox','MailManager');?>
"><h5 class="title widgetTextOverflowEllipsis"><?php echo vtranslate('LBL_Mailbox','MailManager');?>
</h5></div></td><td class="widgeticons span5" align="right"><div class="box pull-right"><a href='#Reload' id="_mailfolder_mm_reload" onclick="MailManager.reload_now();"><i alt="Refresh" title="<?php echo vtranslate('LBL_Refresh','MailManager');?>
" align="absmiddle" border="0" hspace="2" class="icon-refresh"></i></a><a href='#Settings' id="_mailfolder_mm_settings" onclick="MailManager.open_settings_detail();"><i alt="Settings" title="<?php echo vtranslate('LBL_SETTINGS','MailManager');?>
" align="absmiddle" border="0" hspace="2" class="icon-cog"></i></a></div></td></tr></tbody></table><div class="clearfix"></div></div><div class="defaultContainer <?php if ($_smarty_tpl->tpl_vars['MAILBOX']->value->exists()==false){?>hide<?php }?>"><div class="widgetContainer accordion-body collapse in"><input type=hidden name="mm_selected_folder" id="mm_selected_folder"><input type="hidden" name="_folder" id="mailbox_folder"><div class="row-fluid"><div class="span12"><ul class="nav nav-list"><li><a href="javascript:void(0);" onclick="MailManager.mail_compose();"><?php echo vtranslate('LBL_Compose','MailManager');?>
</a></li><li><a href="#Drafts" id="_mailfolder_mm_drafts" onclick="MailManager.folder_drafts(0);"><?php echo vtranslate('LBL_Drafts','MailManager');?>
</a></li></ul></div></div></div></div></div>
<?php }} ?>