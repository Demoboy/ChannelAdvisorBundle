<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Object\Order;

use KMJ\ChannelAdvisorBundle\Interfaces\ResponseInterface;

/**
 * Description of LineItem
 *
 * @author kaelinjacobson
 */
class LineItem extends LineItemBase implements ResponseInterface {

    use \KMJ\ChannelAdvisorBundle\Traits\AdvancedElementTrait {
        \KMJ\ChannelAdvisorBundle\Traits\AdvancedElementTrait::__construct as private __liConstuct;
    }

    protected $lineItemID;
    protected $allowNegativeQuantity;
    protected $quantity;
    protected $itemSaleSource;
    protected $SKU;
    protected $title;
    protected $buyerUserID;
    protected $buyerFeedbackRating;
    protected $salesSourceID;
    protected $VATRate;
    protected $unitWeight;
    protected $warehouseLocation;
    protected $taxCost;
    protected $shippingCost;
    protected $shippingTaxCost;
    protected $recyclingFee;
    protected $giftWrapCost;
    protected $giftWrapTaxCost;
    protected $giftMessage;
    protected $giftWrapLevel;
    protected $userName;
    protected $distributionCenterCode;
    protected $FBA;
    protected $itemPromoList;
    protected $itemSaleSourceTransactionID;
    protected $isExternallyFulfilled;

    public function getUnitPrice() {
        return $this->unitPrice;
    }

    public function getId() {
        return $this->id;
    }

    public function getAllowNegativeQuantity() {
        return $this->allowNegativeQuantity;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getItemSaleSource() {
        return $this->itemSaleSource;
    }

    public function getSku() {
        return $this->sku;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getBuyerUserId() {
        return $this->buyerUserId;
    }

    public function getBuyerFeedbackRating() {
        return $this->buyerFeedbackRating;
    }

    public function getSalesSourceId() {
        return $this->salesSourceId;
    }

    public function getVatRate() {
        return $this->vatRate;
    }

    public function getUnitWeight() {
        return $this->unitWeight;
    }

    public function getWarehouseLocation() {
        return $this->warehouseLocation;
    }

    public function getTaxCost() {
        return $this->taxCost;
    }

    public function getShippingCost() {
        return $this->shippingCost;
    }

    public function getShippingTaxCost() {
        return $this->shippingTaxCost;
    }

    public function getRecyclingFee() {
        return $this->recyclingFee;
    }

    public function getGiftWrapCost() {
        return $this->giftWrapCost;
    }

    public function getGiftWrapTaxCost() {
        return $this->giftWrapTaxCost;
    }

    public function getGiftMessage() {
        return $this->giftMessage;
    }

    public function getGiftWrapLevel() {
        return $this->giftWrapLevel;
    }

    public function getUserName() {
        return $this->userName;
    }

    public function getDistributionCenterCode() {
        return $this->distributionCenterCode;
    }

    public function getFBA() {
        return $this->FBA;
    }

    public function getItemPromoList() {
        return $this->itemPromoList;
    }

    public function getItemSaleSourceTransactionId() {
        return $this->itemSaleSourceTransactionId;
    }

    public function setUnitPrice($unitPrice) {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setAllowNegativeQuantity($allowNegativeQuantity) {
        $this->allowNegativeQuantity = $allowNegativeQuantity;
        return $this;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
        return $this;
    }

    public function setItemSaleSource($itemSaleSource) {
        $this->itemSaleSource = $itemSaleSource;
        return $this;
    }

    public function setSku($sku) {
        $this->sku = $sku;
        return $this;
    }

    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    public function setBuyerUserId($buyerUserId) {
        $this->buyerUserId = $buyerUserId;
        return $this;
    }

    public function setBuyerFeedbackRating($buyerFeedbackRating) {
        $this->buyerFeedbackRating = $buyerFeedbackRating;
        return $this;
    }

    public function setSalesSourceId($salesSourceId) {
        $this->salesSourceId = $salesSourceId;
        return $this;
    }

    public function setVatRate($vatRate) {
        $this->vatRate = $vatRate;
        return $this;
    }

    public function setUnitWeight($unitWeight) {
        $this->unitWeight = $unitWeight;
        return $this;
    }

    public function setWarehouseLocation($warehouseLocation) {
        $this->warehouseLocation = $warehouseLocation;
        return $this;
    }

    public function setTaxCost($taxCost) {
        $this->taxCost = $taxCost;
        return $this;
    }

    public function setShippingCost($shippingCost) {
        $this->shippingCost = $shippingCost;
        return $this;
    }

    public function setShippingTaxCost($shippingTaxCost) {
        $this->shippingTaxCost = $shippingTaxCost;
        return $this;
    }

    public function setRecyclingFee($recyclingFee) {
        $this->recyclingFee = $recyclingFee;
        return $this;
    }

    public function setGiftWrapCost($giftWrapCost) {
        $this->giftWrapCost = $giftWrapCost;
        return $this;
    }

    public function setGiftWrapTaxCost($giftWrapTaxCost) {
        $this->giftWrapTaxCost = $giftWrapTaxCost;
        return $this;
    }

    public function setGiftMessage($giftMessage) {
        $this->giftMessage = $giftMessage;
        return $this;
    }

    public function setGiftWrapLevel($giftWrapLevel) {
        $this->giftWrapLevel = $giftWrapLevel;
        return $this;
    }

    public function setUserName($userName) {
        $this->userName = $userName;
        return $this;
    }

    public function setDistributionCenterCode($distributionCenterCode) {
        $this->distributionCenterCode = $distributionCenterCode;
        return $this;
    }

    public function setFBA($isFBA) {
        $this->isFBA = $isFBA;
        return $this;
    }

    public function setItemPromoList($itemPromoList) {
        $this->itemPromoList = $itemPromoList;
        return $this;
    }

    public function setItemSaleSourceTransactionId($itemSaleSourceTransactionId) {
        $this->itemSaleSourceTransactionId = $itemSaleSourceTransactionId;
        return $this;
    }

    public function isFBA() {
        return $this->getFBA();
    }

    public function __construct($obj = null) {
        parent::__construct($obj);
        $this->__liConstuct($obj);
    }

    public function formatValue($key, $value) {
        switch ($key) {
            case "allowNegativeQuantity":
            case "isFBA":
            case "itemSaleSourceTransactionID":
            case "isExternallyFulfilled":
                return (bool) $value;
            case "itemPromoList":
                if (is_array($value)) {
                    $promoArray = array();

                    foreach ($value as $promo) {
                        $promoArray[] = new Promo($promo);
                    }

                    return ($promoArray);
                } else {
                    return (array(new Promo($value)));
                }
            case "unitWeight":
                return (string) $value->_;
            default:
                return (string) $value;
        }
    }

}