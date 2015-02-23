<?php
class David_Dev18cap7_Adminhtml_Dev18cap7_SubscriptionController extends Mage_Adminhtml_Controller_Action{
    public function indexAction(){
        $this->loadLayout();
        $this->_addContent($this->getLayout()->createBlock('dev18cap7/admihtml_subscription'));
        $this->renderLayout();
    }
}