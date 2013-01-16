<?php
/**
 * @category   CY
 * @package    CY_Skeleton
 * @author     richard@codingyurrah.com
 */
class CY_Skeleton_Block_Skeleton extends Mage_Core_Block_Template
{
    /**
     * Could possibly set the template for this block in the constructor.
     * Two possible methods below.
     * For this example we have set the template in the design xml file.
     */
    public function __construct()
    {
        parent::__construct();
        
        //$this->setTemplate('skeleton/index.phtml');
        //Mage::app()->getFrontController()->getAction()->getLayout()->getBlock('root')->setHeaderTitle(Mage::helper('skeleton')->__('Skeleton'));
    }
    
    /**
     * Set the page title.
     * 
     * @return Mage_Core_Block_Abstract
     */
    protected function _prepareLayout()
    {
        $this->getLayout()->getBlock('head')->setTitle(Mage::helper('skeleton')->__('Skeleton'));
        return parent::_prepareLayout();
    }
    
    /**
     * Get the total hit count using the skeleton model
     * 
     * @return integer $hits
     */
    public function getHitCount()
    {
        $skeleton = Mage::getSingleton('skeleton/skeleton');
        $hits = $skeleton->getHitCount();
        
        return $hits;
    }
    
    /**
     * Return the record collection to the template.
     * 
     * @return CY_Skeleton_Model_Resource_Skeleton_Collection
     */
    public function getSkeletonCollection()
    {
        $collection = Mage::getModel('skeleton/skeleton')->getResourceCollection();
        //$collection = Mage::getResourceModel('skeleton/skeleton_collection');
        
        $collection->load();
        
        return $collection;
    }
}