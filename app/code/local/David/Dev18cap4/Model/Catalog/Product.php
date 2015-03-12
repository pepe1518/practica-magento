<?php
class David_Dev18cap4_Model_Catalog_Product extends Mage_Catalog_Model_Product{
    public function getName(){
        return "Overided getName: ".$this->_getData('name');
    }
}
?>