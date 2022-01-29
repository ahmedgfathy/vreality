<?php /* Smarty version Smarty-3.1.7, created on 2017-05-14 02:19:42
         compiled from "/var/www/html/cairobrokers/includes/runtime/../../layouts/vlayout/modules/Reports/ChartEditStep3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17257847415917bebe57ac87-57470194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da3fc8b45a59bd17913f6a8f631dad9151129a0b' => 
    array (
      0 => '/var/www/html/cairobrokers/includes/runtime/../../layouts/vlayout/modules/Reports/ChartEditStep3.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17257847415917bebe57ac87-57470194',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'RECORD_ID' => 0,
    'REPORT_MODEL' => 0,
    'PRIMARY_MODULE' => 0,
    'SECONDARY_MODULES' => 0,
    'IS_DUPLICATE' => 0,
    'CHART_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5917bebe5d95d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5917bebe5d95d')) {function content_5917bebe5d95d($_smarty_tpl) {?>
<form class="form-horizontal recordEditView padding1per" id="chart_report_step3" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" ><input type="hidden" name="action" value="ChartSave" ><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" ><input type="hidden" name="reportname" value="<?php echo $_smarty_tpl->tpl_vars['REPORT_MODEL']->value->get('reportname');?>
" ><input type="hidden" name="folderid" value="<?php echo $_smarty_tpl->tpl_vars['REPORT_MODEL']->value->get('folderid');?>
" ><input type="hidden" name="reports_description" value="<?php echo $_smarty_tpl->tpl_vars['REPORT_MODEL']->value->get('reports_description');?>
" ><input type="hidden" name="primary_module" value="<?php echo $_smarty_tpl->tpl_vars['PRIMARY_MODULE']->value;?>
" ><input type="hidden" name="secondary_modules" value=<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['SECONDARY_MODULES']->value);?>
 ><input type="hidden" name="isDuplicate" value="<?php echo $_smarty_tpl->tpl_vars['IS_DUPLICATE']->value;?>
" ><input type="hidden" name="advanced_filter" id="advanced_filter" value="" ><input type="hidden" class="step" value="3" ><input type="hidden" name='groupbyfield' value=<?php echo $_smarty_tpl->tpl_vars['CHART_MODEL']->value->getGroupByField();?>
 ><input type="hidden" name='datafields' value=<?php echo Zend_JSON::encode($_smarty_tpl->tpl_vars['CHART_MODEL']->value->getDataFields());?>
><input type="hidden" name='charttype' value=<?php echo $_smarty_tpl->tpl_vars['CHART_MODEL']->value->getChartType();?>
><div class="padding1per border1px"><div class="row-fluid"><div><div><h4><strong><?php echo vtranslate('LBL_SELECT_CHART_TYPE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></h4></div><br><div><div><ul class="nav nav-tabs" name="charttab" style="text-align:center;font-size:14px;font-weight: bold;margin:0 3%;border:0px"><li class="active marginRight5px" ><a data-type="pieChart" data-toggle="tab"><div><img src="<?php echo vimage_path('pie.PNG');?>
" style="border:1px solid #ccc;"/></div><br><div><?php echo vtranslate('LBL_PIE_CHART',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div></a></li><li class="marginRight5px"><a data-type="verticalbarChart" data-toggle="tab"><div><img src="<?php echo vimage_path('vbar.PNG');?>
" style="border:1px solid #ccc;"/></div><br><div><?php echo vtranslate('LBL_VERTICAL_BAR_CHART',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div></a></li><li class="marginRight5px"><a data-type="horizontalbarChart" data-toggle="tab"><div><img src="<?php echo vimage_path('hbar.PNG');?>
" style="border:1px solid #ccc;"/></div><br><div><?php echo vtranslate('LBL_HORIZONTAL_BAR_CHART',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div></a></li><li class="marginRight5px" ><a data-type="lineChart" data-toggle="tab"><div><img src="<?php echo vimage_path('line.PNG');?>
" style="border:1px solid #ccc;"/></div><br><div><?php echo vtranslate('LBL_LINE_CHART',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div></a></li></ul><div class='tab-content contentsBackground' style="height:auto;padding:4%;border:1px solid #ccc;"><br><div class="row-fluid tab-pane active"><div><span class="span4"><div><span><?php echo vtranslate('LBL_SELECT_GROUP_BY_FIELD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span><span class="redColor">*</span></div><br><div class="row-fluid"><select id='groupbyfield' name='groupbyfield' class="span10 validate[required]" data-validation-engine="validate[required]" style='min-width:300px;'></select></div></span><span class="span2">&nbsp;</span><span class="span4"><div><span><?php echo vtranslate('LBL_SELECT_DATA_FIELD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span><span class="redColor">*</span></div><br><div class="row-fluid"><select id='datafields' name='datafields[]' class="span10 validate[required]" data-validation-engine="validate[required]" style='min-width:300px;'></select></div></span></div></div><div class='row-fluid alert-info well' style="position: relative; top: 50px;width:95%"><span class='span alert-info'><div><i class="icon-info-sign"></i>&nbsp;&nbsp;<?php echo vtranslate('LBL_PLEASE_SELECT_ATLEAST_ONE_GROUP_FIELD_AND_DATA_FIELD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><br><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo vtranslate('LBL_FOR_BAR_GRAPH_AND_LINE_GRAPH_SELECT_3_MAX_DATA_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div></span></div></div></div></div><div class='hide'><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("chartReportHiddenContents.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div></div></div><br><div class="pull-right block padding20px"><button type="button" class="btn btn-danger backStep"><strong><?php echo vtranslate('LBL_BACK',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button>&nbsp;&nbsp;<button type="submit" class="btn btn-success" id="generateReport"><strong><?php echo vtranslate('LBL_GENERATE_CHART',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button>&nbsp;&nbsp;<a  class="cancelLink" onclick="window.history.back()"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a>&nbsp;&nbsp;<br></div></form><?php }} ?>