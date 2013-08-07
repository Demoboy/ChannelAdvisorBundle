<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KMJ\ChannelAdvisorBundle\Wrapper\Object\Inventory;

/**
 * Description of InventoryItemQuantityAndPrice
 *
 * @author kaelinjacobson
 */
class ItemQuantityAndPrice implements \KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface {

    protected $sku;
    protected $distributionCenterCode;
    protected $quantity;
    protected $updateType;
    protected $priceInfo;

    public function getSku() {
        return $this->sku;
    }

    public function getDistributionCenterCode() {
        return $this->distributionCenterCode;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getUpdateType() {
        return $this->updateType;
    }

    public function getPriceInfo() {
        return $this->priceInfo;
    }

    public function setSku($sku) {
        $this->sku = $sku;
        return $this;
    }

    public function setDistributionCenterCode($distributionCenterCode) {
        $this->distributionCenterCode = $distributionCenterCode;
        return $this;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
        return $this;
    }

    public function setPriceInfo($priceInfo) {
        $this->priceInfo = $priceInfo;
        return $this;
    }

    public function __construct() {
        $this->setPriceInfo(new PriceInfo());
    }
    
     public function setUpdateType($updateType) {
        if (!in_array($updateType, $this->getPossibleUpdateTypes())) {
            throw new \InvalidArgumentException("Update type is invalid");
        }
        $this->updateType = $updateType;
        return $this;
    }
    
    public function getPossibleUpdateTypes() {
        return array(
            'Absolute',
            'Relative',
            'Available',
            'InStock',
            'UnShipped',
        );
    }

    public function toArray() {
        return array(
            'Sku' => $this->getSku(),
            'DistributionCenterCode' => $this->getDistributionCenterCode(),
            'Quantity' => $this->getQuantity(),
            'UpdateType' => $this->getUpdateType(),
            'PriceInfo' => $this->getPriceInfo()->toArray(),
        );
    }
}