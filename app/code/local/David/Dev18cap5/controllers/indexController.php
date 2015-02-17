<?php
/**
 * Created by PhpStorm.
 * User: v1t0
 * Date: 2/17/15
 * Time: 12:07 AM
 */
class David_Dev18cap5_IndexController extends Mage_Core_Controller_Front_Action{
    public function indexAction(){
        echo "bienvenido cap5";
        $resource = Mage::getSingleton("core/resource");
        $connection = $resource->getConnection('core_read');
//        $result = $connection->query('SELECT * FROM core_store')->fetchAll();
        $result = $connection->query('select * from core_config_data where path like "%base%url%";')->fetchAll();
        Zend_Debug::dump($result);
    }

    public function index2Action(){
        $dbConfig = array(
            'host'=>'localhost',
            'dbname'=>'wolverinelive050115',
            'username'=>'root',
            'password'=>'admin123',
        );
        $_resource = Mage::getSingleton("core/resource");
        //create conection
        $connection = $_resource->createConnection('newConnection','pdo_mysql', $dbConfig);
        $result = $connection->query('select * from core_config_data where path like "%base%url%";')->fetchAll();
        Zend_Debug::dump($result);
    }

    public function flatAction(){
        $resource = Mage::getSingleton("core/resource");
        $connection = $resource->getConnection('core_read');
        $result = $connection->query('SELECT * FROM review_detail')->fetchAll();
        Zend_Debug::dump($result);
    }

    public function flat2Action(){
        $reviews = Mage::getModel('review/review')->getCollection();
        foreach($reviews as $review){
            echo $review->getReviewUrl().'<br/>';
            Zend_Debug::dump($review->debug());
        }
    }
}