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

    use \KMJ\ChannelAdvisorBundle\Traits\SimpleElementTrait;
    //put your code here
    protected $checkoutStatus;
    protected $checkoutDateGMT;
    protected $paymentStatus;
    protected $paymentDateGMT;
    protected $shippingStatus;
    protected $shippingDateGMT;
    protected $orderRefundStatus;

    public function getCheckoutStatus() {
        return $this->checkoutStatus;
    }

    public function getCheckoutDateGMT() {
        return $this->checkoutDateGMT;
    }

    public function getPaymentStatus() {
        return $this->paymentStatus;
    }

    public function getPaymentDateGMT() {
        return $this->paymentDateGMT;
    }

    public function getShippingStatus() {
        return $this->shippingStatus;
    }

    public function getShippingDateGMT() {
        return $this->shippingDateGMT;
    }

    public function getOrderRefundStatus() {
        return $this->orderRefundStatus;
    }

    public function setCheckoutStatus($checkoutStatus) {
        $this->checkoutStatus = $checkoutStatus;
        return $this;
    }

    public function setCheckoutDateGMT($checkoutDateGMT) {
        $this->checkoutDateGMT = $checkoutDateGMT;
        return $this;
    }

    public function setPaymentStatus($paymentStatus) {
        $this->paymentStatus = $paymentStatus;
        return $this;
    }

    public function setPaymentDateGMT($paymentDateGMT) {
        $this->paymentDateGMT = $paymentDateGMT;
        return $this;
    }

    public function setShippingStatus($shippingStatus) {
        $this->shippingStatus = $shippingStatus;
        return $this;
    }

    public function setShippingDateGMT($shippingDateGMT) {
        $this->shippingDateGMT = $shippingDateGMT;
        return $this;
    }

    public function setOrderRefundStatus($orderRefundStatus) {
        $this->orderRefundStatus = $orderRefundStatus;
        return $this;
    }
}