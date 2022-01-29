
<?php
include_once('vtlib/Vtiger/Menu.php'); 
include_once('vtlib/Vtiger/Module.php'); 
$module = Vtiger_Module::getInstance('Products'); 
$blockInstance = Vtiger_Block::getInstance('LBL_PRODUCT_INFORMATION', $module);
$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'SelectYourContact'; 
$fieldInstance->label = 'Select Contact'; 
$fieldInstance->uitype = 10; 
$fieldInstance->typeofdata = 'V~O'; 
$blockInstance->addField($fieldInstance); 
$fieldInstance->setRelatedModules(Array('Contacts')); 
?>