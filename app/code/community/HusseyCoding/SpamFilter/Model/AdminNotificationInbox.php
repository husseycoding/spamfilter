<?php
class HusseyCoding_SpamFilter_Model_AdminNotificationInbox extends Mage_AdminNotification_Model_Inbox
{
    public function parse(array $data)
    {
        if (Mage::helper('spamfilter')->isEnabled()):
            $backtrace = debug_backtrace();
            array_shift($backtrace);
            foreach ($backtrace as $back):
                $class = $back['class'];
                if (!preg_match('/^Mage_.*/', $class) && $class != 'Mage'):
                    return;
                endif;
            endforeach;
        endif;
            
        return parent::parse($data);
    }
}