<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KMJ\ChannelAdvisorBundle\Wrapper\Object\Order;

use KMJ\ChannelAdvisorBundle\Interfaces\ResponseInterface;

/**
 * Description of Cart
 *
 * @author kaelinjacobson
 */
class Cart implements ResponseInterface {

    use \KMJ\ChannelAdvisorBundle\Traits\AdvancedElementTrait;

    //put your code here
    protected $cartID;
    protected $checkoutSource;
    protected $VATTaxCalculationOption;
    protected $VATShippingOption;
    protected $VATGiftWrapOption;
    protected $lineItemSKUList;
    protected $lineItemPromoList;
    protected $lineItemInvoiceList;

    public function getCartID() {
        return $this->cartID;
    }

    public function getCheckoutSource() {
        return $this->checkoutSource;
    }

    public function getVatTaxCalculationOption() {
        return $this->vatTaxCalculationOption;
    }

    public function getVatShippingOption() {
        return $this->vatShippingOption;
    }

    public function getVatGiftWrapOption() {
        return $this->vatGiftWrapOption;
    }

    public function getLineItemSkuList() {
        return $this->lineItemSkuList;
    }

    public function getLineItemPromoList() {
        return $this->lineItemPromoList;
    }

    public function getLineItemInvoiceList() {
        return $this->lineItemInvoiceList;
    }

    public function setCartID($cartID) {
        $this->cartID = $cartID;
        return $this;
    }

    public function setCheckoutSource($checkoutSource) {
        $this->checkoutSource = $checkoutSource;
        return $this;
    }

    public function setVatTaxCalculationOption($vatTaxCalculationOption) {
        $this->vatTaxCalculationOption = $vatTaxCalculationOption;
        return $this;
    }

    public function setVatShippingOption($vatShippingOption) {
        $this->vatShippingOption = $vatShippingOption;
        return $this;
    }

    public function setVatGiftWrapOption($vatGiftWrapOption) {
        $this->vatGiftWrapOption = $vatGiftWrapOption;
        return $this;
    }

    public function setLineItemSkuList($lineItemSkuList) {
        $this->lineItemSkuList = $lineItemSkuList;
        return $this;
    }

    public function setLineItemPromoList($lineItemPromoList) {
        $this->lineItemPromoList = $lineItemPromoList;
        return $this;
    }

    public function setLineItemInvoiceList($lineItemInvoiceList) {
        $this->lineItemInvoiceList = $lineItemInvoiceList;
        return $this;
    }

    public function formatValue($key, $value) {
        switch ($key) {
            case "lineItemSKUList":
                if (is_array($value->OrderLineItemItem)) {
                    $lineItemSkuListArray = array();

                    foreach ($value->OrderLineItemItem as $sku) {
                        $lineItemSkuListArray[] = new LineItem($sku);
                    }

                    return $lineItemSkuListArray;
                } else {
                    return array(new LineItem($value->OrderLineItemItem));
                }
            case "lineItemPromoList":
                if (is_array($value->OrderLineItemPromo)) {
                    $promos = array();

                    foreach ($value->OrderLineItemPromo as $promo) {
                        $promos[] = new Promo($promo);
                    }

                    return ($promos);
                } else {
                    return (array(new Promo($value->OrderLineItemPromo)));
                }
            case "lineItemInvoiceList":
                if (is_array($value->OrderLineItemInvoice)) {
                    $invoices = array();
                    foreach ($value->OrderLineItemInvoice as $il) {
                        $invoices[] = new Invoice($il);
                    }
                    return ($invoices);
                } else {
                    return (array(new Invoice($value->OrderLineItemInvoice)));
                }
            default:
                return (string) $value;
        }
    }

}
