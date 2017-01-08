<?php

namespace GaussDev\Locations\Helper;

use \Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{
    protected $_locationCollection;


    public function __construct($locationCollection)
    {
        $this->_locationCollection = $locationCollection;
    }

    public function geLocations()
    {
        //return all the stores
        return $this->_locationCollection->load();
    }
}