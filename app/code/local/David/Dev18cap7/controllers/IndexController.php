<?php
/**
 * Created by PhpStorm.
 * User: v1t0
 * Date: 2/22/15
 * Time: 12:48 AM
 */
class David_Dev18cap7_IndexController extends Mage_Core_Controller_Front_Action{

    public function indexAction(){
        echo Mage::getStoreConfig('dev18cap7/dev18cap7page/header_title');
    }
}