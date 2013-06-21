<?php
	$installer = $this;
	$installer->installEntities();

	$installer->startSetup();

	// add customer attributes to forms
	$entity_type_id = $installer->getEntityTypeId('customer');
	$table_name = $installer->getTable('customer/form_attribute');

	$editable_attributes = array(
		'ATTRIBUTE_CODE' => array(
			'adminhtml_customer', // admin > customer > edit > "Account Information"
			'customer_account_create', // (based on theme) frontend > register
			'customer_account_edit' // (based on theme) frontend > customer > account > edit > "Account Information"
		)
	);

	foreach($editable_attributes as $attribute_code => $forms){
		$attribute = Mage::getModel('eav/entity_attribute')->loadByCode($entity_type_id, $attribute_code);
		$attribute_id = $attribute->getId();
		foreach($forms as $form){
			$installer->run("
			    INSERT INTO `{$table_name}` 
			    VALUES ('{$form}','{$attribute_id}');
			");
		}
	}

	$installer->endSetup();