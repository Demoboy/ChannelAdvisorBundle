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
class DistributionCenterInfoSubmit implements \KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface {

    //put your code here
    protected $distributionCenterCode;
    protected $quantity;
    protected $quantityUpdateType;
    protected $warehouseLocation;
    protected $receivedInInventory;
    protected $shippingRateList;

    public function getDistributionCenterCode() {
        return $this->distributionCenterCode;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getQuantityUpdateType() {
        return $this->quantityUpdateType;
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

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
        return $this;
    }

    public function setQuantityUpdateType($quantityUpdateType) {
        $this->quantityUpdateType = $quantityUpdateType;
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

    public function __construct($obj = null) {
        $this->setShippingRateList(array());
        $this->setReceivedInInventory(new \DateTime());
        
        if ($obj != null) 
            $this->load($obj);
    }
    
    public function toArray() {
        $shipList = array();
        
        foreach ($this->getShippingRateList() as $l) {
            $shipList[] = $l->toArray();
        }
        
        return array(
            'DistributionCenterCode' => $this->getDistributionCenterCode(),
            'Quantity' => $this->getQuantity(),
            'QuantityUpdateType' => $this->getQuantityUpdateType(),
            'ShippingRateList' => $shipList,
            'ReceivedInInventory' => $this->getReceivedInInventory()->format('c'),
        );
    }
}