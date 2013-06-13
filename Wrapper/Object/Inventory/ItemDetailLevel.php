<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Object\Inventory;

use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;

/**
 * 
 * Description of ItemDetailLevel
 *
 * @author kaelinjacobson
 */
class ItemDetailLevel implements RequestInterface {

    //put your code here
    protected $includeQuantityInfo;
    protected $includePriceInfo;
    protected $includeClassificationInfo;
    
    public function getIncludeQuantityInfo() {
        return $this->includeQuantityInfo;
    }

    public function getIncludePriceInfo() {
        return $this->includePriceInfo;
    }

    public function getIncludeClassificationInfo() {
        return $this->includeClassificationInfo;
    }

    public function setIncludeQuantityInfo($includeQuantityInfo) {
        $this->includeQuantityInfo = $includeQuantityInfo;
        return $this;
    }

    public function setIncludePriceInfo($includePriceInfo) {
        $this->includePriceInfo = $includePriceInfo;
        return $this;
    }

    public function setIncludeClassificationInfo($includeClassificationInfo) {
        $this->includeClassificationInfo = $includeClassificationInfo;
        return $this;
    }

    public function __construct() {
        $this->setIncludeClassificationInfo(false)
                ->setIncludePriceInfo(false)
                ->setIncludeQuantityInfo(false);
    }

    public function toArray() {
        return array(
            'IncludeQuantityInfo' => $this->getIncludeQuantityInfo(),
            'IncludePriceInfo' => $this->getIncludePriceInfo(),
            'IncludeClassificationInfo' => $this->getIncludeClassificationInfo(),
        );
    }

}

?>
