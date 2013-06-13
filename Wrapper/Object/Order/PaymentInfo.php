<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Object\Order;

use KMJ\ChannelAdvisorBundle\Interfaces\ResponseInterface;


/**
 * Description of PaymentInfo
 *
 * @author kaelinjacobson
 */
class PaymentInfo implements ResponseInterface {

    //put your code here
    protected $paymentType;
    protected $creditCardLast4;
    protected $paypalId;
    protected $merchantReferenceNumber;
    protected $paymentTransactionId;

    public function getPaymentType() {
        return $this->paymentType;
    }

    public function getCreditCardLast4() {
        return $this->creditCardLast4;
    }

    public function getPaypalId() {
        return $this->paypalId;
    }

    public function getMerchantReferenceNumber() {
        return $this->merchantReferenceNumber;
    }

    public function getPaymentTransactionId() {
        return $this->paymentTransactionId;
    }

    public function setPaymentType($paymentType) {
        $this->paymentType = $paymentType;
        return $this;
    }

    public function setCreditCardLast4($creditCardLast4) {
        $this->creditCardLast4 = $creditCardLast4;
        return $this;
    }

    public function setPaypalId($paypalId) {
        $this->paypalId = $paypalId;
        return $this;
    }

    public function setMerchantReferenceNumber($merchantReferenceNumber) {
        $this->merchantReferenceNumber = $merchantReferenceNumber;
        return $this;
    }

    public function setPaymentTransactionId($paymentTransactionId) {
        $this->paymentTransactionId = $paymentTransactionId;
        return $this;
    }

    public function load($obj) {
        if (isset($obj->PaymentType))
            $this->setPaymentType($obj->PaymentType);

        if (isset($obj->CreditCardLast4))
            $this->setCreditCardLast4($obj->CreditCardLast4);

        if (isset($obj->PaypalID))
            $this->setPaypalId($obj->PaypalID);

        if (isset($obj->MerchantReferenceNumber))
            $this->setMerchantReferenceNumber($obj->MerchantReferenceNumber);

        if (isset($obj->PaymentTransactionID))
            $this->setPaymentTransactionId($obj->PaymentTransactionID);
    }

}