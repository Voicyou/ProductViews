<?php
/**
 * Copyright © 2017 Voicyou Softwares . All rights reserved.
 */
namespace Voicyou\ProductViews\Model\ResourceModel\Yearly\Grid;

/**
 * Class Collection
 *
 * @package Voicyou\ProductViews\Model\ResourceModel\Yearly\Grid
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Voicyou\ProductViews\Model\Yearly', 'Voicyou\ProductViews\Model\ResourceModel\Yearly');
    }
}
