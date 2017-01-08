<?php

    namespace GaussDev\Locations\Model\ResourceModel\Location;


    class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
    {

        public function _construct()
        {
            $this->_init('GaussDev\Locations\Model\Location', 'GaussDev\Locations\Model\ResourceModel\Location');
        }
    }