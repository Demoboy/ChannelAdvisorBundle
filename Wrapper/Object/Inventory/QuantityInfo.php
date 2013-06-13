<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KMJ\ChannelAdvisorBundle\Wrapper\Object\Inventory;

/**
 * Description of QuantityInfo
 *
 * @author kaelinjacobson
 */
class QuantityInfo implements \KMJ\ChannelAdvisorBundle\Interfaces\ResponseInterface {

    //put your code here
    protected $available;
    protected $openAllocated;
    protected $openUnallocated;
    protected $pendingCheckout;
    protected $pendingPayment;
    protected $pendingShipment;
    protected $total;
    protected $openAllocatedPooled;
    protected $openUnallocatedPooled;
    protected $pendingCheckoutPooled;
    protected $pendingPaymentPooled;
    protected $pendingShipmentPooled;
    protected $totalPooled;

    public function getAvailable() {
        return $this->available;
    }

    public function getOpenAllocated() {
        return $this->openAllocated;
    }

    public function getOpenUnallocated() {
        return $this->openUnallocated;
    }

    public function getPendingCheckout() {
        return $this->pendingCheckout;
    }

    public function getPendingPayment() {
        return $this->pendingPayment;
    }

    public function getPendingShipment() {
        return $this->pendingShipment;
    }

    public function getTotal() {
        return $this->total;
    }

    public function getOpenAllocatedPooled() {
        return $this->openAllocatedPooled;
    }

    public function getOpenUnallocatedPooled() {
        return $this->openUnallocatedPooled;
    }

    public function getPendingCheckoutPooled() {
        return $this->pendingCheckoutPooled;
    }

    public function getPendingPaymentPooled() {
        return $this->pendingPaymentPooled;
    }

    public function getPendingShipmentPooled() {
        return $this->pendingShipmentPooled;
    }

    public function getTotalPooled() {
        return $this->totalPooled;
    }

    public function setAvailable($available) {
        $this->available = $available;
        return $this;
    }

    public function setOpenAllocated($openAllocated) {
        $this->openAllocated = $openAllocated;
        return $this;
    }

    public function setOpenUnallocated($openUnallocated) {
        $this->openUnallocated = $openUnallocated;
        return $this;
    }

    public function setPendingCheckout($pendingCheckout) {
        $this->pendingCheckout = $pendingCheckout;
        return $this;
    }

    public function setPendingPayment($pendingPayment) {
        $this->pendingPayment = $pendingPayment;
        return $this;
    }

    public function setPendingShipment($pendingShipment) {
        $this->pendingShipment = $pendingShipment;
        return $this;
    }

    public function setTotal($total) {
        $this->total = $total;
        return $this;
    }

    public function setOpenAllocatedPooled($openAllocatedPooled) {
        $this->openAllocatedPooled = $openAllocatedPooled;
        return $this;
    }

    public function setOpenUnallocatedPooled($openUnallocatedPooled) {
        $this->openUnallocatedPooled = $openUnallocatedPooled;
        return $this;
    }

    public function setPendingCheckoutPooled($pendingCheckoutPooled) {
        $this->pendingCheckoutPooled = $pendingCheckoutPooled;
        return $this;
    }

    public function setPendingPaymentPooled($pendingPaymentPooled) {
        $this->pendingPaymentPooled = $pendingPaymentPooled;
        return $this;
    }

    public function setPendingShipmentPooled($pendingShipmentPooled) {
        $this->pendingShipmentPooled = $pendingShipmentPooled;
        return $this;
    }

    public function setTotalPooled($totalPooled) {
        $this->totalPooled = $totalPooled;
        return $this;
    }
    
    public function __construct($obj = null) {
        if ($obj != null)
            $this->load($obj);
    }

    public function load($obj) {
        if (isset($obj->Total))
            $this->setTotal($obj->Total);
        
        if (isset($obj->OpenAllocated))
            $this->setOpenAllocated($obj->OpenAllocated);
        
         if (isset($obj->OpenUnallocated))
            $this->setOpenUnallocated($obj->OpenUnallocated);
         
         if (isset($obj->OpenAllocatedPooled))
            $this->setOpenAllocatedPooled($obj->OpenAllocatedPooled);
         
         if (isset($obj->OpenUnallocatedPooled))
            $this->setOpenUnallocatedPooled($obj->OpenUnallocatedPooled);

        if (isset($obj->Available))
            $this->setAvailable($obj->Available);

        if (isset($obj->PendingCheckout))
            $this->setPendingCheckout($obj->PendingCheckout);

        if (isset($obj->PendingPayment))
            $this->setPendingPayment($obj->PendingPayment);

        if (isset($obj->PendingShipment))
            $this->setPendingShipment($obj->PendingShipment);

        if (isset($obj->PendingCheckoutPooled))
            $this->setPendingCheckoutPooled($obj->PendingCheckoutPooled);

        if (isset($obj->PendingPaymentPooled))
            $this->setPendingPaymentPooled($obj->PendingPaymentPooled);

        if (isset($obj->PendingShipmentPooled))
            $this->setPendingShipmentPooled($obj->PendingShipmentPooled);

        if (isset($obj->TotalPooled))
            $this->setTotalPooled($obj->TotalPooled);
    }

}

?>
