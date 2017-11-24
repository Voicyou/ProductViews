<?php
/**
 * Copyright © 2017 Voicyou Softwares . All rights reserved.
 */
namespace Voicyou\ProductViews\Model\ResourceModel\Monthly\Grid;

/**
 * Class Collection
 *
 * @package Voicyou\ProductViews\Model\ResourceModel\Monthly\Grid
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Voicyou\ProductViews\Model\Monthly', 'Voicyou\ProductViews\Model\ResourceModel\Monthly');
    }
}
