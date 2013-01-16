<?php
/**
 * Skeleton model
 *
 * @category    CY
 * @package     CY_Skeleton
 * @author      richard@codingyurrah.com
 */
class CY_Skeleton_Model_Skeleton extends Mage_Core_Model_Abstract
{
    /**
     * Initialize resource model
     */
    protected function _construct()
    {
        $this->_init('skeleton/skeleton');
    }
    
    /**
     * Connect to the resource model and return the hit count.
     * 
     * @return integer $count
     */
    public function getHitCount()
    {
        $count = $this->_getResource()->getHitCount($this);
        $this->setData('hit_count', $count);
        
        return $count;
    }
}