<?php

namespace Voicyou\ProductViews\Model\ResourceModel\Daily;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Voicyou\ProductViews\Model\Daily', 'Voicyou\ProductViews\Model\ResourceModel\Daily');
    }
}
