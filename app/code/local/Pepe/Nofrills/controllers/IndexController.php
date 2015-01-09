<?php

class Pepe_Nofrills_IndexController extends Mage_Core_Controller_Front_Action {

    public function indexAction() {
        //Zend_Debug::dump(__METHOD__);
        //$block = new Mage_Core_Block_Text();
        //$block->setText("hello world");
        //echo $block->toHtml();
        $main_block = new Mage_Core_Block_Template();
        $main_block ->setTemplate('pepe/helloworld.phtml');

        $paragraph_block = new Mage_Core_Block_Text();
        $paragraph_block->setText("este es un bloque hijo");
        $main_block->setChild("the_first", $paragraph_block);

        $block_one = new Mage_Core_Block_Text();
        $block_one->setText('este es un bloque llamado block one');
        $main_block->setChild('the_second', $block_one);
//        var_dump($block->getTemplateFile());
        echo $main_block->toHtml();

    }

    public function pepeAction() {
        $block_1 = new Mage_Core_Block_Text();
        $block_1->setText('mi primare linea');

        $block_2 = new Mage_Core_Block_Text();
        $block_2->setText('mi segunda linea linea');

        $main = new Pepe_Nofrills_Block_Holapepe();
//        $main->setTemplate('pepe/helloworld.phtml');

        $main->setChild('the_first', $block_1);
        $main->setChild('the_second', $block_2);

        echo $main->toHtml();
    }

    public function algoAction() {
        $main_Block = new Pepe_Nofrills_Block_Holapepe();
        echo $main_Block->toHtml();
    }


}
