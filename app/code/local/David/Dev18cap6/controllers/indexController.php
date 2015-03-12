<?php
/**
 * Created by PhpStorm.
 * User: v1t0
 * Date: 2/17/15
 * Time: 1:21 PM
 */

class David_Dev18cap6_IndexController extends Mage_Core_Controller_Front_Action{
    public function indexAction(){
        echo "hola cap6";
    }
    public function subscriptionAction(){
        echo "subscribtion";
        $subscription = Mage::getModel('dev18cap6/subscription');
        echo "<br>".get_class($subscription);
        $subscription->setFirstname('David');
        $subscription->setLastname('Velasquez');
        $subscription->setEmail('jdavidvr@hotmail.com');
        $subscription->setMessage('this is a short message to test model created');
        $subscription->save();
        echo "<br>success";
    }
}