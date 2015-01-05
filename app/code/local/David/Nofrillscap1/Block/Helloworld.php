<?php
class David_Nofrillscap1_Block_Helloworld extends Mage_Core_Block_Template{
    public function __construct(){
        $this->setTemplate('david/helloworld.phtml');
        return parent::_construct();
    }

    public function fetchView($fileName) {
        // ignores file name , just uses a simple include with
        $this->setScriptPath(
            Mage::getModuleDir('', 'David_Nofrillscap1') . DS . 'design' );
            return parent::fetchView($this->getTemplate());
    }
}
?>