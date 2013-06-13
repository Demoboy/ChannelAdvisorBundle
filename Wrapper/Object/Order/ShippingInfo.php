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

    //put your code here
    protected $shipmentList;
    protected $shipmentInstructions;
    protected $estimatedShipDate;
    protected $deliveryDate;

    public function getShipmentList() {
        return $this->shipmentList;
    }

    public function getShipmentInstructions() {
        return $this->shipmentInstructions;
    }

    public function getEstimatedShipDate() {
        return $this->estimatedShipDate;
    }

    public function getDeliveryDate() {
        return $this->deliveryDate;
    }

    public function setShipmentList(array $shipmentList) {
        $this->shipmentList = $shipmentList;
        return $this;
    }

    public function setShipmentInstructions($shipmentInstructions) {
        $this->shipmentInstructions = $shipmentInstructions;
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

    public function load($obj) {
        parent::load($obj);
        
        if (isset($obj->ShipmentList)) {
            if (is_array($obj->ShipmentList)) {
                $shipmentList = array();
                foreach ($obj->ShipmentList as $list) {  
                    $shipmentList[] = new Shipment($list->Shipment);
                }
                
                $this->setShipmentList($shipmentList);
            } else {
                $this->setShipmentList(array(new Shipment($obj->ShipmentList->Shipment)));
            }
        }

        if (isset($obj->ShipmentInstructions))
            $this->setShipmentInstructions($obj->ShipmentInstructions);

        if (isset($obj->EstimatedShipDate))
            $this->setEstimatedShipDate(new DateTime($obj->EstimatedShipDate));

        if (isset($obj->DeliveryDate))
            $this->setDeliveryDate(new DateTime($obj->DeliveryDate));
    }

}