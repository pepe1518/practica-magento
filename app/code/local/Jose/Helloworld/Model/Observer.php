<?php
class Jose_Helloworld_Model_Observer
{
    public function registerVisit(Varien_Event_observer $observer) {
        Mage::log('registered');
    }
}
