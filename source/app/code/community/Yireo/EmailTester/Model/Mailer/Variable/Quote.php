<?php
/**
 * Yireo EmailTester for Magento
 *
 * @package     Yireo_EmailTester
 * @author      Yireo (https://www.yireo.com/)
 * @copyright   Copyright 2015 Yireo (https://www.yireo.com/)
 * @license     Open Source License (OSL v3)
 */

/**
 * EmailTester Core model
 */
class Yireo_EmailTester_Model_Mailer_Variable_Quote extends Varien_Object
{
    /**
     * @return Mage_Sales_Model_Quote
     */
    public function getVariable()
    {
        /** @var Mage_Sales_Model_Order $order */
        $order = $this->getOrder();

        $quote = Mage::getModel('sales/quote')->load($order->getQuoteId());

        return $quote;
    }
}