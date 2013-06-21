<?php

/* EXAMPLES:
	'type'
		varchar
		text
		int
		datetime
		decimal
	'input'
		boolean
		date
		gallery
		hidden
		image
		media_image
		multiline
		multiselect
		price
		select
		text
		textarea
		weight
	'source'
		catalog/product_status
		catalog/product_visibility
		core/design_source_design
		customer/customer_attribute_source_group
		customer/entity_address_attribute_source_country
		customer/entity_address_attribute_source_region
		eav/entity_attribute_source_boolean
		eav/entity_attribute_source_table
		tax/class_source_product
*/

class Ip_Module_Model_Setup extends Mage_Eav_Model_Entity_Setup
{

	public function getDefaultEntities()
	{ 
		return array(
			'catalog_product' => array(
				'entity_model'      => 'catalog/product',
				'attribute_model'   => 'catalog/resource_eav_attribute',
				'table'             => 'catalog/product',
				'additional_attribute_table' => 'catalog/eav_attribute',
				'entity_attribute_collection' => 'catalog/product_attribute_collection',
				'attributes'        => array(
					/*'ATTRIBUTE_CODE' => array(
						'attribute_set'     => 'Default',
						'group'             => 'General',
						'label'             => 'ATTRIBUTE_LABEL',
						'type'              => 'varchar',
						'input'             => 'select',
						'default'           => '',
						'class'             => '',
						'backend'           => 'module/attribute_backend',
						'frontend'          => '',
						'source'            => 'module/source_data',                    
						'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
						'visible'           => true,
						'required'          => false,
						'user_defined'      => false,
						'searchable'        => true,
						'filterable'        => true,
						'comparable'        => false,
						'visible_on_front'  => true,
						'visible_in_advanced_search' => false,
						'unique'            => false
					)*/
			   )
		   ),
			'customer' => array(
				'entity_model'      => 'customer/customer',
				'attribute_model'   => 'customer/attribute',
				'table'             => 'customer/entity',
				'additional_attribute_table' => 'customer/eav_attribute',
				'entity_attribute_collection' => 'customer/attribute_collection',
				'attributes'        => array(
					/*'ATTRIBUTE_CODE' => array(
						'label'             => 'ATTRIBUTE_LABEL',
						'type'              => 'varchar',
						'input'             => 'text',
						'default'           => '',
						'backend'           => '',
						'frontend'          => '',
						'class'             => '',
						'source'            => '',                    
						'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
						'visible'           => true,
						'required'          => false,
						'user_defined'      => true,
						'searchable'        => true,
						'filterable'        => true,
						'comparable'        => false,
						'visible_on_front'  => false,
						'unique'            => false

					)*/
				)
			)
		);
	}
	
}