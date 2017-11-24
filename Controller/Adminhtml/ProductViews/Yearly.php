<?php
/**
 * Copyright © 2017 Voicyou Softwares . All rights reserved.
 */
namespace Voicyou\ProductViews\Controller\Adminhtml\ProductViews;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

/**
 * Class Yearly
 *
 * @package Voicyou\ProductViews\Controller\Adminhtml\ProductViews
 */
class Yearly extends \Magento\Backend\App\Action
{
    /**
     * @var PageFactory
     */
    protected $resultPageFactory;
    
    /**
     * 
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    )
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * Index action
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->addBreadcrumb(__('Product Views Yearly Report'), __('Product Views Yearly Report'));
        $resultPage->getConfig()->getTitle()->prepend(__('Product Views Yearly Report'));
        return $resultPage;
    }
}
