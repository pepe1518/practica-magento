<?php

class David_Nofrillscap1_IndexController extends Mage_Core_Controller_Front_Action{

    public function indexAction() {

        $main_block = new Mage_Core_Block_Template ();
        $main_block ->setTemplate('david/helloworld.phtml');

        $paragraph_block = new Mage_Core_Block_Text();
        $paragraph_block->setText("este es un bloque hijo");

        $main_block->setChild("the_first", $paragraph_block);

        echo $main_block->toHtml();

// INICIO Imprime el tema por defecto
//        $this->loadLayout();
//        $this->renderLayout();
// FIN Imprime el tema por defecto

    }
}

?>