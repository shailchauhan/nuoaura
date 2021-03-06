<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magento.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magento.com for more information.
 *
 * @category    Mage
 * @package     Mage_Customer
 * @copyright  Copyright (c) 2006-2015 X.commerce, Inc. (http://www.magento.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Customer edit form block
 *
 * @category   Mage
 * @package    Mage_Customer
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Mage_Customer_Block_Form_Edit extends Mage_Customer_Block_Account_Dashboard
{
	public function getCustomerBillingAddress()
    {		
		$customer = Mage::getSingleton('customer/session')->getCustomer();
		$address_id = $customer->getDefaultBilling();
		if ((int)$address_id){
		   $address = Mage::getModel('customer/address')->load($address_id);
	
		   /*
		   * Insert the output here 
		   * for example:
		   * echo $customer->getName();
		   * echo $address->getCity();
		   */
		}
		else $address= array();
		return $address;
    }
	
	public function getCustomerShippingAddress()
    {		
		$customer = Mage::getSingleton('customer/session')->getCustomer();
		$address_id = $customer->getDefaultShipping();
		if ((int)$address_id){
		   $address = Mage::getModel('customer/address')->load($address_id);
	
		   /*
		   * Insert the output here 
		   * for example:
		   * echo $customer->getName();
		   * echo $address->getCity();
		   */
		}
		else $address= array();
		return $address;
    }
}
