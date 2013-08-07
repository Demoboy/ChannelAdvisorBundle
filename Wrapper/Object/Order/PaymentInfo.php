<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Object\Order;

use KMJ\ChannelAdvisorBundle\Interfaces\ResponseInterface;


/**
 * Description of PaymentInfo
 *
 * @author kaelinjacobson
 */
class PaymentInfo implements ResponseInterface {

    use \API\EbayBundle\Wrapper\Traits\SimpleElementTrait;
    //put your code here
    protected $paymentType;
    protected $creditCardLast4;
    protected $payPalID;
    protected $merchantReferenceNumber;
    protected $paymentTransactionID;
    
    public function getPaymentType() {
        return $this->paymentType;
    }

    public function getCreditCardLast4() {
        return $this->creditCardLast4;
    }

    public function getPayPalID() {
        return $this->payPalID;
    }

    public function getMerchantReferenceNumber() {
        return $this->merchantReferenceNumber;
    }

    public function getPaymentTransactionID() {
        return $this->paymentTransactionID;
    }

    public function setPaymentType($paymentType) {
        $this->paymentType = $paymentType;
        return $this;
    }

    public function setCreditCardLast4($creditCardLast4) {
        $this->creditCardLast4 = $creditCardLast4;
        return $this;
    }

    public function setPayPalID($payPalID) {
        $this->payPalID = $payPalID;
        return $this;
    }

    public function setMerchantReferenceNumber($merchantReferenceNumber) {
        $this->merchantReferenceNumber = $merchantReferenceNumber;
        return $this;
    }

    public function setPaymentTransactionID($paymentTransactionID) {
        $this->paymentTransactionID = $paymentTransactionID;
        return $this;
    }
}