<?php
class David_Nofrillscap1_Block_Helloworld extends Mage_Core_Block_Template{
    public function __construct(){
        $this->setTemplate('david/helloworld.phtml');
        return parent::_construct();
    }
}
?>