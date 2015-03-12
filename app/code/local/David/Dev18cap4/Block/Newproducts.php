<?php
/**
 * Created by PhpStorm.
 * User: v1t0
 * Date: 2/15/15
 * Time: 7:06 PM
 */
class David_Dev18cap4_Block_Newproducts extends Mage_Core_Block_Template{

    public function getProducts(){
        $products = Mage::getModel('catalog/product')->getCollection()
                                                    ->addAttributeToSelect("*")
                                                    ->setOrder('created_at')
                                                    ->setPageSize(5);
        return $products;
    }

    public function printMessage($message){
        $msg = "<h1>".$message."</h1>";
        return $msg;
    }

}