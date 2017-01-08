<?php
namespace GaussDev\Locations\Controller\Adminhtml\Location;

use GaussDev\Locations\Controller\Adminhtml\Location;

class Index extends Location
{
    public function execute()
    {

        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('GaussDev_Locations::location');
        $resultPage->addBreadcrumb(__('Locations'), __('Locations'));
        $resultPage->addBreadcrumb(__('Manage Locations'), __('Manage Locations'));
        $resultPage->getConfig()->getTitle()->prepend(__('Locations'));

        return $resultPage;
    }
}