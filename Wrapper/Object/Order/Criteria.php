<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Object\Order;

use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
use DateTime;
use DateTimeZone;
use InvalidArgumentException;


/**
 * Description of Criteria
 *
 * @author kaelinjacobson
 */
class Criteria implements RequestInterface {

    /**
     * @var DateTime 
     */
    protected $orderCreationFilterBeginTime;

    /**
     * @var DateTime 
     */
    protected $orderCreationFilterEndTime;

    /**
     * @var DateTime 
     */
    protected $statusUpdateFilterBeginTime;

    /**
     * @var DateTime 
     */
    protected $statusUpdateFilterEndTime;

    /**
     * @var boolean 
     */
    protected $joinDateFiltersWithOr;
    protected $detailLevel;
    protected $exportState;

    /**
     * @var array 
     */
    protected $orderIdList;

    /**
     *
     * @var array 
     */
    protected $clientOrderIdentifierList;
    protected $orderStateFilter;
    protected $paymentStatusFilter;
    protected $checkoutStatusFilter;
    protected $shippingStatusFilter;
    protected $refundStatusFilter;
    protected $distributionCenterCode;
    protected $pageNumberFilter;
    protected $pageSize;

    public function getOrderCreationFilterBeginTime() {
        return $this->orderCreationFilterBeginTime;
    }

    public function getOrderCreationFilterEndTime() {
        return $this->orderCreationFilterEndTime;
    }

    public function getStatusUpdateFilterBeginTime() {
        return $this->statusUpdateFilterBeginTime;
    }

    public function getStatusUpdateFilterEndTime() {
        return $this->statusUpdateFilterEndTime;
    }

    public function getJoinDateFiltersWithOr() {
        return $this->joinDateFiltersWithOr;
    }

    public function getDetailLevel() {
        return $this->detailLevel;
    }

    public function getExportState() {
        return $this->exportState;
    }

    public function getOrderIdList() {
        return $this->orderIdList;
    }

    public function getClientOrderIdentifierList() {
        return $this->clientOrderIdentifierList;
    }

    public function getOrderStateFilter() {
        return $this->orderStateFilter;
    }

    public function getPaymentStatusFilter() {
        return $this->paymentStatusFilter;
    }

    public function getCheckoutStatusFilter() {
        return $this->checkoutStatusFilter;
    }

    public function getShippingStatusFilter() {
        return $this->shippingStatusFilter;
    }

    public function getRefundStatusFilter() {
        return $this->refundStatusFilter;
    }

    public function getDistributionCenterCode() {
        return $this->distributionCenterCode;
    }

    public function getPageNumberFilter() {
        return $this->pageNumberFilter;
    }

    public function getPageSize() {
        return $this->pageSize;
    }

    public function setOrderCreationFilterBeginTime(DateTime $orderCreationFilterBeginTime) {
        $this->orderCreationFilterBeginTime = $this->convertToGMT($orderCreationFilterBeginTime);
        return $this;
    }

    public function setOrderCreationFilterEndTime(DateTime $orderCreationFilterEndTime) {
        $this->orderCreationFilterEndTime = $this->convertToGMT($orderCreationFilterEndTime);
        return $this;
    }

    public function setStatusUpdateFilterBeginTime(DateTime $statusUpdateFilterBeginTime) {
        $this->statusUpdateFilterBeginTime = $this->convertToGMT($statusUpdateFilterBeginTime);
        return $this;
    }

    public function setStatusUpdateFilterEndTime(DateTime $statusUpdateFilterEndTime) {
        $this->statusUpdateFilterEndTime = $this->convertToGMT($statusUpdateFilterEndTime);
        return $this;
    }

    public function setJoinDateFiltersWithOr($joinDateFiltersWithOr) {
        $this->joinDateFiltersWithOr = $joinDateFiltersWithOr;
        return $this;
    }

    public function setDetailLevel($detailLevel) {
        if (!in_array($detailLevel, $this->getPossibleDetailLevelTypes()))
            throw new InvalidArgumentException("Detail level of {$detailLevel} is not supported");

        $this->detailLevel = $detailLevel;
        return $this;
    }

    public function setExportState($exportState) {
        if (!in_array($exportState, $this->getPossibleExportStateTypes()))
            throw new InvalidArgumentException("Export state of {$exportState} is not supported");

        $this->exportState = $exportState;
        return $this;
    }

    public function setOrderIdList($orderIdList) {
        $this->orderIdList = $orderIdList;
        return $this;
    }

    public function setClientOrderIdentifierList($clientOrderIdentifierList) {
        $this->clientOrderIdentifierList = $clientOrderIdentifierList;
        return $this;
    }

    public function setOrderStateFilter($orderStateFilter) {
        if (!in_array($orderStateFilter, $this->getPossibleOrderStateFilters()))
            throw new InvalidArgumentException("Order state of {$orderStateFilter} is not supported");

        $this->orderStateFilter = $orderStateFilter;
        return $this;
    }

    public function setPaymentStatusFilter($paymentStatusFilter) {
        if (!in_array($paymentStatusFilter, $this->getPossiblePaymentStatusCodes()))
            throw new InvalidArgumentException("Payment status filter of {$paymentStatusFilter} is not supported");

        $this->paymentStatusFilter = $paymentStatusFilter;
        return $this;
    }

    public function setCheckoutStatusFilter($checkoutStatusFilter) {
        if (!in_array($checkoutStatusFilter, $this->getPossibleCheckoutStatusCodes()))
            throw new InvalidArgumentException("Checkout status filter of {$checkoutStatusFilter} is not supported");

        $this->checkoutStatusFilter = $checkoutStatusFilter;
        return $this;
    }

    public function setShippingStatusFilter($shippingStatusFilter) {
        if (!in_array($shippingStatusFilter, $this->getPossibleShippingStatusCodes()))
            throw new InvalidArgumentException("Shipping status filter of {$shippingStatusFilter} is not supported");

        $this->shippingStatusFilter = $shippingStatusFilter;
        return $this;
    }

    public function setRefundStatusFilter($refundStatusFilter) {
        if (!in_array($refundStatusFilter, $this->getPossibleRefundStatusCodes()))
            throw new InvalidArgumentException("Shipping status filter of {$shippingStatusFilter} is not supported");

        $this->refundStatusFilter = $refundStatusFilter;
        return $this;
    }

    public function setDistributionCenterCode($distributionCenterCode) {
        $this->distributionCenterCode = $distributionCenterCode;
        return $this;
    }

    public function setPageNumberFilter($pageNumberFilter) {
        $this->pageNumberFilter = $pageNumberFilter;
        return $this;
    }

    public function setPageSize($pageSize) {
        $this->pageSize = $pageSize;
        return $this;
    }

    private function convertToGMT(DateTime $date) {
        $tz = new DateTimeZone("GMT");
        $date->setTimezone($tz);
        return $date;
    }

    public function getPossibleDetailLevelTypes() {
        return array(
            'Low',
            'Medium',
            'High',
            'Complete',
        );
    }

    public function getPossibleExportStateTypes() {
        return array(
            'Unknown',
            'NotExported',
            'Exported',
        );
    }

    public function getPossibleOrderStateFilters() {
        return array(
            'Active',
            'Archived',
            'Cancelled',
        );
    }

    public function getPossiblePaymentStatusCodes() {
        return array(
            'NoChange',
            'NotSubmitted',
            'Submitted',
            'Deposited',
            'Cleared',
            'Failed',
        );
    }

    public function getPossibleCheckoutStatusCodes() {
        return array(
            'NoChange',
            'NotVisited',
            'Visited',
            'OnHold',
            'Completed',
            'CompletedOffline',
            'Cancelled',
        );
    }

    public function getPossibleShippingStatusCodes() {
        return array(
            'NoChange',
            'Unshipped',
            'PendingShipment',
            'PariallyShipped',
            'Shipped',
        );
    }

    public function getPossibleRefundStatusCodes() {
        return array(
            'NoRefunds',
            'OrderLevel',
            'LineItemLevel',
            'OrderAndLineItemLevel',
            'FailedAttemptsOnly',
        );
    }
    
    public function toArray() {
        return array(
            'OrderCreationFilterBeginTimeGMT' => $this->getOrderCreationFilterBeginTime(),
            'OrderCreationFilterEndTimeGMT' => $this->getOrderCreationFilterEndTime(),
            'StatusUpdateFilterBeginTimeGMT' => $this->getStatusUpdateFilterBeginTime(),
            'StatusUpdateFilterEndTimeGMT' => $this->getStatusUpdateFilterEndTime(),
            'JoinDateFiltersWithOr' => $this->getJoinDateFiltersWithOr(),
            'DetailLevel' => $this->getDetailLevel(),
            'ExportState' => $this->getExportState(),
            'OrderIDList' => $this->getOrderIdList(),
            'ClientOrderIdentifierList' => $this->getClientOrderIdentifierList(),
            'OrderStateFilter' => $this->getOrderStateFilter(),
            'PaymentStatusFilter' => $this->getPaymentStatusFilter(),
            'CheckoutStatusFilter' => $this->getCheckoutStatusFilter(),
            'ShippingStatusFilter' => $this->getShippingStatusFilter(),
            'RefundStatusFilter' => $this->getRefundStatusFilter(),
            'DistributionCenterCode' => $this->getDistributionCenterCode(),
            'PageNumberFilter' => $this->getPageNumberFilter(),
            'PageSize' => $this->getPageSize(),
        );
    }


}

?>
