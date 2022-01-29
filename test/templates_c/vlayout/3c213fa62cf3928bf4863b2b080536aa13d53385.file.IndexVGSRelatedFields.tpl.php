<?php /* Smarty version Smarty-3.1.7, created on 2021-09-25 18:01:00
         compiled from "/var/www/html/ar.e-egar.com/includes/runtime/../../layouts/vlayout/modules/VGSRelatedFields/IndexVGSRelatedFields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19258897345ffb94068fdbc0-28389968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c213fa62cf3928bf4863b2b080536aa13d53385' => 
    array (
      0 => '/var/www/html/ar.e-egar.com/includes/runtime/../../layouts/vlayout/modules/VGSRelatedFields/IndexVGSRelatedFields.tpl',
      1 => 1620549542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19258897345ffb94068fdbc0-28389968',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5ffb9406933e6',
  'variables' => 
  array (
    'MODULE' => 0,
    'ENTITY_MODULES' => 0,
    'MODULE1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ffb9406933e6')) {function content_5ffb9406933e6($_smarty_tpl) {?>

<script type="text/javascript" src="layouts/vlayout/modules/VGSRelatedFields/resources/VGSRelatedFields.js"></script>

<div style="width: 65%;margin: auto;margin-top: 2em;padding: 2em;">
    <h3 style="padding-bottom: 1em;text-align: center"><?php echo vtranslate('vgs_fieldrelatedmodule',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3>
    <div class="row" style="margin: 1em;">


        <div class="alert alert-warning" style="float: left;margin-left:1em !important; margin-bottom: 0px !important;margin-top: 0px !important;width: 80%;">
            <?php echo vtranslate('notice',$_smarty_tpl->tpl_vars['MODULE']->value);?>

        </div>

    </div>


    <div>
        <h4 style="margin-top: 4em;margin-bottom: 0.5em;"><?php echo vtranslate('add_new_related_field',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h4>
        <p><?php echo vtranslate('add_new_related_field_explain',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</p>
        <table class="table table-bordered table-condensed themeTableColor" style="margin-top: 1em;">
            <thead>
                <tr class="blockHeader">
                    <th colspan="4" class="mediumWidthType"><span class="alignMiddle"><?php echo vtranslate('add_new_related_field',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td width="50%" colspan="2"><label class="muted pull-right marginRight10px"><?php echo vtranslate('module1',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td>
                    <td colspan="2" style="border-left: none;">
                        <select name="module1" id="module1">
                            <option value="-">--</option>
                            <?php  $_smarty_tpl->tpl_vars['MODULE1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODULE1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ENTITY_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE1']->key => $_smarty_tpl->tpl_vars['MODULE1']->value){
$_smarty_tpl->tpl_vars['MODULE1']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['MODULE1']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE1']->value);?>
</option>
                            <?php } ?>
                        </select>    
                    </td>
                </tr>
                <tr>
                    <td width="50%" colspan="2"><label class="muted pull-right marginRight10px"><?php echo vtranslate('block',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td>
                    <td colspan="2" style="border-left: none;">
                        <select name="block" id="block">
                            <option value="-">--</option>

                        </select>
                    </td>
                </tr>
                <tr>
                    <td width="50%" colspan="2"><label class="muted pull-right marginRight10px"> <?php echo vtranslate('fields_label',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td>
                    <td colspan="2" style="border-left: none;">
                        <input type="text" id="field_label">
                    </td>
                </tr>
                <tr>
                    <td width="50%" colspan="2"><label class="muted pull-right marginRight10px"><?php echo vtranslate('module2',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td>
                    <td colspan="2" style="border-left: none;">
                        <select name="module2" id="module2">
                            <option value="-">--</option>
                            <?php  $_smarty_tpl->tpl_vars['MODULE1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODULE1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ENTITY_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE1']->key => $_smarty_tpl->tpl_vars['MODULE1']->value){
$_smarty_tpl->tpl_vars['MODULE1']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['MODULE1']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE1']->value);?>
</option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td width="25%"><label class="muted pull-right marginRight10px"><?php echo vtranslate('add_related_list',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td>
                    <td style="border-left: none;">
                        <select name="add_related_list" id="add_related">
                            <option value="-">--</option>
                            <option value="yes"><?php echo vtranslate('yes',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>
                            <option value="no"><?php echo vtranslate('no',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>
                        </select>
                    </td>
                    <td width="25%"><label class="muted pull-right marginRight10px"><?php echo vtranslate('related_list_label',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td>
                    <td style="border-left: none;">
                       <input type="text" id="related_list_label">
                    </td>
                </tr>

            </tbody>
        </table>
        <br><br>
          <div class="alert alert-error notices" id="error_notice" style="display:none;float: left;margin-left:1em !important; margin-bottom: 0px !important;margin-top: 0px !important;width: 80%;">
            <?php echo vtranslate('fail',$_smarty_tpl->tpl_vars['MODULE']->value);?>

        </div>
          <div class="alert alert-success notices" id="success_message" style="display:none;float: left;margin-left:1em !important; margin-bottom: 0px !important;margin-top: 0px !important;width: 80%;">
            <?php echo vtranslate('works',$_smarty_tpl->tpl_vars['MODULE']->value);?>

        </div>
          <div class="alert alert-error notices" id="duplicate_error" style="display:none;float: left;margin-left:1em !important; margin-bottom: 0px !important;margin-top: 0px !important;width: 80%;">
            <?php echo vtranslate('duplicated-error',$_smarty_tpl->tpl_vars['MODULE']->value);?>

        </div>
         <div class="alert alert-error notices" id="field-already-there" style="display:none;float: left;margin-left:1em !important; margin-bottom: 0px !important;margin-top: 0px !important;width: 80%;">
            <?php echo vtranslate('field-already-there',$_smarty_tpl->tpl_vars['MODULE']->value);?>

        </div>
        
        <button class="btn pull-right" style="margin-bottom: 0.5em;" id="add_related_field"><?php echo vtranslate('save',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button>

    </div>
</div>
<?php }} ?>