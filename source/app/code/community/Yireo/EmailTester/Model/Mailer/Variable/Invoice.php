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
class Yireo_EmailTester_Model_Mailer_Variable_Invoice extends Varien_Object
{
    /**
     * @return Mage_Sales_Model_Order_Invoice
     */
    public function getVariable()
    {
        /** @var Mage_Sales_Model_Order $order */
        $order = $this->getOrder();

        try {
            $invoices = $order->getInvoiceCollection();
            if ($invoices) {
                $invoice = $invoices->getFirstItem();
            } else {
                $invoice = Mage::getModel('sales/order_invoice');
            }
        } catch (Exception $e) {
            $invoice = Mage::getModel('sales/order_invoice');
        }
        
        return $invoice;
    }
}