<?php

class Pepe_Nofrills_Block_Holapepe extends Mage_Core_Block_Template {

    public function __construct() {
        $this->setTemplate('pepe/helloworld.phtml');
        return parent::_construct();
    }

    public function _beforeToHtml() {
        $block_1 = new Mage_Core_Block_Text();
        $block_1->setText('primera sentencia leida desde beforeToHtml');
        $this->setChild('the_first', $block_1);

        $block_2 = new Mage_Core_Block_Text();
        $block_2->setText('segunda sentencia leida desde begoreTo');
        $this->setChild('the_second', $block_2);
    }

    public function fetchTitle() {
        return 'hola mundo de pepe';
    }
}