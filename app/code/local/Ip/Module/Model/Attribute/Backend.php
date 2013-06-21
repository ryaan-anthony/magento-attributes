<?php 

class Ip_Module_Model_Attribute_Backend extends Mage_Eav_Model_Entity_Attribute_Backend_Abstract 
{
	
	public function beforeSave($object)
	{		
		// $attribute = $object->getData('ATTRIBUTE_CODE');
		// do something to $attribute
		// $object->setData('ATTRIBUTE_CODE', $attribute);
		return $this;
	}
	
}