<?php
class TK1_Paymentdummies_Model_Sofort extends Mage_Payment_Model_Method_Abstract
{
    protected $_code = 'sofortdummy';
	protected $_canUseInternal = true;
	protected $_canUseCheckout = false;
	protected $_canUseForMultishipping = false; 
}