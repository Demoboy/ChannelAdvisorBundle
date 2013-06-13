<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KMJ\ChannelAdvisorBundle\Wrapper\Object\Inventory;

use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;

/**
 * Description of PriceInfo
 *
 * @author kaelinjacobson
 */
class PriceInfo implements RequestInterface, \KMJ\ChannelAdvisorBundle\Interfaces\ResponseInterface {

    //put your code here
    protected $cost;
    protected $retailPrice;
    protected $startingPrice;
    protected $reservePrice;
    protected $takeItPrice;
    protected $secondChanceOfferPrice;
    protected $storePrice;

    public function getCost() {
        return $this->cost;
    }

    public function getRetailPrice() {
        return $this->retailPrice;
    }

    public function getStartingPrice() {
        return $this->startingPrice;
    }

    public function getReservePrice() {
        return $this->reservePrice;
    }

    public function getTakeItPrice() {
        return $this->takeItPrice;
    }

    public function getSecondChanceOfferPrice() {
        return $this->secondChanceOfferPrice;
    }

    public function getStorePrice() {
        return $this->storePrice;
    }

    public function setCost($cost) {
        $this->cost = $cost;
        return $this;
    }

    public function setRetailPrice($retailPrice) {
        $this->retailPrice = $retailPrice;
        return $this;
    }

    public function setStartingPrice($startingPrice) {
        $this->startingPrice = $startingPrice;
        return $this;
    }

    public function setReservePrice($reservePrice) {
        $this->reservePrice = $reservePrice;
        return $this;
    }

    public function setTakeItPrice($takeItPrice) {
        $this->takeItPrice = $takeItPrice;
        return $this;
    }

    public function setSecondChanceOfferPrice($secondChanceOfferPrice) {
        $this->secondChanceOfferPrice = $secondChanceOfferPrice;
        return $this;
    }

    public function setStorePrice($storePrice) {
        $this->storePrice = $storePrice;
        return $this;
    }

    public function toArray() {
        return array(
            'Cost' => $this->getCost(),
            'RetailPrice' => $this->getRetailPrice(),
            'StartingPrice' => $this->getStartingPrice(),
            'ReservePrice' => $this->getReservePrice(),
            'TakeItPrice' => $this->getTakeItPrice(),
            'SecondChanceOfferPrice' => $this->getSecondChanceOfferPrice(),
            'StorePrice' => $this->getStorePrice(),
        );
    }

    public function load($obj) {
        if (isset($obj->Cost))
            $this->setCost($obj->Cost);

        if (isset($obj->RetailPrice))
            $this->setRetailPrice($obj->RetailPrice);

        if (isset($obj->StartingPrice))
            $this->setStartingPrice($obj->StartingPrice);

        if (isset($obj->ReservePrice))
            $this->setReservePrice($obj->ReservePrice);

        if (isset($obj->TakeItPrice))
            $this->setTakeItPrice($obj->TakeItPrice);

        if (isset($obj->SecondChanceOfferPrice))
            $this->setSecondChanceOfferPrice($obj->SecondChanceOfferPrice);

        if (isset($obj->StorePrice))
            $this->setStorePrice($obj->StorePrice);
    }

}

?>
