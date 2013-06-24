<?php
class HusseyCoding_SpamFilter_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function isEnabled()
    {
        return (bool) Mage::getStoreConfig('spamfilter/spamfilter/enabled');
    }
}