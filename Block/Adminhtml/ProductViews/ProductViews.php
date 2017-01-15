<?php
/**
 * Copyright © 2016 Voicyou Softwares . All rights reserved.
 */
namespace Voicyou\ProductViews\Block\Adminhtml\ProductViews;
class ProductViews extends \Magento\Framework\View\Element\Template
{
    
    protected $context;
    protected $helperData;
    protected $data;
    /**
     * 
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Backend\Helper\Data $helperData
     * @param array $data
     */
    public function __construct(\Magento\Framework\View\Element\Template\Context $context,
                                \Magento\Backend\Helper\Data $helperData,
                                array $data = []
                                )
    {
        parent::__construct($context, $data);
        $this->helperData = $helperData;
    }
    
    function getReportRefreshUrl()
    {
        $params = array('code'=>'viewed');
        return $this->helperData->getUrl('reports/report_statistics/refreshRecent',$params);
    }
}