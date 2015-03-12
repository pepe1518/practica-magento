<?php

class David_Nofrillscap2_Block_Template extends Mage_Core_Block_Template
{
    public function fetchView($fileName)
    {
        $a = Mage::getModuleDir('', 'David_Nofrillscap2') .
            DS .
            'design';
        $this->setScriptPath(
            Mage::getModuleDir('', 'David_Nofrillscap2') .
            DS .
            'design'
        );
        return parent::fetchView($this->getTemplate());
    }
}