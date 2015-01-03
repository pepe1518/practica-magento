<?php

class Pepe_Nofrills_IndexController extends Mage_Core_Controller_Front_Action {

    public function indexAction() {
        //Zend_Debug::dump(__METHOD__);
        //$block = new Mage_Core_Block_Text();
        //$block->setText("hello world");
        //echo $block->toHtml();
        $block = new Mage_Core_Block_Template();
        $block ->setTemplate('pepe/helloworld.phtml');
        var_dump($block->getTemplateFile());
        echo $block->toHtml();

    }
}
