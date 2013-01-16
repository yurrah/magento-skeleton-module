<?php
/**
 * @category    CY
 * @package     CY_Skeleton
 * @author      richard@codingyurrah.com
 */
class CY_Skeleton_IndexController extends Mage_Core_Controller_Front_Action
{
    
    /**
     * Record the page hit
     * 
     * @return boolean
     */
    public function registerHit()
    {
        if (Mage::getStoreConfig('skeleton/skeleton_options/record_page_hit')) {
            $skeleton = Mage::getModel('skeleton/skeleton');

            $skeleton->setHitCount(1)
                    ->setRandomText(str_shuffle('skeleton bones'))
                    ->setCreatedAt(Varien_Date::now())
                    ->setUpdatedAt(Varien_Date::now());

            $skeleton->save();

            return 1;
        }
        
        return 0;
    }
    
    /**
     * Display your custom page.
     */
    public function indexAction()
    {
        $hitOk = $this->registerHit();
        
        if (!$hitOk) {
            Mage::getSingleton('core/session')->addError('Your page hit has not been recorded');
        }
        
        $this->loadLayout();
        $this->renderLayout();
    }
}
