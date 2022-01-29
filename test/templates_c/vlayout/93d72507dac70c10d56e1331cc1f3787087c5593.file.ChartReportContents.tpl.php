<?php /* Smarty version Smarty-3.1.7, created on 2017-05-14 02:19:56
         compiled from "/var/www/html/cairobrokers/includes/runtime/../../layouts/vlayout/modules/Reports/ChartReportContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6771429955917becc520792-83046463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93d72507dac70c10d56e1331cc1f3787087c5593' => 
    array (
      0 => '/var/www/html/cairobrokers/includes/runtime/../../layouts/vlayout/modules/Reports/ChartReportContents.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6771429955917becc520792-83046463',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CHART_TYPE' => 0,
    'DATA' => 0,
    'CLICK_THROUGH' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5917becc52f09',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5917becc52f09')) {function content_5917becc52f09($_smarty_tpl) {?>

<input type='hidden' name='charttype' value="<?php echo $_smarty_tpl->tpl_vars['CHART_TYPE']->value;?>
" />
<input type='hidden' name='data' value='<?php echo $_smarty_tpl->tpl_vars['DATA']->value;?>
' />
<input type='hidden' name='clickthrough' value="<?php echo $_smarty_tpl->tpl_vars['CLICK_THROUGH']->value;?>
" />

<br>
<div style="margin:0px 20px;">
	<div class='border1px' style="padding:30px 100px;">
		<div id='chartcontent' style="min-height:400px;" ></div>
		<br>
		<?php if ($_smarty_tpl->tpl_vars['CLICK_THROUGH']->value!='true'){?>
			<div class='row-fluid alert-info' style="padding:20px">
				<span class='span3 offset4'> &nbsp;</span>
				<span class='span alert-info'>
					<i class="icon-info-sign"></i>
					<?php echo vtranslate('LBL_CLICK_THROUGH_NOT_AVAILABLE',$_smarty_tpl->tpl_vars['MODULE']->value);?>

				</span>
			</div>
			<br>
		<?php }?>
	</div>
</div>
<br>
<?php }} ?>