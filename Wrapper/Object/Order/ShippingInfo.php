<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KMJ\ChannelAdvisorBundle\Wrapper\Object\Order;

use KMJ\ChannelAdvisorBundle\Interfaces\ResponseInterface;
use DateTime;

/**
 * Description of ShippingInfo
 *
 * @author kaelinjacobson
 */
class ShippingInfo extends \KMJ\ChannelAdvisorBundle\Wrapper\Object\Contact implements ResponseInterface {

    use \KMJ\ChannelAdvisorBundle\Traits\AdvancedElementTrait {
        \KMJ\ChannelAdvisorBundle\Traits\AdvancedElementTrait::__construct as private __siConstruct;
    }

    public function __construct($obj = null) {
        parent::__construct($obj);
        $this->__siConstruct($obj);
    }

    protected $shipmentList;
    protected $shippingInstructions;
    protected $estimatedShipDate;
    protected $deliveryDate;

    public function getShipmentList() {
        return $this->shipmentList;
    }

    public function getShippingInstructions() {
        return $this->shippingInstructions;
    }

    public function getEstimatedShipDate() {
        return $this->estimatedShipDate;
    }

    public function getDeliveryDate() {
        return $this->deliveryDate;
    }

    public function setShipmentList($shipmentList) {
        $this->shipmentList = $shipmentList;
        return $this;
    }

    public function setShippingInstructions($shippingInstructions) {
        $this->shippingInstructions = $shippingInstructions;
        return $this;
    }

    public function setEstimatedShipDate($estimatedShipDate) {
        $this->estimatedShipDate = $estimatedShipDate;
        return $this;
    }

    public function setDeliveryDate($deliveryDate) {
        $this->deliveryDate = $deliveryDate;
        return $this;
    }

    public function formatValue($key, $value) {
        switch ($key) {
            case "shipmentList":
                if (is_array($value)) {
                    $shipmentList = array();
                    foreach ($value as $list) {
                        $shipmentList[] = new Shipment($list->Shipment);
                    }

                    return $shipmentList;
                } else {
                    return array(new Shipment($value->Shipment));
                }
            case "estimatedShipDate":
            case "deliveryDate":
                if ($value == null)
                    return $value;
                return new \DateTime($value);
            default:
                return (string) $value;
        }
    }

}