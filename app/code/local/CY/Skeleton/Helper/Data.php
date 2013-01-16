<?php
/**
 * Skeleton Data Helper
 *
 * @category   CY
 * @package    CY_Skeleton
 * @author     richard@codingyurrah.com
 */
class CY_Skeleton_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * Convert a MySQL datetime value into the following date format:
     * D j F Y @ H:i:s (e.g. Monday 3 January 2013 @ 22:13:57)
     * 
     * @param string $datetime
     * @return string $formattedDate
     */
    public function formatDate($datetime)
    {
        $date = new DateTime($datetime);
        $formattedDate = $date->format('D j F Y @ H:i:s');
        
        return $formattedDate;
    }
}