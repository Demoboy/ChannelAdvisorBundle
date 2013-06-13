<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KMJ\ChannelAdvisorBundle\Wrapper\Object\Inventory;

use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
use KMJ\ChannelAdvisorBundle\Interfaces\ResponseInterface;

/**
 * Description of ShippingInfo
 *
 * @author kaelinjacobson
 */
class ShippingInfo implements RequestInterface, ResponseInterface {

    //put your code here
    protected $distributionCenterCode;
    protected $isFBA;
    protected $shippingRateList;

    public function getDistributionCenterCode() {
        return $this->distributionCenterCode;
    }

    public function getIsFBA() {
        return $this->isFBA;
    }

    public function getShippingRateList() {
        return $this->shippingRateList;
    }

    public function setDistributionCenterCode($distributionCenterCode) {
        $this->distributionCenterCode = $distributionCenterCode;
        return $this;
    }

    public function setIsFBA($isFBA) {
        $this->isFBA = $isFBA;
        return $this;
    }

    public function setShippingRateList(array $shippingRateList) {
        $this->shippingRateList = $shippingRateList;
        return $this;
    }

    public function getBlankShippingRate() {
        return new ShippingRateInfo();
    }

    public function __construct() {
        $this->setShippingRateList(array());
    }

    public function toArray() {
        $rateList = array();

        foreach ($this->getShippingRateList() as $rate) {
            $rateList[] = $rate->toArray();
        }

        return array(
            'DistributionCenterCode' => $this->getDistributionCenterCode(),
            'IsFBA' => $this->getIsFBA(),
            'ShippingRateList' => $rateList,
        );
    }

    public function load($obj) {
        if (isset($obj->DistributionCenterCode))
            $this->setDistributionCenterCode($obj->DistributionCenterCode);

        if (isset($obj->IsFBA))
            $this->setIsFBA((bool) $obj->IsFBA);
    }

}

?>
