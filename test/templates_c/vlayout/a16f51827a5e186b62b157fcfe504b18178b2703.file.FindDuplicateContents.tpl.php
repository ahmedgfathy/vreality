<?php /* Smarty version Smarty-3.1.7, created on 2019-11-29 21:10:18
         compiled from "/var/www/html/egar/includes/runtime/../../layouts/vlayout/modules/Vtiger/FindDuplicateContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15470899735de1893a7583c2-36999712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a16f51827a5e186b62b157fcfe504b18178b2703' => 
    array (
      0 => '/var/www/html/egar/includes/runtime/../../layouts/vlayout/modules/Vtiger/FindDuplicateContents.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15470899735de1893a7583c2-36999712',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LISTVIEW_ENTRIES_COUNT' => 0,
    'PAGING_MODEL' => 0,
    'PAGE_NUMBER' => 0,
    'DUPLICATE_SEARCH_FIELDS' => 0,
    'VIEW_NAME' => 0,
    'TOTAL_COUNT' => 0,
    'IGNORE_EMPTY' => 0,
    'MODULE' => 0,
    'LISTVIEW_HEADERS' => 0,
    'LISTVIEW_HEADER' => 0,
    'LISTVIEW_ENTRIES' => 0,
    'LISTVIEW_ENTRY' => 0,
    'RECORD' => 0,
    'MODULE_MODEL' => 0,
    'GROUP_NAME' => 0,
    'recordCount' => 0,
    'groupCount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5de1893a7795d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5de1893a7795d')) {function content_5de1893a7795d($_smarty_tpl) {?>
<input type="hidden" id="listViewEntriesCount" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value;?>
" />
<input type="hidden" id="pageStartRange" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordStartRange();?>
" />
<input type="hidden" id="pageEndRange" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordEndRange();?>
" />
<input type="hidden" id="previousPageExist" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isPrevPageExists();?>
" />
<input type="hidden" id="nextPageExist" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isNextPageExists();?>
" />
<input type="hidden" id="pageNumber" value= "<?php echo $_smarty_tpl->tpl_vars['PAGE_NUMBER']->value;?>
"/>
<input type="hidden" id="pageLimit" value= "<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getPageLimit();?>
" />
<input type="hidden" id="noOfEntries" value= "<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value;?>
" />
<input type="hidden" id="duplicateSearchFields" value=<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['DUPLICATE_SEARCH_FIELDS']->value);?>
 />
<input type="hidden" id="viewName" value="<?php echo $_smarty_tpl->tpl_vars['VIEW_NAME']->value;?>
" />
<input type="hidden" id="totalCount" value="<?php echo $_smarty_tpl->tpl_vars['TOTAL_COUNT']->value;?>
" />
<input type='hidden' id='ignoreEmpty' value="<?php echo $_smarty_tpl->tpl_vars['IGNORE_EMPTY']->value;?>
" />

<div id="selectAllMsgDiv" class="alert-block msgDiv">
	<strong><a id="selectAllMsg"><?php echo vtranslate('LBL_SELECT_ALL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;(<span id="totalRecordsCount"></span>)</a></strong>
</div>
<div id="deSelectAllMsgDiv" class="alert-block msgDiv">
	<strong><a id="deSelectAllMsg"><?php echo vtranslate('LBL_DESELECT_ALL_RECORDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></strong>
</div>
<div class="contents-topscroll">
	<div class="topscroll-div">
		&nbsp;
	 </div>
</div>
<div class="listViewEntriesDiv contents-bottomscroll">
	<table class="table-bordered row-fluid textAlignCenter">
		<thead>
			<tr class="listViewHeaders">
				<th width="5%">
					<input type="checkbox" id="listViewEntriesMainCheckBox" />
				</th>
				<?php  $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->key => $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = true;
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration++;
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration === $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total;
?>
				<th nowrap >
					<a class="listViewHeaderValues"><?php echo vtranslate($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a>
				</th>
				<?php } ?>
				<th><?php echo vtranslate('LBL_MERGE_SELECT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</th>
				<th><?php echo vtranslate('LBL_ACTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</th>
			</tr>
		</thead>
		<?php $_smarty_tpl->tpl_vars['mergeRecordCount'] = new Smarty_variable(0, null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->_loop = false;
 $_smarty_tpl->tpl_vars['GROUP_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->key => $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->_loop = true;
 $_smarty_tpl->tpl_vars['GROUP_NAME']->value = $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->key;
?>
			<?php $_smarty_tpl->tpl_vars['groupCount'] = new Smarty_variable(sizeof($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['recordCount'] = new Smarty_variable(0, null, 0);?>
			<?php  $_smarty_tpl->tpl_vars['RECORD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RECORD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['listview']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['RECORD']->key => $_smarty_tpl->tpl_vars['RECORD']->value){
$_smarty_tpl->tpl_vars['RECORD']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['listview']['index']++;
?>
				<tr class="listViewEntries" data-id='<?php echo $_smarty_tpl->tpl_vars['RECORD']->value['recordid'];?>
' id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_row_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['listview']['index']+1;?>
">
					<td width="5%" style='border-bottom:1px solid #DDD;'>
						<input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value['recordid'];?>
" class="listViewEntriesCheckBox"/>
					</td>
					<?php $_smarty_tpl->tpl_vars['sameRowValues'] = new Smarty_variable(true, null, 0);?>
					<?php  $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->key => $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = true;
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration++;
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration === $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total;
?>
					<?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name')=='recordid'){?>
						<td nowrap style='border-bottom:1px solid #DDD;'>
							<a href="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getDetailViewUrl($_smarty_tpl->tpl_vars['RECORD']->value['recordid']);?>
"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name')];?>
</a>
						</td>
					<?php }else{ ?>
						<td nowrap style='border-bottom:1px solid #DDD;'>
							<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getDisplayValue($_smarty_tpl->tpl_vars['RECORD']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('column')],$_smarty_tpl->tpl_vars['RECORD']->value['recordid']);?>

						</td>
					<?php }?>
					<?php } ?>
					<td style='border-bottom:1px solid #DDD;'>
						<input type="checkbox" data-id='<?php echo $_smarty_tpl->tpl_vars['RECORD']->value['recordid'];?>
' name="mergeRecord" data-group="<?php echo $_smarty_tpl->tpl_vars['GROUP_NAME']->value;?>
"/>
					</td>
					<?php if ($_smarty_tpl->tpl_vars['recordCount']->value==0){?>
					<td align='center' rowspan="<?php echo $_smarty_tpl->tpl_vars['groupCount']->value;?>
" style="border-left:1px solid #DDD;border-bottom:1px solid #DDD;vertical-align: middle;text-align: center">
						<input type="button" value="<?php echo vtranslate("LBL_MERGE",'Vtiger');?>
" name="merge" class="btn btn-success" data-group="<?php echo $_smarty_tpl->tpl_vars['GROUP_NAME']->value;?>
">
					</td>
					<?php }?>
					<?php $_smarty_tpl->tpl_vars['recordCount'] = new Smarty_variable($_smarty_tpl->tpl_vars['recordCount']->value+1, null, 0);?>
				</tr>
			<?php } ?>
		<?php } ?>
	</table>
	<?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value=='0'){?>
	<table class="emptyRecordsDiv">
		<tbody>
			<tr>
				<td>
					<?php $_smarty_tpl->tpl_vars['SINGLE_MODULE'] = new Smarty_variable("SINGLE_".($_smarty_tpl->tpl_vars['MODULE']->value), null, 0);?>
					<?php echo vtranslate('LBL_NO_DUPLICATED_FOUND',$_smarty_tpl->tpl_vars['MODULE']->value);?>

				</td>
			</tr>
		</tbody>
	</table>
	<?php }?>
	</div>
<?php }} ?>