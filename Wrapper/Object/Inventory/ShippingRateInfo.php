<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KMJ\ChannelAdvisorBundle\Wrapper\Object\Inventory;

use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
use KMJ\ChannelAdvisorBundle\Interfaces\ResponseInterface;
use InvalidArgumentException;

/**
 * Description of ShippingRateInfo
 *
 * @author kaelinjacobson
 */
class ShippingRateInfo implements RequestInterface, ResponseInterface {

    //put your code here
    protected $destinationZoneName;
    protected $carrierCode;
    protected $classCode;
    protected $firstItemRateAttribute;
    protected $firstItemRate;
    protected $firstItemHandlingRateAttribute;
    protected $firstItemHandlingRate;
    protected $additionalItemRateAttribute;
    protected $additionalItemRate;
    protected $additionalItemHandlingRateAttribute;
    protected $additionalItemHandlingRate;
    protected $freeShippingIfBuyItNow;

    public function getDestinationZoneName() {
        return $this->destinationZoneName;
    }

    public function getCarrierCode() {
        return $this->carrierCode;
    }

    public function getClassCode() {
        return $this->classCode;
    }

    public function getFirstItemRateAttribute() {
        return $this->firstItemRateAttribute;
    }

    public function getFirstItemRate() {
        return $this->firstItemRate;
    }

    public function getFirstItemHandlingRateAttribute() {
        return $this->firstItemHandlingRateAttribute;
    }

    public function getFirstItemHandlingRate() {
        return $this->firstItemHandlingRate;
    }

    public function getAdditionalItemRateAttribute() {
        return $this->additionalItemRateAttribute;
    }

    public function getAdditionalItemRate() {
        return $this->additionalItemRate;
    }

    public function getAdditionalItemHandlingRateAttribute() {
        return $this->additionalItemHandlingRateAttribute;
    }

    public function getAdditionalItemHandlingRate() {
        return $this->additionalItemHandlingRate;
    }

    public function getFreeShippingIfBuyItNow() {
        return $this->freeShippingIfBuyItNow;
    }

    public function setDestinationZoneName($destinationZoneName) {
        $this->destinationZoneName = $destinationZoneName;
        return $this;
    }

    public function setCarrierCode($carrierCode) {
        $this->carrierCode = $carrierCode;
        return $this;
    }

    public function setClassCode($classCode) {
        $this->classCode = $classCode;
        return $this;
    }

    public function setFirstItemRateAttribute($firstItemRateAttribute) {
        if (!in_array($firstItemRateAttribute, $this->getPossibleShippingRateAttributes())) {
            throw new InvalidArgumentException("First Item Rate is not allowed");
        }

        $this->firstItemRateAttribute = $firstItemRateAttribute;
        return $this;
    }

    public function setFirstItemRate($firstItemRate) {
        $this->firstItemRate = $firstItemRate;
        return $this;
    }

    public function setFirstItemHandlingRateAttribute($firstItemHandlingRateAttribute) {
        if (!in_array($firstItemHandlingRateAttribute, $this->getPossibleHandlingRates())) {
            throw new InvalidArgumentException("First Item Handling is not allowed");
        }

        $this->firstItemHandlingRateAttribute = $firstItemHandlingRateAttribute;
        return $this;
    }

    public function setFirstItemHandlingRate($firstItemHandlingRate) {
        $this->firstItemHandlingRate = $firstItemHandlingRate;
        return $this;
    }

    public function setAdditionalItemRateAttribute($additionalItemRateAttribute) {
        if (!in_array($additionalItemRateAttribute, $this->getPossibleShippingRateAttributes())) {
            throw new InvalidArgumentException("Additional Item Rate is not allowed");
        }

        $this->additionalItemRateAttribute = $additionalItemRateAttribute;
        return $this;
    }

    public function setAdditionalItemRate($additionalItemRate) {
        $this->additionalItemRate = $additionalItemRate;
        return $this;
    }

    public function setAdditionalItemHandlingRateAttribute($additionalItemHandlingRateAttribute) {
        if (!in_array($additionalItemHandlingRateAttribute, $this->getPossibleHandlingRates())) {
            throw new InvalidArgumentException("Additional Item Handling is not allowed");
        }

        $this->additionalItemHandlingRateAttribute = $additionalItemHandlingRateAttribute;
        return $this;
    }

    public function setAdditionalItemHandlingRate($additionalItemHandlingRate) {
        $this->additionalItemHandlingRate = $additionalItemHandlingRate;
        return $this;
    }

    public function setFreeShippingIfBuyItNow($freeShippingIfBuyItNow) {
        $this->freeShippingIfBuyItNow = $freeShippingIfBuyItNow;
        return $this;
    }

    public function getPossibleShippingRateAttributes() {
        return array(
            'Price',
            'TBD',
            'NotAvailable',
        );
    }

    public function getPossibleHandlingRates() {
        return array(
            'Price',
            'NotAvailable',
        );
    }

    public function __construct($obj = null) {        
        $this->setFreeShippingIfBuyItNow(false);
        if ($obj != null)
            $this->load($obj);
    }

    public function toArray() {
        return array(
            'DestinationZoneName' => $this->getDestinationZoneName(),
            'CarrierCode' => $this->getCarrierCode(),
            'ClassCode' => $this->getClassCode(),
            'FirstItemRateAttribute' => $this->getFirstItemHandlingRateAttribute(),
            'FirstItemRate' => $this->getFirstItemRate(),
            'FirstItemHandlingRateAttribute' => $this->getFirstItemHandlingRateAttribute(),
            'FirstItemHandlingRate' => $this->getFirstItemHandlingRate(),
            'AdditionalItemRateAttribute' => $this->getAdditionalItemRateAttribute(),
            'AdditionalItemRate' => $this->getAdditionalItemRate(),
            'AdditionalItemHandlingRateAttribute' => $this->getAdditionalItemHandlingRateAttribute(),
            'AdditionalItemHandlingRate' => $this->getAdditionalItemHandlingRate(),
            'FreeShippingIfBuyItNow' => $this->getFreeShippingIfBuyItNow(),
        );
    }

    public function load($obj) {
        if (isset($obj->DestinationZoneName))
            $this->setDestinationZoneName($obj->DestinationZoneName);

        if (isset($obj->CarrierCode))
            $this->setCarrierCode($obj->CarrierCode);

        if (isset($obj->ClassCode))
            $this->setClassCode($obj->ClassCode);

        if (isset($obj->FirstItemRateAttribute))
            $this->setFirstItemRateAttribute($obj->FirstItemRateAttribute);

        if (isset($obj->FirstItemRate))
            $this->setFirstItemRate($obj->FirstItemRate);

        if (isset($obj->FirstItemHandlingRateAttribute))
            $this->setFirstItemHandlingRateAttribute($obj->FirstItemHandlingRateAttribute);

        if (isset($obj->FirstItemHandlingRate))
            $this->setFirstItemHandlingRate($obj->FirstItemHandlingRate);
        
        if (isset($obj->AdditionalItemRateAttribute))
            $this->setAdditionalItemRateAttribute($obj->AdditionalItemRateAttribute);
        
        if (isset($obj->AdditionalItemRate))
            $this->setAdditionalItemRate($obj->AdditionalItemRate);
        
        if (isset($obj->AdditionalItemHandlingRateAttribute))
            $this->setAdditionalItemHandlingRateAttribute($obj->AdditionalItemHandlingRateAttribute);
        
        if (isset($obj->AdditionalItemHandlingRate))
            $this->setAdditionalItemHandlingRate($obj->AdditionalItemHandlingRate);
        
        if (isset($obj->FreeShippingIfBuyItNow))
            $this->setFreeShippingIfBuyItNow((bool) $obj->FreeShippingIfBuyItNow);
    }

}

?>
