<?php

    namespace GaussDev\Locations\Model;



    class Location extends \Magento\Framework\Model\AbstractModel
    {
        public function _construct()
        {
            $this->_init('GaussDev\Locations\Model\ResourceModel\Location');
        }
    }







