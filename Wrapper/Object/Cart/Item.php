<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Object\Cart;

/**
 * Description of Item
 *
 * @author kaelinjacobson
 */
class Item implements \KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface, \KMJ\ChannelAdvisorBundle\Interfaces\ResponseInterface {

    //put your code here
    protected $id;
    protected $quantity;
    protected $source;
    protected $unitPrice;
    protected $sku;
    protected $title;

    public function getId() {
        return $this->id;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getSource() {
        return $this->source;
    }

    public function getUnitPrice() {
        return $this->unitPrice;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
        return $this;
    }

    public function setSource($source) {
        if (!in_array($source, $this->getPossibleSources()))
            throw new \InvalidArgumentException('Source is invalid');

        $this->source = $source;
        return $this;
    }

    public function setUnitPrice($unitPrice) {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    public function getSku() {
        return $this->sku;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setSku($sku) {
        $this->sku = $sku;
        return $this;
    }

    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    public function getPossibleSources() {
        return array(
            "AMAZON_AUCTIONS",
            "AMAZON_CA",
            "AMAZON_DE",
            "AMAZON_FR",
            "AMAZON_MARKETPLACE",
            "AMAZON_MERCHANTSAT",
            "AMAZON_UK",
            "AMAZON_US",
            "AMAZON_WEBSTORE",
            "AMAZON_WEBSTORE_CA",
            "AMAZON_WEBSTORE_DE",
            "AMAZON_WEBSTORE_FR",
            "AMAZON_WEBSTORE_UK",
            "AMAZON_WEBSTORE_US",
            "BEST_BUY",
            "BUY_DOT_COM",
            "CHANNELADVISOR_STORE",
            "CHECKOUT_BY_AMAZON_CA",
            "CHECKOUT_BY_AMAZON_DE",
            "CHECKOUT_BY_AMAZON_FR",
            "CHECKOUT_BY_AMAZON_UK",
            "CHECKOUT_BY_AMAZON_US",
            "DEMANDWARE_STORE",
            "DIRECT_SALE",
            "EBAY_AU",
            "EBAY_CA",
            "EBAY_DE",
            "EBAY_ES",
            "EBAY_FR",
            "EBAY_IE",
            "EBAY_IT",
            "EBAY_MOTORS",
            "EBAY_MOTORS_FIXED_PRICE",
            "EBAY_NL",
            "EBAY_STORES",
            "EBAY_UK",
            "EBAY_US",
            "GROUPON_GOODS",
            "LA_REDOUTE",
            "MAGENTO_ENTERPRISE",
            "MAGENTO_GO",
            "NEWEGG",
            "ONE_STOP_PLUS",
            "OVERSTOCK",
            "OVERSTOCK_SHOPPING",
            "PIXMANIA",
            "SELL_ON_SEARS",
            "STOREADVISOR_PREMIUM",
            "TRADEME",
            "TRADING_POST",
            "UNKNOWN",
            "WALMART",
            "YAHOO",
            "YAHOO_STORES",
        );
    }

    public function __construct() {
        $this->setSource('DIRECT_SALE');
    }

    public function toArray() {
        return array(
            "LineItemID" => $this->getId(),
            "Quantity" => $this->getQuantity(),
            "ItemSaleSource" => $this->getSource(),
            "UnitPrice" => $this->getUnitPrice(),
            "SKU" => $this->getSku(),
            "Title" => $this->getTitle(),
        );
    }

    public function load($obj) {
        if (isset($obj->SKU))
            $this->setSku($obj->SKU);

        if (isset($obj->Title))
            $this->setTitle($obj->Title);

        if (isset($obj->LineItemID))
            $this->setId($obj->LineItemID);

        if (isset($obj->Quantity))
            $this->setQuantity($obj->Quantity);

        if (isset($obj->ItemSaleSource))
            $this->setSource($obj->ItemSaleSource);

        if (isset($obj->UnitPrice))
            $this->setUnitPrice($obj->UnitPrice);
    }

}

?>
