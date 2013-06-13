<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KMJ\ChannelAdvisorBundle\Wrapper\Object\Order;

use KMJ\ChannelAdvisorBundle\Interfaces\ResponseInterface;

/**
 * Description of Shipment
 *
 * @author kaelinjacobson
 */
class Shipment implements ResponseInterface {

    //put your code here
    protected $carrier;
    protected $class;
    protected $trackingNumber;

    public function getCarrier() {
        return $this->carrier;
    }

    public function getClass() {
        return $this->class;
    }

    public function getTrackingNumber() {
        return $this->trackingNumber;
    }

    public function setCarrier($carrier) {
        $this->carrier = $carrier;
        return $this;
    }

    public function setClass($class) {
        $this->class = $class;
        return $this;
    }

    public function setTrackingNumber($trackingNumber) {
        $this->trackingNumber = $trackingNumber;
        return $this;
    }

    public function __construct($obj = null) {
        if ($obj != null)
            $this->load($obj);
    }

    public function load($obj) {
        if (isset($obj->ShippingCarrier))
            $this->setCarrier($obj->ShippingCarrier);

        if (isset($obj->ShippingClass))
            $this->setClass($obj->ShippingCarrier);

        if (isset($obj->TrackingNumber))
            $this->setTrackingNumber($obj->TrackingNumber);
    }

}

?>
