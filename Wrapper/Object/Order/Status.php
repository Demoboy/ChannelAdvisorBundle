<?php
namespace KMJ\ChannelAdvisorBundle\Wrapper\Object\Order;

use KMJ\ChannelAdvisorBundle\Interfaces\ResponseInterface;
use DateTime;

/**
 * Description of Status
 *
 * @author kaelinjacobson
 */
class Status implements ResponseInterface {

    //put your code here
    protected $checkoutStatus;
    protected $checkoutDate;
    protected $paymentStatus;
    protected $paymentDate;
    protected $shippingStatus;
    protected $shippingDate;
    protected $orderRefundStatus;

    public function getCheckoutStatus() {
        return $this->checkoutStatus;
    }

    public function getCheckoutDate() {
        return $this->checkoutDate;
    }

    public function getPaymentStatus() {
        return $this->paymentStatus;
    }

    public function getPaymentDate() {
        return $this->paymentDate;
    }

    public function getShippingStatus() {
        return $this->shippingStatus;
    }

    public function getShippingDate() {
        return $this->shippingDate;
    }

    public function getOrderRefundStatus() {
        return $this->orderRefundStatus;
    }

    public function setCheckoutStatus($checkoutStatus) {
        $this->checkoutStatus = $checkoutStatus;
        return $this;
    }

    public function setCheckoutDate($checkoutDate) {
        $this->checkoutDate = $checkoutDate;
        return $this;
    }

    public function setPaymentStatus($paymentStatus) {
        $this->paymentStatus = $paymentStatus;
        return $this;
    }

    public function setPaymentDate($paymentDate) {
        $this->paymentDate = $paymentDate;
        return $this;
    }

    public function setShippingStatus($shippingStatus) {
        $this->shippingStatus = $shippingStatus;
        return $this;
    }

    public function setShippingDate($shippingDate) {
        $this->shippingDate = $shippingDate;
        return $this;
    }

    public function setOrderRefundStatus($orderRefundStatus) {
        $this->orderRefundStatus = $orderRefundStatus;
        return $this;
    }

    public function load($obj) {
        if (isset($obj->CheckoutStatus))
            $this->setCheckoutStatus($obj->CheckoutStatus);

        if (isset($obj->CheckoutDateGMT))
            $this->setCheckoutDate(new DateTime($obj->CheckoutDateGMT));

        if (isset($obj->PaymentStatus))
            $this->setPaymentStatus($obj->PaymentStatus);

        if (isset($obj->PaymentDateGMT))
            $this->setPaymentDate(new DateTime($obj->PaymentDateGMT));

        if (isset($obj->ShippingStatus))
            $this->setShippingStatus($obj->ShippingStatus);

        if (isset($obj->ShippingDateGMT))
            $this->setShippingDate(new DateTime($obj->ShippingDateGMT));

        if (isset($obj->OrderRefundStatus))
            $this->setOrderRefundStatus($obj->OrderRefundStatus);
    }

}

?>
