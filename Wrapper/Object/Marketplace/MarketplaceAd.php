<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Object\Marketplace;

/**
 * Description of MarketplaceAd
 *
 * @author kaelinjacobson
 */
class MarketplaceAd implements \KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface {

    protected $ID;
    protected $sku;
    protected $title;
    protected $postingTemplate;
    protected $adTemplate;
    protected $schedule;
    protected $flagStyle;
    protected $flagDescription;
    protected $primaryCategory;
    protected $secondaryCategory;
    protected $primaryStoreCategory;
    protected $secondaryStoreCategory;
    
    public function getID() {
        return $this->ID;
    }

    public function getSku() {
        return $this->sku;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getPostingTemplate() {
        return $this->postingTemplate;
    }

    public function getAdTemplate() {
        return $this->adTemplate;
    }

    public function getSchedule() {
        return $this->schedule;
    }

    public function getFlagStyle() {
        return $this->flagStyle;
    }

    public function getFlagDescription() {
        return $this->flagDescription;
    }

    public function getPrimaryCategory() {
        return $this->primaryCategory;
    }

    public function getSecondaryCategory() {
        return $this->secondaryCategory;
    }

    public function getPrimaryStoreCategory() {
        return $this->primaryStoreCategory;
    }

    public function getSecondaryStoreCategory() {
        return $this->secondaryStoreCategory;
    }

    public function setID($ID) {
        $this->ID = $ID;
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

    public function setPostingTemplate($postingTemplate) {
        $this->postingTemplate = $postingTemplate;
        return $this;
    }

    public function setAdTemplate($adTemplate) {
        $this->adTemplate = $adTemplate;
        return $this;
    }

    public function setSchedule($schedule) {
        $this->schedule = $schedule;
        return $this;
    }

    public function setFlagStyle($flagStyle) {
        $this->flagStyle = $flagStyle;
        return $this;
    }

    public function setFlagDescription($flagDescription) {
        $this->flagDescription = $flagDescription;
        return $this;
    }

    public function setPrimaryCategory($primaryCategory) {
        $this->primaryCategory = $primaryCategory;
        return $this;
    }

    public function setSecondaryCategory($secondaryCategory) {
        $this->secondaryCategory = $secondaryCategory;
        return $this;
    }

    public function setPrimaryStoreCategory($primaryStoreCategory) {
        $this->primaryStoreCategory = $primaryStoreCategory;
        return $this;
    }

    public function setSecondaryStoreCategory($secondaryStoreCategory) {
        $this->secondaryStoreCategory = $secondaryStoreCategory;
        return $this;
    }

    public function toArray() {
        return array(
            'ID' => $this->getID(),
            'Sku' => $this->getSku(),
            'Title' => $this->getTitle(),
            'PostingTemplate' => $this->getPostingTemplate(),
            'AdTemplate' => $this->getAdTemplate(),
            'Schedule' => $this->getSchedule(),
            'FlagStyle' => $this->getFlagStyle(),
            'FlagDescription' => $this->getFlagDescription(),
            'PrimaryCategory' => $this->getPrimaryCategory(),
            'SecondaryCategory' => $this->getSecondaryCategory(),
            'PrimaryStoreCategory' => $this->getPrimaryStoreCategory(),
            'SecondaryStoreCategory' => $this->getSecondaryStoreCategory(),
        );
    }

    
    
}