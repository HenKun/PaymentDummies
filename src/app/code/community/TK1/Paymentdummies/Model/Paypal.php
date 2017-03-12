<?php
class TK1_Paymentdummies_Model_Paypal extends Mage_Payment_Model_Method_Abstract
{
    protected $_code = 'paypaldummy';
	protected $_canUseInternal = true;
	protected $_canUseCheckout = false;
	protected $_canUseForMultishipping = false; 
}