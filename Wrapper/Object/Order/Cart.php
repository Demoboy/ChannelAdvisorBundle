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

    //put your code here
    protected $cartId;
    protected $checkoutSource;
    protected $vatTaxCalculationOption;
    protected $vatShippingOption;
    protected $vatGiftWrapOption;
    protected $lineItemSkuList;
    protected $lineItemPromoList;
    protected $lineItemInvoiceList;

    public function getCartId() {
        return $this->cartId;
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

    public function setCartId($cartId) {
        $this->cartId = $cartId;
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

    public function load($obj) {
        if (isset($obj->CartID))
            $this->setCartId($obj->CartID);

        if (isset($obj->CheckoutSource))
            $this->setCheckoutSource($obj->CheckoutSource);

        if (isset($obj->VATTaxCalculationOption))
            $this->setVatTaxCalculationOption($obj->VATTaxCalculationOption);

        if (isset($obj->VATShippingOption))
            $this->setVatShippingOption($obj->VATShippingOption);

        if (isset($obj->VATGiftWrapOption))
            $this->setVatGiftWrapOption($obj->VATGiftWrapOption);
        
        if (isset($obj->LineItemSKUList)) {
            if (is_array($obj->LineItemSKUList)) {
                $lineItemSkuListArray = array();
                
                foreach ($obj->LineItemSKUList as $skuList) {
                    $lineItemSkuListArray[] = new LineItem($skuList->OrderLineItemItem);
                }
                
                $this->setLineItemSkuList($lineItemSkuListArray);
            } else {
                $this->setLineItemSkuList(array(new LineItem($obj->LineItemSKUList->OrderLineItemItem)));
            }
        }
        
        if (isset($obj->LineItemPromoList)) {
            if (is_array($obj->LineItemPromoList->OrderLineItemPromo)) {
                $promos = array();
                
                foreach ($obj->LineItemPromoList->OrderLineItemPromo as $promo) {
                    $promos[] = new Promo($promo);
                }
                
                $this->setLineItemPromoList($promos);
            } else {
                $this->setLineItemPromoList(array(new Promo($obj->LineItemPromoList->OrderLineItemPromo)));
            }
        }
        
        if (isset($obj->LineItemInvoiceList)) {
            if (is_array($obj->LineItemInvoiceList->OrderLineItemInvoice)) {
                $invoices = array();
                foreach ($obj->LineItemInvoiceList->OrderLineItemInvoice as $il) {
                    $invoices[] = new Invoice($il);
                }
                $this->setLineItemInvoiceList($invoices);
            } else {
                $this->setLineItemInvoiceList(array(new Invoice($obj->LineItemInvoiceList->OrderLineItemInvoice)));
            }
                
        }
    }

}

?>
