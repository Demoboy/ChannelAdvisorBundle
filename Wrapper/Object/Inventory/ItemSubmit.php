<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Object\Inventory;

use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
use KMJ\ChannelAdvisorBundle\Interfaces\ResponseInterface;
use InvalidArgumentException;

/**
 * Description of InventoryItemSubmit
 *
 * @author kaelinjacobson
 */
class ItemSubmit implements RequestInterface, ResponseInterface {

    //put your code here
    protected $sku;
    protected $title;
    protected $subtitle;
    protected $shortDescription;
    protected $description;
    protected $weight;
    protected $supplierCode;
    protected $warehouseLocation;
    protected $taxProductCode;
    protected $partNumber;
    protected $flagStyle;
    protected $flagDescription;
    protected $blocked;
    protected $blockComment;
    protected $ASIN;
    protected $ISBN;
    protected $UPC;
    protected $MPN;
    protected $EAN;
    protected $manufacturer;
    protected $brand;
    protected $condition;
    protected $warranty;
    protected $productMargin;
    protected $supplierPO;
    protected $receivedInInventory;
    protected $harmonizedCode;
    protected $height;
    protected $length;
    protected $width;
    protected $classification;
    protected $priceInfo;
    protected $distributionCenterList;
    protected $attributeList;
    protected $variationInfo;
    protected $storeInfo;
    protected $imageList;
    protected $shippingInfo;
    protected $labelList;
    protected $metaDescription;

    public function getSku() {
        return $this->sku;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getSubtitle() {
        return $this->subtitle;
    }

    public function getShortDescription() {
        return $this->shortDescription;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function getSupplierCode() {
        return $this->supplierCode;
    }

    public function getWarehouseLocation() {
        return $this->warehouseLocation;
    }

    public function getTaxProductCode() {
        return $this->taxProductCode;
    }

    public function getFlagStyle() {
        return $this->flagStyle;
    }

    public function getFlagDescription() {
        return $this->flagDescription;
    }

    public function getBlocked() {
        return $this->blocked;
    }

    public function getBlockComment() {
        return $this->blockComment;
    }

    public function getASIN() {
        return $this->ASIN;
    }

    public function getISBN() {
        return $this->ISBN;
    }

    public function getUPC() {
        return $this->UPC;
    }

    public function getMPN() {
        return $this->MPN;
    }

    public function getEAN() {
        return $this->EAN;
    }

    public function getManufacturer() {
        return $this->manufacturer;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getCondition() {
        return $this->condition;
    }

    public function getWarranty() {
        return $this->warranty;
    }

    public function getProductMargin() {
        return $this->productMargin;
    }

    public function getSupplierPO() {
        return $this->supplierPO;
    }

    public function getReceivedInInventory() {
        return $this->receivedInInventory;
    }

    public function getHarmonizedCode() {
        return $this->harmonizedCode;
    }

    public function getHeight() {
        return $this->height;
    }

    public function getLength() {
        return $this->length;
    }

    public function getWidth() {
        return $this->width;
    }

    public function getClassification() {
        return $this->classification;
    }

    public function getQuantityInfo() {
        return $this->quantityInfo;
    }

    public function getPriceInfo() {
        return $this->priceInfo;
    }

    public function getAttributeList() {
        return $this->attributeList;
    }

    public function getVariationInfo() {
        return $this->variationInfo;
    }

    public function getStoreInfo() {
        return $this->storeInfo;
    }

    public function getImageList() {
        return $this->imageList;
    }

    public function getShippingInfo() {
        return $this->shippingInfo;
    }

    public function getLabelList() {
        return $this->labelList;
    }

    public function getMetaDescription() {
        return $this->metaDescription;
    }

    public function setSku($sku) {
        $this->sku = $sku;
        return $this;
    }

    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    public function setSubtitle($subtitle) {
        $this->subtitle = $subtitle;
        return $this;
    }

    public function setShortDescription($shortDescription) {
        $this->shortDescription = $shortDescription;
        return $this;
    }

    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
        return $this;
    }

    public function setSupplierCode($supplierCode) {
        $this->supplierCode = $supplierCode;
        return $this;
    }

    public function setWarehouseLocation($warehouseLocation) {
        $this->warehouseLocation = $warehouseLocation;
        return $this;
    }

    public function setTaxProductCode($taxProductCode) {
        $this->taxProductCode = $taxProductCode;
        return $this;
    }

    public function setFlagStyle($flagStyle) {
        if (!in_array($flagStyle, $this->getPossibleFlagStyles())) {
            throw new InvalidArgumentException("Flag style is not allowed");
        }

        $this->flagStyle = $flagStyle;
        return $this;
    }

    public function setFlagDescription($flagDescription) {
        $this->flagDescription = $flagDescription;
        return $this;
    }

    public function setBlocked($blocked) {
        $this->blocked = $blocked;
        return $this;
    }

    public function setBlockComment($blockComment) {
        $this->blockComment = $blockComment;
        return $this;
    }

    public function setASIN($ASIN) {
        $this->ASIN = $ASIN;
        return $this;
    }

    public function setISBN($ISBN) {
        $this->ISBN = $ISBN;
        return $this;
    }

    public function setUPC($UPC) {
        $this->UPC = $UPC;
        return $this;
    }

    public function setMPN($MPN) {
        $this->MPN = $MPN;
        return $this;
    }

    public function setEAN($EAN) {
        $this->EAN = $EAN;
        return $this;
    }

    public function setManufacturer($manufacturer) {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    public function setBrand($brand) {
        $this->brand = $brand;
        return $this;
    }

    public function setCondition($condition) {
        $this->condition = $condition;
        return $this;
    }

    public function setWarranty($warranty) {
        $this->warranty = $warranty;
        return $this;
    }

    public function setProductMargin($productMargin) {
        $this->productMargin = $productMargin;
        return $this;
    }

    public function setSupplierPO($supplierPO) {
        $this->supplierPO = $supplierPO;
        return $this;
    }

    public function setReceivedInInventory(\DateTime $receivedInInventory) {
        $this->receivedInInventory = $receivedInInventory;
        return $this;
    }

    public function setHarmonizedCode($harmonizedCode) {
        $this->harmonizedCode = $harmonizedCode;
        return $this;
    }

    public function setHeight($height) {
        $this->height = $height;
        return $this;
    }

    public function setLength($length) {
        $this->length = $length;
        return $this;
    }

    public function setWidth($width) {
        $this->width = $width;
        return $this;
    }

    public function setClassification($classification) {
        $this->classification = $classification;
        return $this;
    }

    public function setQuantityInfo($quantityInfo) {
        $this->quantityInfo = $quantityInfo;
        return $this;
    }

    public function setPriceInfo(PriceInfo $priceInfo) {
        $this->priceInfo = $priceInfo;
        return $this;
    }

    public function setAttributeList($attributeList) {
        $this->attributeList = $attributeList;
        return $this;
    }

    public function setVariationInfo(VariationInfo $variationInfo) {
        $this->variationInfo = $variationInfo;
        return $this;
    }

    public function setStoreInfo(StoreInfo $storeInfo) {
        $this->storeInfo = $storeInfo;
        return $this;
    }

    public function setImageList($imageList) {
        $this->imageList = $imageList;
        return $this;
    }

    public function setShippingInfo(ShippingInfo $shippingInfo) {
        $this->shippingInfo = $shippingInfo;
        return $this;
    }

    public function setLabelList($labelList) {
        $this->labelList = $labelList;
        return $this;
    }

    public function setMetaDescription($metaDescription) {
        $this->metaDescription = $metaDescription;
        return $this;
    }

    public function getBlankAttriute() {
        return new AttributeInfo();
    }

    public function getBlankImage() {
        return new ImageInfoSubmit();
    }

    public function getPossibleFlagStyles() {
        return array(
            'NoFlag',
            'ExclamationPoint',
            'QuestionMark',
            'NotAvailable',
            'Price',
            'BlueFlag',
            'GreenFlag',
            'RedFlag',
            'YellowFlag',
            'ItemCopied',
        );
    }

    public function __construct() {
        $this->setPriceInfo(new PriceInfo());
        $this->setAttributeList(array());
        $this->setVariationInfo(new VariationInfo());
        $this->setStoreInfo(new StoreInfo());
        $this->setImageList(array());
        $this->setShippingInfo(new ShippingInfo());
        $this->setReceivedInInventory(new \DateTime("NOW"));
    }
    
    public function getDistributionCenterList() {
        return $this->distributionCenterList;
    }

    public function setDistributionCenterList($distributionCenterList) {
        $this->distributionCenterList = $distributionCenterList;
        return $this;
    }

    
    public function toArray() {
        $attrList = array();

        foreach ($this->getAttributeList() as $attr) {
            $attrList[] = $attr->toArray();
        }

        $imageList = array();

        foreach ($this->getImageList() as $image) {
            $imageList = $image->toArray();
        }
        $dList = array();
        
        foreach ($this->getDistributionCenterList() as $d) {
            $dList[] = $d->toArray();
        }

        return array(
            'Sku' => $this->getSku(),
            'Title' => $this->getTitle(),
            'Subtitle' => $this->getSubtitle(),
            'ShortDescription' => $this->getShortDescription(),
            'Description' => $this->getDescription(),
            'Weight' => $this->getWeight(),
            'SupplierCode' => $this->getSupplierCode(),
            'WarehouseLocation' => $this->getWarehouseLocation(),
            'TaxProductCode' => $this->getTaxProductCode(),
            'FlagStyle' => $this->getFlagStyle(),
            'FlagDescription' => $this->getFlagDescription(),
            'IsBlocked' => $this->getBlocked(),
            'BlockComment' => $this->getBlockComment(),
            'ASIN' => $this->getASIN(),
            'ISBN' => $this->getISBN(),
            'UPC' => $this->getUPC(),
            'MPN' => $this->getMPN(),
            'EAN' => $this->getEAN(),
            'Manufacturer' => $this->getManufacturer(),
            'Brand' => $this->getBrand(),
            'Condition' => $this->getCondition(),
            'Warranty' => $this->getWarranty(),
            'ProductMargin' => $this->getProductMargin(),
            'SupplierPO' => $this->getSupplierPO(),
            'ReceivedInInventory' => $this->getReceivedInInventory(),
            'HarmonizedCode' => $this->getHarmonizedCode(),
            'Height' => $this->getHeight(),
            'Length' => $this->getLength(),
            'Width' => $this->getWidth(),
            'Classification' => $this->getClassification(),
            'PriceInfo' => $this->getPriceInfo()->toArray(),
            'DistributionCenterList' => $dList,
            'AttributeList' => $attrList,
            //'VariationInfo' => $this->getVariationInfo()->toArray(),
            'StoreInfo' => $this->getStoreInfo()->toArray(),
            'ImageList' => $imageList,
            'ShippingInfo' => $this->getShippingInfo()->toArray(),
            'LabelList' => $this->getLabelList(),
            'MetaDescription' => $this->getMetaDescription(),
        );
    }

    public function load($obj) {
        if (isset($obj->Sku))
            $this->setSku($obj->Sku);

        if (isset($obj->Title))
            $this->setTitle($obj->Title);

        if (isset($obj->Subtitle))
            $this->setSubtitle($obj->Subtitle);

        if (isset($obj->ShortDescription))
            $this->setShortDescription($obj->ShortDescription);

        if (isset($obj->Description))
            $this->setDescription($obj->Description);

        if (isset($obj->Weight))
            $this->setWeight($obj->Weight);

        if (isset($obj->WarehouseLocation))
            $this->setWarehouseLocation($obj->WarehouseLocation);

        if (isset($obj->TaxProductCode))
            $this->setTaxProductCode($obj->TaxProductCode);

        if (isset($obj->FlagStyle))
            $this->setFlagStyle($obj->FlagStyle);

        if (isset($obj->FlagDescription))
            $this->setFlagDescription($obj->FlagDescription);

        if (isset($obj->IsBlocked))
            $this->setBlocked((bool) $obj->IsBlocked);

        if (isset($obj->MPN))
            $this->setMPN($obj->MPN);

        if (isset($obj->Manufacturer))
            $this->setManufacturer($obj->Manufacturer);

        if (isset($obj->Brand))
            $this->setBrand($obj->Brand);

        if (isset($obj->Condition))
            $this->setCondition($obj->Condition);

        if (isset($obj->ProductMargin))
            $this->setProductMargin($obj->ProductMargin);

        if (isset($obj->ReceivedInInventory))
            $this->setReceivedInInventory(new \DateTime($obj->ReceivedInInventory));

        if (isset($obj->Height))
            $this->setHeight($obj->Height);

        if (isset($obj->Length))
            $this->setLength($obj->Length);

        if (isset($obj->Width))
            $this->setWidth($obj->Width);

        if (isset($obj->Classification))
            $this->setClassification($obj->Classification);

        if (isset($obj->PriceInfo))
            $this->getPriceInfo()->load($obj->PriceInfo);
        
        if (isset($obj->DistributionCenterList)) {            
            if (is_array($obj->DistributionCenterList)) {
                $centers = array();
                
                foreach ($obj->DistributionCenterList as $d) {
                    $centers[] = new DistributionCenterInfoResponse($d);
                }
                
                $this->setDistributionCenterList($centers);
            } else {
                $this->setDistributionCenterList(array(new DistributionCenterInfoResponse($obj->DistributionCenterList->DistributionCenterInfoResponse)));
            }
        }

        if (isset($obj->MetaDescription))
            $this->setMetaDescription($obj->MetaDescription);
    }
    
    public function addImage($image) {
        $this->imageList[] = $image;
    }
    
    public function getPartNumber() {
        return $this->partNumber;
    }

    public function setPartNumber($partNumber) {
        $this->partNumber = $partNumber;
        return $this;
    }
}