<?php
/**
 * @category    CY
 * @package     CY_Skeleton
 * @author      richard@codingyurrah.com
 */

/* @var $installer CY_Skeleton_Model_Resource_Setup */
$installer = $this;
$installer->startSetup();

/**
 * Create table 'skeleton/bones'
 * Mage_Core_Model_Resource_Setup::getConnection() > $this->_conn = Varien_Db_Adapter_Pdo_Mysql
 */
$table = $installer->getConnection()
    ->newTable($installer->getTable('skeleton/bones'))
    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'unsigned'  => true,
        'nullable'  => false,
        'primary'   => true,
        'auto_increment' => true,
        ), 'Id')
    ->addColumn('hit_count', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'unsigned'  => true,
        'nullable'  => false,
        'default'   => '0',
        ), 'Hit Count')
    ->addColumn('random_text', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array(
        ), 'Random Text')    
    ->addColumn('created_at', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(
        'nullable'  => false,
        ), 'Created At')
    ->addColumn('updated_at', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(
        'nullable'  => false,
        ), 'Updated At');
$installer->getConnection()->createTable($table);

$installer->endSetup();

// insert a record
$installer->getConnection()->insertForce($installer->getTable('skeleton/bones'), array(
    'hit_count'     => 0,
    'random_text'   => 'skeleton bones',
    'created_at'    => Varien_Date::now(),
    'updated_at'    => Varien_Date::now(),
));