<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Object\Order;

use KMJ\ChannelAdvisorBundle\Interfaces\ResponseInterface;


/**
 * Description of LineItem
 *
 * @author kaelinjacobson
 */
class LineItem extends LineItemBase implements ResponseInterface {

    protected $id;
    protected $allowNegativeQuantity;
    protected $quantity;
    protected $itemSaleSource;
    protected $sku;
    protected $title;
    protected $buyerUserId;
    protected $buyerFeedbackRating;
    protected $salesSourceId;
    protected $vatRate;
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

    /**
     *
     * @var array 
     */
    protected $itemPromoList;
    protected $itemSaleSourceTransactionId;

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

    public function load($obj) {
        parent::load($obj);

        if (isset($obj->LineItemID))
            $this->setId($obj->LineItemID);

        if (isset($obj->AllowNegativeQuantity))
            $this->setAllowNegativeQuantity((bool) $obj->AllowNegativeQuantity);

        if (isset($obj->Quantity))
            $this->setQuantity($obj->Quantity);

        if (isset($obj->ItemSaleSource))
            $this->setItemSaleSource($obj->ItemSaleSource);

        if (isset($obj->SKU))
            $this->setSku($obj->SKU);

        if (isset($obj->Title))
            $this->setTitle($obj->Title);

        if (isset($obj->BuyerUserID))
            $this->setBuyerUserId($obj->BuyerUserID);

        if (isset($obj->BuyerFeedbackRating))
            $this->setBuyerFeedbackRating($obj->BuyerFeedbackRating);

        if (isset($obj->SalesSourceID))
            $this->setSalesSourceId($obj->SalesSourceID);

        if (isset($obj->VATRate))
            $this->setVatRate($obj->VATRate);

        if (isset($obj->UnitWeight))
            $this->setUnitWeight($obj->UnitWeight);

        if (isset($obj->WarehouseLocation))
            $this->setWarehouseLocation($obj->WarehouseLocation);

        if (isset($obj->TaxCost))
            $this->setTaxCost($obj->TaxCost);

        if (isset($obj->ShippingCost))
            $this->setShippingCost($obj->ShippingCost);

        if (isset($obj->ShippingTaxCost))
            $this->setShippingTaxCost($obj->ShippingTaxCost);

        if (isset($obj->RecyclingFee))
            $this->setRecyclingFee($obj->RecyclingFee);

        if (isset($obj->GiftWrapCost))
            $this->setGiftWrapCost($obj->GiftWrapCost);

        if (isset($obj->GiftWrapTaxCost))
            $this->setGiftWrapTaxCost($obj->GiftWrapTaxCost);

        if (isset($obj->GiftMessage))
            $this->setGiftMessage($obj->GiftMessage);

        if (isset($obj->GiftWrapLevel))
            $this->setGiftWrapLevel($obj->GiftWrapLevel);

        if (isset($obj->UserName))
            $this->setUserName($obj->UserName);

        if (isset($obj->DistributionCenterCode))
            $this->setDistributionCenterCode($obj->DistributionCenterCode);

        if (isset($obj->IsFBA))
            $this->setFBA((bool) $obj->IsFBA);

        if (isset($obj->ItemPromoList)) {
            if (is_array($obj->ItemPromoList)) {
                $promoArray = array();

                foreach ($obj->ItemPromoList as $promo) {
                    $promoArray[] = new Promo($promo);
                }

                $this->setItemPromoList($promoArray);
            } else {
                $this->setItemPromoList(array(new Promo($obj->ItemPromoList)));
            }
        }

        if (isset($obj->ItemSaleSourceTransactionID))
            $this->setItemSaleSourceTransactionId((bool) $obj->ItemSaleSourceTransactionID);
    }

    public function __construct($obj = null) {
        parent::__construct($obj);

        if ($obj != null)
            $this->load($obj);
    }

}