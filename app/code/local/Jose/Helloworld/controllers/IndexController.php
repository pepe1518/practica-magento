<?php
class Jose_Helloworld_IndexController extends Mage_Core_Controller_Front_Action {

    public function indexAction() {
//        opcion numero 1
        $resource = Mage::getSingleton('core/resource');
        $connection = $resource->getConnection('core_read');
        $results = $connection->query('SELECT * FROM core_store')->fetchAll();

//        opcion numero 2
//        $resource = Mage::getModel('core/resource');
//        $read = $resource->getConnection('core_read');
//        $query = 'SELECT * FROM core_store';
//        $results = $read->fetchAll($query);

        Zend_Debug::dump($results);
    }

    public function helloAction() {
        echo 'hola mundo desde un nuevo controlador';
        $this->loadLayout();
        $this->renderLayout();
    }
}