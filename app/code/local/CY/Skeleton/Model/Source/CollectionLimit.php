<?php
/**
 * @category    CY
 * @package     CY_Skeleton
 * @author      richard@codingyurrah.com
 */
class CY_Skeleton_Model_Source_CollectionLimit
{
    /**
     * Set the options available in the admin select
     * 
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 0, 'label' => Mage::helper('skeleton')->__('0')),
            array('value' => 5, 'label' => Mage::helper('skeleton')->__('5')),
            array('value' => 10, 'label' => Mage::helper('skeleton')->__('10')),
            array('value' => 20, 'label' => Mage::helper('skeleton')->__('20')),
        );
    }
}
