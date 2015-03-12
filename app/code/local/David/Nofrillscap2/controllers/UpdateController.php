<?php
class David_Nofrillscap2_UpdateController extends Mage_Core_Controller_Front_Action{
    public function indexAction(){
        $layout = Mage::getSingleton('core/layout');
        $xml = simplexml_load_string('
            <layout><block type="david_nofrillscap1/helloworld" name="root" output="toHtml"/>
            </layout>        '
        ,'Mage_Core_Model_Layout_Element');
        $layout->setXml($xml);
        $layout->generateBlocks();
        echo $layout->setDirectOutput(true)->getOutput();
    }

    public function complexAction(){
        $layout = Mage::getSingleton('core/layout');
        $path = Mage::getModuleDir('', 'David_Nofrillscap1') . DS . 'page-layouts' . DS . 'complex.xml';

        $xml = simplexml_load_file($path, Mage::getConfig()->getModelClassName('core/layout_element'));
        $layout->setXml($xml);

        $text = $layout->createBlock('core/text', 'words');
        $text->setText('The red fox jumped bla bla bla...');

        $layout->generateBlocks();
        $layout->getBlock('content')->insert($text);

        echo $layout->setDirectOutput(true)->getOutput();
    }

}
?>