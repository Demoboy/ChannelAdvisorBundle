<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Response\Order;

use KMJ\ChannelAdvisorBundle\Interfaces\ResponseInterface;
use KMJ\ChannelAdvisorBundle\Wrapper\Object\Contact;
use KMJ\ChannelAdvisorBundle\Wrapper\Object\Order\Cart;
use KMJ\ChannelAdvisorBundle\Wrapper\Object\Order\CustomValue;
use KMJ\ChannelAdvisorBundle\Wrapper\Object\Order\PaymentInfo;
use KMJ\ChannelAdvisorBundle\Wrapper\Object\Order\ShippingInfo;
use KMJ\ChannelAdvisorBundle\Wrapper\Object\Order\Status;
use DateTime;

/**
 * Description of ResponseItem
 *
 * @author kaelinjacobson
 */
class ResponseItem implements ResponseInterface {

    use \KMJ\ChannelAdvisorBundle\Traits\AdvancedElementTrait;

    //put your code here
    protected $numberOfMatches;
    protected $orderTimeGMT;
    protected $lastUpdateDate;
    protected $totalOrderAmount;
    protected $orderState;
    protected $dateCancelledGMT;
    protected $orderID;
    protected $clientOrderIdentifier;
    protected $sellerOrderID;
    protected $flagStyle;
    protected $orderStatus;
    protected $resellerID;
    protected $buyerEmailAddress;
    protected $emailOptIn;
    protected $paymentInfo;
    protected $shippingInfo;
    protected $billingInfo;
    protected $flagDescription;
    protected $shoppingCart;
    protected $customValueList;
    protected $buyerIpAddress;
    protected $transactionNotes;

    public function getNumberOfMatches() {
        return $this->numberOfMatches;
    }

    public function getOrderTime() {
        return $this->orderTime;
    }

    public function getLastUpdateDate() {
        return $this->lastUpdateDate;
    }

    public function getTotalOrderAmount() {
        return $this->totalOrderAmount;
    }

    public function getOrderState() {
        return $this->orderState;
    }

    public function getDateCancelled() {
        return $this->dateCancelled;
    }

    public function getOrderId() {
        return $this->orderId;
    }

    public function getClientOrderIdentifier() {
        return $this->clientOrderIdentifier;
    }

    public function getSellerOrderId() {
        return $this->sellerOrderId;
    }

    public function getFlagStyle() {
        return $this->flagStyle;
    }

    public function getOrderStatus() {
        return $this->orderStatus;
    }

    public function getResellerId() {
        return $this->resellerId;
    }

    public function getBuyerEmailAddress() {
        return $this->buyerEmailAddress;
    }

    public function getEmailOptIn() {
        return $this->emailOptIn;
    }

    public function getPaymentInfo() {
        return $this->paymentInfo;
    }

    public function getShippingInfo() {
        return $this->shippingInfo;
    }

    public function getBillingInfo() {
        return $this->billingInfo;
    }

    public function getFlagDescription() {
        return $this->flagDescription;
    }

    public function getShoppingCart() {
        return $this->shoppingCart;
    }

    public function getCustomValueList() {
        return $this->customValueList;
    }

    public function getBuyerIPAddress() {
        return $this->buyerIPAddress;
    }

    public function getTransactionNotes() {
        return $this->transactionNotes;
    }

    public function setNumberOfMatches($numberOfMatches) {
        $this->numberOfMatches = $numberOfMatches;
        return $this;
    }

    public function setOrderTime($orderTime) {
        $this->orderTime = $orderTime;
        return $this;
    }

    public function setLastUpdateDate($lastUpdateDate) {
        $this->lastUpdateDate = $lastUpdateDate;
        return $this;
    }

    public function setTotalOrderAmount($totalOrderAmount) {
        $this->totalOrderAmount = $totalOrderAmount;
        return $this;
    }

    public function setOrderState($orderState) {
        $this->orderState = $orderState;
        return $this;
    }

    public function setDateCancelled($dateCancelled) {
        $this->dateCancelled = $dateCancelled;
        return $this;
    }

    public function setOrderId($orderId) {
        $this->orderId = $orderId;
        return $this;
    }

    public function setClientOrderIdentifier($clientOrderIdentifier) {
        $this->clientOrderIdentifier = $clientOrderIdentifier;
        return $this;
    }

    public function setSellerOrderId($sellerOrderId) {
        $this->sellerOrderId = $sellerOrderId;
        return $this;
    }

    public function setFlagStyle($flagStyle) {
        $this->flagStyle = $flagStyle;
        return $this;
    }

    public function setOrderStatus(Status $orderStatus) {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    public function setResellerId($resellerId) {
        $this->resellerId = $resellerId;
        return $this;
    }

    public function setBuyerEmailAddress($buyerEmailAddress) {
        $this->buyerEmailAddress = $buyerEmailAddress;
        return $this;
    }

    public function setEmailOptIn($emailOptIn) {
        $this->emailOptIn = $emailOptIn;
        return $this;
    }

    public function setPaymentInfo(PaymentInfo $paymentInfo) {
        $this->paymentInfo = $paymentInfo;
        return $this;
    }

    public function setShippingInfo(ShippingInfo $shippingInfo) {
        $this->shippingInfo = $shippingInfo;
        return $this;
    }

    public function setBillingInfo(Contact $billingInfo) {
        $this->billingInfo = $billingInfo;
        return $this;
    }

    public function setFlagDescription($flagDescription) {
        $this->flagDescription = $flagDescription;
        return $this;
    }

    public function setShoppingCart(Cart $shoppingCart) {
        $this->shoppingCart = $shoppingCart;
        return $this;
    }

    public function setCustomValueList(array $customValueList) {
        $this->customValueList = $customValueList;
        return $this;
    }

    public function setBuyerIPAddress($buyerIPAddress) {
        $this->buyerIPAddress = $buyerIPAddress;
        return $this;
    }

    public function setTransactionNotes($transactionNotes) {
        $this->transactionNotes = $transactionNotes;
        return $this;
    }

    public function __construct($obj) {
        $this->setOrderStatus(new Status());
        $this->setPaymentInfo(new PaymentInfo());
        $this->setShippingInfo(new ShippingInfo());
        $this->setBillingInfo(new Contact());
        $this->setShoppingCart(new Cart());

        if ($obj != null)
            $this->load($obj);
    }

    public function formatValue($key, $value) {
        switch ($key) {
            case "orderStatus":
                return new Status($value);
            case "paymentInfo":
                return new PaymentInfo($value);
            case "shippingInfo":
                return new ShippingInfo($value);
            case "billingInfo":
                return new Contact($value);
            case "shoppingCart":
                return new Cart($value);
            case "customValueList":
                if (is_array($value)) {
                    $cvArray = array();
                    foreach ($value as $cv) {
                        $cvAArray[] = new CustomValue($cv);
                    }
                    return $cvAArray;
                } else {
                    return array(new CustomValue($value));
                }
            case "lastUpdateDate":
            case "orderTimeGMT":
            case "dateCanceledGMT":
                if ($value == null)
                    return;
                return new \DateTime($value);
            default:
                return (string) $value;
        }
    }

}