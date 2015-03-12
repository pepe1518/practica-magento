<?php
class David_Nofrillscap2_IndexController extends Mage_Core_Controller_Front_Action{
    public function indexAction(){
        echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    }
    public function davidAction(){
        echo "davidAction";
    }
}

?>