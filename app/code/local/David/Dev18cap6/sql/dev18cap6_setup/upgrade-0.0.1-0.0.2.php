<?php
////test if the DB conecction is working with this code
////die('upgrade 0.0.1-0.0.2');

$installer = $this;
//echo "inicia creacion tabla";
$installer->startSetup();
$table = $installer->getConnection()
    ->newTable($installer->getTable('dev18cap6/subscription'))
    ->addColumn('subscription_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'unsigned'  => true,
        'nullable'  => false,
        'primary'   => true,
    ), 'Subscription id')
    ->addColumn('created_at', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(
        'nullable'  => false,
    ), 'Created at')
    ->addColumn('updated_at', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(
        'nullable'  => false,
    ), 'Updated at')
    ->addColumn('firstname', Varien_Db_Ddl_Table::TYPE_TEXT, 64, array(
        'nullable'  => false,
    ), 'First name')
    ->addColumn('email', Varien_Db_Ddl_Table::TYPE_TEXT, 64, array(
        'nullable'  => false,
    ), 'Email address')
    ->addColumn('status', Varien_Db_Ddl_Table::TYPE_TEXT, 32, array(
        'nullable'  => false,
        'default'   => 'pending',
    ), 'Status')
    ->addColumn('message', Varien_Db_Ddl_Table::TYPE_TEXT, '64k', array(
        'unsigned'  => true,
        'nullable'  => false,
    ), 'Subscription notes')
    ->addIndex($installer->getIdxName('dev18cap6/subscription', array('email')),
        array('email'))
    ->setComment('Dev18cap6 subscriptions');
$installer->getConnection()->createTable($table);
$installer->endSetup();
