<?php
/**
 * Ffuenf_ExtendedOrderGrid extension.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 *
 * @category   Ffuenf
 *
 * @author     Achim Rosenhagen <a.rosenhagen@ffuenf.de>
 * @copyright  Copyright (c) 2019 ffuenf (http://www.ffuenf.de)
 * @license    http://opensource.org/licenses/mit-license.php MIT License
 */

class Ffuenf_ExtendedOrderGrid_Block_Adminhtml_Sales_Order_Renderer_Paymentmethod extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{

    public function render(Varien_Object $row)
    {
        $value =  $row->getData($this->getColumn()->getIndex());
        switch ($value) {
            case 'iways_paypalplus_payment':
            case 'paypal':
            case 'paypal_express':
                $return = '<div class="ffuenf_extendedordergrid paymentmethod_paypal" title="'.$value.'">'.$value.'</div>';
                break;
            case 'paymentnetwork_pnsofortueberweisung':
                $return = '<div class="ffuenf_extendedordergrid paymentmethod_pnsofortueberweisung" title="'.$value.'">'.$value.'</div>';
                break;
            case 'amazonpayments_advanced':
                $return = '<div class="ffuenf_extendedordergrid paymentmethod_apa" title="'.$value.'">'.$value.'</div>';
                break;
            case 'invoice':
                $return = '<div class="ffuenf_extendedordergrid paymentmethod_invoice" title="'.$value.'">'.$value.'</div>';
                break;
            case 'banktransfer':
                $return = '<div class="ffuenf_extendedordergrid paymentmethod_banktransfer" title="'.$value.'">'.$value.'</div>';
                break;
            default:
                $return = $value;
                break;
        }
        return $return;
    }
}
