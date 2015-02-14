<?php
class David_Nofrillscap2_UpdateController extends Mage_Core_Controller_Front_Action{
    public function indexAction(){
        echo "empieza xml";

        $layout = Mage::getSingleton('core/layout');
        $xml = simplexml_load_string('
            <layout>
            <block type="david_nofrillscap1/helloworld" name="root" output="toHtml"
            </layout>        '
        ,'Mage_Core_Model_Layout_Element');
        $layout->setXml($xml);
        $layout->generateBlocks();
        echo $layout->setDirectOutput(true)->getOutput();

        echo "<br> termina xml";
    }

}
?>