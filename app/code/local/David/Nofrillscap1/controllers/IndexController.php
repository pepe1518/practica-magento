<?php

class David_Nofrillscap1_IndexController extends Mage_Core_Controller_Front_Action{

    public function indexAction() {
        $block = new Mage_Core_Block_Template ();
        $block ->setTemplate('david/helloworld.phtml');
        //var_dump($block ->getTemplateFile()); //<-- metodo que imprime la direccion del archivo ejmplo string(53) "frontend/base/default/template/david/helloworld.phtml"
        echo $block->toHtml();
    }
}

?>