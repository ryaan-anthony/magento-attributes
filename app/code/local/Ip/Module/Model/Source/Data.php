<?php 

class Ip_Module_Model_Source_Data extends Mage_Eav_Model_Entity_Attribute_Source_Abstract
{
    public function getAllOptions()
    {
        if (!$this->_options) {
            $this->_options = array(
                array(
                    'value' => '',
                    'label' => '',
                ),
                array(
                    'value' => '1',
                    'label' => 'One',
                ),
                array(
                    'value' => '2',
                    'label' => 'Two',
                ),
                array(
                    'value' => '3',
                    'label' => 'Three',
                ),
                array(
                    'value' => '4',
                    'label' => 'Four',
                )
            );
        }
        return $this->_options;
    }
}