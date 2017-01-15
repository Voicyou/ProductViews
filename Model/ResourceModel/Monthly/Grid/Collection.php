<?php

namespace Voicyou\ProductViews\Model\ResourceModel\Monthly;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Voicyou\ProductViews\Model\Monthly', 'Voicyou\ProductViews\Model\ResourceModel\Monthly');
    }
}
