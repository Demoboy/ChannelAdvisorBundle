<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KMJ\ChannelAdvisorBundle\Wrapper\Object\Inventory;

/**
 * Description of DistributionCenterInfoSubmit
 *
 * @author kaelinjacobson
 */
class DistributionCenterInfoResponse implements \KMJ\ChannelAdvisorBundle\Interfaces\ResponseInterface {

    //put your code here
    protected $distributionCenterCode;
    protected $availableQuantity;
    protected $openAllocatedQuantity;
    protected $openAllocatedPooledQuantity;
    protected $warehouseLocation;
    protected $receivedInInventory;
    protected $shippingRateList;

    public function getDistributionCenterCode() {
        return $this->distributionCenterCode;
    }

    public function getWarehouseLocation() {
        return $this->warehouseLocation;
    }

    public function getReceivedInInventory() {
        return $this->receivedInInventory;
    }

    public function getShippingRateList() {
        return $this->shippingRateList;
    }

    public function setDistributionCenterCode($distributionCenterCode) {
        $this->distributionCenterCode = $distributionCenterCode;
        return $this;
    }

    public function setWarehouseLocation($warehouseLocation) {
        $this->warehouseLocation = $warehouseLocation;
        return $this;
    }

    public function setReceivedInInventory($receivedInInventory) {
        $this->receivedInInventory = $receivedInInventory;
        return $this;
    }

    public function setShippingRateList($shippingRateList) {
        $this->shippingRateList = $shippingRateList;
        return $this;
    }

    public function getAvailableQuantity() {
        return $this->availableQuantity;
    }

    public function getOpenAllocatedQuantity() {
        return $this->openAllocatedQuantity;
    }

    public function getOpenAllocatedPooledQuantity() {
        return $this->openAllocatedPooledQuantity;
    }

    public function setAvailableQuantity($availableQuantity) {
        $this->availableQuantity = $availableQuantity;
        return $this;
    }

    public function setOpenAllocatedQuantity($openAllocatedQuantity) {
        $this->openAllocatedQuantity = $openAllocatedQuantity;
        return $this;
    }

    public function setOpenAllocatedPooledQuantity($openAllocatedPooledQuantity) {
        $this->openAllocatedPooledQuantity = $openAllocatedPooledQuantity;
        return $this;
    }

    public function __construct($obj = null) {
        $this->setShippingRateList(array());

        if ($obj != null)
            $this->load($obj);
    }

    public function load($obj) {
        if (isset($obj->DistributionCenterCode))
            $this->setDistributionCenterCode($obj->DistributionCenterCode);

        if (isset($obj->AvailableQuantity))
            $this->setAvailableQuantity($obj->AvailableQuantity);
        
        if (isset($obj->OpenAllocatedQuantity))
            $this->setOpenAllocatedQuantity($obj->OpenAllocatedQuantity);
        
        if (isset($obj->OpenAllocatedPooledQuantity))
            $this->setOpenAllocatedPooledQuantity($obj->OpenAllocatedPooledQuantity);

        if (isset($obj->WarehouseLocation))
            $this->setWarehouseLocation($obj->WarehouseLocation);

        if (isset($obj->ReceivedInInventory))
            $this->setReceivedInInventory(new \DateTime($obj->ReceivedInInventory));

        if (isset($obj->ShippingRateList)) {
            $array = array();

            foreach ($obj->ShippingRateList->ShippingRateInfo as $shippingRate) {
                $array[] = new \KMJ\ChannelAdvisorBundle\Wrapper\Object\Inventory\ShippingRateInfo($shippingRate);
            }

            $this->setShippingRateList($array);
        }
    }

}