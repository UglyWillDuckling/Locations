<?php

    namespace GaussDev\Locations\Model\ResourceModel;



    class Location extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
    {
        public function _construct()
        {
            $this->_init("gaussdev_store_locations", "location_id");
        }
    }