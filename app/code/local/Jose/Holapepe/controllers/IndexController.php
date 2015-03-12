<?php
class Jose_Holapepe_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction() {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function helloAction() {
//        $this->loadLayout();
//        $this->renderLayout();

        echo 'estes es un hola mundo desde el action de un controlador </br>';
//        echo $this->__('Hello mundo');
    }
}