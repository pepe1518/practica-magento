<?php
/**
 * Created by PhpStorm.
 * User: v1t0
 * Date: 1/4/15
 * Time: 6:38 PM
 */

class David_Nofrillscap1_Block_Template extends Mage_Core_Block_Template{

    public function fetchView($fileName) {
        // ignores file name , just uses a simple include with
        $this->setScriptPath(
        Mage::getModuleDir('', 'Nofrills_Booklayout') . DS . 'design'
    );
    return parent::fetchView($this->getTemplate()); }
}