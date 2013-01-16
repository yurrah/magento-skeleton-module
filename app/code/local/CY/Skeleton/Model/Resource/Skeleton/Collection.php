<?php
/**
 * Skeleton collection
 *
 * @category    CY
 * @package     CY_Skeleton
 * @author      richard@codingyarrah.com
 */
class CY_Skeleton_Model_Resource_Skeleton_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    /**
     * Resource initialization
     */
    protected function _construct()
    {
        $this->_init('skeleton/skeleton');
    }
    
    /**
     * Add a limit to the collection query.
     */
    protected function _beforeLoad()
    {
        $resultLimit = Mage::getStoreConfig('skeleton/skeleton_options/number_of_collection_results');
        if ($resultLimit) {
            $this->setPageSize($resultLimit);
        }
        
        parent::_beforeLoad();
    }
}