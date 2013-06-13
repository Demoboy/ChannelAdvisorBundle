<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Object\Inventory;

use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
use DateTime;
use InvalidArgumentException;

/**
 * Description of InventoryItemCriteria
 *
 * @author kaelinjacobson
 */
class ItemCriteria implements RequestInterface {

    //put your code here
    protected $dateRangeField;
    protected $dateRangeStartGMT;
    protected $dateRangeEndGMT;
    protected $partialSku;
    protected $skuStartsWith;
    protected $skuEndsWith;
    protected $classificationName;
    protected $labelName;
    protected $quantityCheckField;
    protected $quantityCheckType;
    protected $quantityCheckValue;
    protected $pageNumber;
    protected $pageSize;

    public function getDateRangeField() {
        return $this->dateRangeField;
    }

    public function getDateRangeStartGMT() {
        return $this->dateRangeStartGMT;
    }

    public function getDateRangeEndGMT() {
        return $this->dateRangeEndGMT;
    }

    public function getPartialSku() {
        return $this->partialSku;
    }

    public function getSkuStartsWith() {
        return $this->skuStartsWith;
    }

    public function getSkuEndsWith() {
        return $this->skuEndsWith;
    }

    public function getClassificationName() {
        return $this->classificationName;
    }

    public function getLabelName() {
        return $this->labelName;
    }

    public function getQuantityCheckField() {
        return $this->quantityCheckField;
    }

    public function getQuantityCheckType() {
        return $this->quantityCheckType;
    }

    public function getQuantityCheckValue() {
        return $this->quantityCheckValue;
    }

    public function getPageNumber() {
        return $this->pageNumber;
    }

    public function getPageSize() {
        return $this->pageSize;
    }

    public function setDateRangeField($dateRangeField) {
        if (!in_array($dateRangeField, $this->getPossibleDateRangeFields())) {
            throw new InvalidArgumentException("Date range field is invalid");
        }

        $this->dateRangeField = $dateRangeField;
        return $this;
    }

    public function setDateRangeStartGMT(DateTime $dateRangeStartGMT) {
        $this->dateRangeStartGMT = $dateRangeStartGMT;
        return $this;
    }

    public function setDateRangeEndGMT(DateTime $dateRangeEndGMT) {
        $this->dateRangeEndGMT = $dateRangeEndGMT;
        return $this;
    }

    public function setPartialSku($partialSku) {
        $this->partialSku = $partialSku;
        return $this;
    }

    public function setSkuStartsWith($skuStartsWith) {
        $this->skuStartsWith = $skuStartsWith;
        return $this;
    }

    public function setSkuEndsWith($skuEndsWith) {
        $this->skuEndsWith = $skuEndsWith;
        return $this;
    }

    public function setClassificationName($classificationName) {
        $this->classificationName = $classificationName;
        return $this;
    }

    public function setLabelName($labelName) {
        $this->labelName = $labelName;
        return $this;
    }

    public function setQuantityCheckField($quantityCheckField) {
        $this->quantityCheckField = $quantityCheckField;
        return $this;
    }

    public function setQuantityCheckType($quantityCheckType) {
        $this->quantityCheckType = $quantityCheckType;
        return $this;
    }

    public function setQuantityCheckValue($quantityCheckValue) {
        $this->quantityCheckValue = $quantityCheckValue;
        return $this;
    }

    public function setPageNumber($pageNumber) {
        $this->pageNumber = $pageNumber;
        return $this;
    }

    public function setPageSize($pageSize) {
        $this->pageSize = $pageSize;
        return $this;
    }

    public function getPossibleDateRangeFields() {
        return array(
            'CreateDate',
            'LastUpdateDate',
            'QtyLastModifiedDate',
        );
    }

    public function __construct() {
        $this->setPageNumber(1)
                ->setPageSize(100);
    }

    public function toArray() {
        return array(
            'DateRangeField' => $this->getDateRangeField(),
            'DateRangeStartGMT' => $this->getDateRangeStartGMT()->format('c'),
            'DateRangeEndGMT' => $this->getDateRangeEndGMT()->format('c'),
            'PartialSku' => $this->getPartialSku(),
            'SkuStartsWith' => $this->getSkuStartsWith(),
            'SkuEndsWith' => $this->getSkuEndsWith(),
            'ClassificationName' => $this->getClassificationName(),
            'LabelName' => $this->getLabelName(),
            'QuantityCheckField' => $this->getQuantityCheckField(),
            'QuantityCheckType' => $this->getQuantityCheckType(),
            'QuantityCheckValue' => $this->getQuantityCheckValue(),
            'PageNumber' => $this->getPageNumber(),
            'PageSize' => $this->getPageSize(),
        );
    }

}

?>