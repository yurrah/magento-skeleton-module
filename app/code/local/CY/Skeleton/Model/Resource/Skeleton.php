<?php
/**
 * Skeleton resource model
 *
 * @category    CY
 * @package     CY_Skeleton
 * @author      richard@codingyurrah.com
 */
class CY_Skeleton_Model_Resource_Skeleton extends Mage_Core_Model_Resource_Db_Abstract
{
    /**
     * Initialize resource model
     */
    protected function _construct()
    {
        $this->_init('skeleton/bones', 'id');
    }
    
    /**
     * Get hit count
     *
     * @return int
     */
    public function getHitCount()
    {
        $select = $this->getReadConnection()->select()
            ->from(
                array('main_table' => $this->getMainTable()),
                array(new Zend_Db_Expr('COUNT(main_table.hit_count)'))
            );

        $counts = $this->getReadConnection()->fetchOne($select);

        return intval($counts);
    }
}