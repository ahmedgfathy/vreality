<?php /* Smarty version Smarty-3.1.7, created on 2019-12-02 06:28:37
         compiled from "/var/www/html/egar/includes/runtime/../../layouts/vlayout/modules/Vtiger/dashboards/CalendarActivitiesContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1997197285de4af156f0063-57165062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c835594528f9ab513ead91c6cc82366b4a129e8' => 
    array (
      0 => '/var/www/html/egar/includes/runtime/../../layouts/vlayout/modules/Vtiger/dashboards/CalendarActivitiesContents.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1997197285de4af156f0063-57165062',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ACTIVITIES' => 0,
    'ACTIVITY' => 0,
    'PARENT_ID' => 0,
    'CONTACT_ID' => 0,
    'REQUEST_NAME' => 0,
    'MODULE_NAME' => 0,
    'PAGING' => 0,
    'WIDGET' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5de4af157073e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5de4af157073e')) {function content_5de4af157073e($_smarty_tpl) {?>

<div>
	<?php  $_smarty_tpl->tpl_vars['ACTIVITY'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ACTIVITY']->_loop = false;
 $_smarty_tpl->tpl_vars['INDEX'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ACTIVITIES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ACTIVITY']->key => $_smarty_tpl->tpl_vars['ACTIVITY']->value){
$_smarty_tpl->tpl_vars['ACTIVITY']->_loop = true;
 $_smarty_tpl->tpl_vars['INDEX']->value = $_smarty_tpl->tpl_vars['ACTIVITY']->key;
?>
	<div>
		<div class='pull-left'>
			<?php if ($_smarty_tpl->tpl_vars['ACTIVITY']->value->get('activitytype')=='Task'){?>
				<image src="<?php echo vimage_path('Tasks.png');?>
" width="24px"/>&nbsp;&nbsp;
			<?php }else{ ?>
				<image src="<?php echo vimage_path('Calendar.png');?>
" width="24px" />&nbsp;&nbsp;
			<?php }?>
		</div>
		<div>
			<div class='pull-left' style='margin-top:5px'>
				<?php $_smarty_tpl->tpl_vars['PARENT_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['ACTIVITY']->value->get('parent_id'), null, 0);?>
				<?php $_smarty_tpl->tpl_vars['CONTACT_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['ACTIVITY']->value->get('contact_id'), null, 0);?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['ACTIVITY']->value->getDetailViewUrl();?>
"><?php echo $_smarty_tpl->tpl_vars['ACTIVITY']->value->get('subject');?>
</a><?php if ($_smarty_tpl->tpl_vars['PARENT_ID']->value){?> <?php echo vtranslate('LBL_FOR');?>
 <?php echo $_smarty_tpl->tpl_vars['ACTIVITY']->value->getDisplayValue('parent_id');?>
<?php }elseif($_smarty_tpl->tpl_vars['CONTACT_ID']->value){?> <?php echo vtranslate('LBL_FOR');?>
 <?php echo $_smarty_tpl->tpl_vars['ACTIVITY']->value->getDisplayValue('contact_id');?>
<?php }?>
			</div>
				<?php $_smarty_tpl->tpl_vars['START_DATE'] = new Smarty_variable($_smarty_tpl->tpl_vars['ACTIVITY']->value->get('date_start'), null, 0);?>
				<?php $_smarty_tpl->tpl_vars['START_TIME'] = new Smarty_variable($_smarty_tpl->tpl_vars['ACTIVITY']->value->get('time_start'), null, 0);?>
				
				<?php $_smarty_tpl->tpl_vars['DUE_DATE'] = new Smarty_variable($_smarty_tpl->tpl_vars['ACTIVITY']->value->get('due_date'), null, 0);?>
				<?php $_smarty_tpl->tpl_vars['DUE_TIME'] = new Smarty_variable($_smarty_tpl->tpl_vars['ACTIVITY']->value->get('time_end'), null, 0);?>
			<p class='pull-right muted' style='margin-top:5px;padding-right:5px;'><small title="<?php echo Vtiger_Util_Helper::formatDateTimeIntoDayString(($_smarty_tpl->tpl_vars['START_DATE']->value)." ".($_smarty_tpl->tpl_vars['START_TIME']->value));?>
 <?php echo vtranslate('LBL_TO');?>
 <?php echo Vtiger_Util_Helper::formatDateTimeIntoDayString(($_smarty_tpl->tpl_vars['DUE_DATE']->value)." ".($_smarty_tpl->tpl_vars['DUE_TIME']->value));?>
"><?php echo Vtiger_Util_Helper::formatDateDiffInStrings(($_smarty_tpl->tpl_vars['START_DATE']->value)." ".($_smarty_tpl->tpl_vars['START_TIME']->value));?>
</small></p>
			<div class='clearfix'></div>
		</div>
		<div class='clearfix'></div>
	</div>
	<?php }
if (!$_smarty_tpl->tpl_vars['ACTIVITY']->_loop) {
?>
		<span class="noDataMsg">
                    <?php ob_start();?><?php echo getPurifiedSmartyParameters('name');?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['REQUEST_NAME'] = new Smarty_variable($_tmp1, null, 0);?>
			<?php if ($_smarty_tpl->tpl_vars['REQUEST_NAME']->value=='OverdueActivities'){?>
				<?php echo vtranslate('LBL_NO_OVERDUE_ACTIVITIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>

			<?php }else{ ?>
				<?php echo vtranslate('LBL_NO_SCHEDULED_ACTIVITIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>

			<?php }?>
		</span>
	<?php } ?>

<?php if ($_smarty_tpl->tpl_vars['PAGING']->value->get('nextPageExists')=='true'){?>
	<div class='pull-right' style='margin-top:5px;padding-right:5px;'>
        <a href="javascript:;" name="history_more" data-url="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getUrl();?>
&page=<?php echo $_smarty_tpl->tpl_vars['PAGING']->value->getNextPage();?>
"><?php echo vtranslate('LBL_MORE');?>
...</a>
        <br />
        <br />
        <br />
        <br />
	</div>
<?php }else{ ?>
    <br />
    <br />
    <br />
    <br />
<?php }?>
</div><?php }} ?>