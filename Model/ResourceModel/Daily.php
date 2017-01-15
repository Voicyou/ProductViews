<?php

namespace Voicyou\ProductViews\Model\ResourceModel;

class Daily extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('report_viewed_product_aggregated_daily', 'id');
    }
}
