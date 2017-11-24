<?php
/**
 * Copyright © 2017 Voicyou Softwares . All rights reserved.
 */
namespace Voicyou\ProductViews\Model;

/**
 * Class Monthly
 *
 * @package Voicyou\ProductViews\Model
 */
class Monthly extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        parent::_construct();
        $this->_init('Voicyou\ProductViews\Model\ResourceModel\Monthly');
    }
}
