<?php
///**
// * Created by PhpStorm.
// * User: v1t0
// * Date: 2/17/15
// * Time: 1:56 PM
// */
////test if the DB conecction is working with this code
////die('dev18cap6 BD 0.0.1');
//
////code to create DB
$installer = $this;
$installer->startSetup();
$installer->addAttribute('catalog_product','helloworld_label',array(
        'group'  => 'Dev18cap6 Group',
        'type'  => 'varchar',
        'label'  => 'Dev18cap6 label',
        'input'  => 'text',
        'global'  => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'visible'  => true,
        'required'  => false,
        'searchable'  => false,
        'filterable'  => false,
        'comparable'  => false,
        'visible_on_front'  => true,
        'unique'  => false,
        'apply_to'  => 'simple,configurable,virtual,bundle,downloable',
        'is_configurable'  => false
    )
);
$installer->endSetup();