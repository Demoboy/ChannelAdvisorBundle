<?php

use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
use KMJ\ChannelAdvisorBundle\Wrapper\Object\Inventory\UpsellChildInfo;

namespace KMJ\ChannelAdvisorBundle\Wrapper\Object\Inventory;

/**
 * Description of InventoryUpsellInfoSubmit
 *
 * @author kaelinjacobson
 */
class UpsellInfoSubmit implements RequestInterface {
    protected $parentSku;
    protected $childItemList;
    
    public function getParentSku() {
        return $this->parentSku;
    }

    public function getChildItemList() {
        return $this->childItemList;
    }

    public function setParentSku($parentSku) {
        $this->parentSku = $parentSku;
        return $this;
    }

    public function setChildItemList(array $childItemList) {
        $this->childItemList = $childItemList;
        return $this;
    }
    
    public function getBlankChildItemList() {
        return new UpsellChildInfo();
    }

    public function __construct() {
        $this->childItemList = array();
    }

    public function toArray() {
        $childItemArray = array();
        foreach ($this->getChildItemList() as $l) {
            $childItemArray[] = $l->toArray();
        }
        
        return array(
            'ParentSKU' => $this->getParentSku(),
            'ChildItemList' => $childItemArray,
        );
    }
}
?>