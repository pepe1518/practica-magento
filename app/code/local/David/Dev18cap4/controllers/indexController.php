<?php
/**
 * Created by PhpStorm.
 * User: v1t0
 * Date: 2/15/15
 * Time: 5:13 PM
 */

class David_Dev18cap4_IndexController extends Mage_Core_Controller_Front_Action{
    public function indexAction(){
        $this->loadLayout();
        $this->renderLayout();
        echo $this->__('David');
    }

    public function helloAction(){
        $this->loadLayout();
        $this->renderLayout();
        echo "hello...!!!";
    }
}