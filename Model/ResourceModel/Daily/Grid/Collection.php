<?php
/**
 * Copyright © 2017 Voicyou Softwares . All rights reserved.
 */
namespace Voicyou\ProductViews\Model\ResourceModel\Daily\Grid;

/**
 * Class Collection
 *
 * @package Voicyou\ProductViews\Model\ResourceModel\Daily\Grid
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Voicyou\ProductViews\Model\Daily', 'Voicyou\ProductViews\Model\ResourceModel\Daily');
    }
}
