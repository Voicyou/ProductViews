<?php


namespace Voicyou\ProductViews\Controller\Adminhtml\ProductViews;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Monthly extends \Magento\Backend\App\Action
{
    /**
     * @var PageFactory
     */
    protected $resultPageFactory;
    
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
        $resultPage->addBreadcrumb(__('Product Views Monthly Report'), __('Product Views Monthly Report'));
        $resultPage->getConfig()->getTitle()->prepend(__('Product Views Monthly Report'));
        return $resultPage;
    }
}
