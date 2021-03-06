<?php
/**
 * Copyright © 2017 Voicyou Softwares . All rights reserved.
 */
namespace Voicyou\ProductViews\Model\ResourceModel;

/**
 * Class Monthly
 *
 * @package Voicyou\ProductViews\Model\ResourceModel
 */
class Monthly extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('report_viewed_product_aggregated_monthly', 'id');
    }
}
