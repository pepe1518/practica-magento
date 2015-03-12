<?php
class David_Dev18cap7_Adminhtml_Dev18cap7_IndexController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
        echo "cap 7: Hola desde el Backend :D";
    }
}
//http://magento-dev.local/index.php/admin/helloworld_index/
