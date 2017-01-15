<?php

namespace Voicyou\ProductViews\Model\ResourceModel;

class Yearly extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('report_viewed_product_aggregated_yearly', 'id');
    }
}
