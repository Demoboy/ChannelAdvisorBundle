<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Object\Inventory;

use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;

/**
 * Description of VariationInfo
 *
 * @author kaelinjacobson
 */
class VariationInfo implements RequestInterface, \KMJ\ChannelAdvisorBundle\Interfaces\ResponseInterface {

    //put your code here
    protected $isInRelationship;
    protected $relationshipName;
    protected $isParent;
    protected $parentSku;

    public function getIsInRelationship() {
        return $this->isInRelationship;
    }

    public function getRelationshipName() {
        return $this->relationshipName;
    }

    public function getIsParent() {
        return $this->isParent;
    }

    public function getParentSku() {
        return $this->parentSku;
    }

    public function setIsInRelationship($isInRelationship) {
        $this->isInRelationship = $isInRelationship;
        return $this;
    }

    public function setRelationshipName($relationshipName) {
        $this->relationshipName = $relationshipName;
        return $this;
    }

    public function setIsParent($isParent) {
        $this->isParent = $isParent;
        return $this;
    }

    public function setParentSku($parentSku) {
        $this->parentSku = $parentSku;
        return $this;
    }

    public function __construct($obj = null) {
        $this->setIsInRelationship(false)
                ->setParentSku(false);
        
        if ($obj != null)
            $this->load($obj);
    }

    public function toArray() {
        return array(
            'IsInRelationship' => $this->getIsInRelationship(),
            'RelationshipName' => $this->getRelationshipName(),
            'IsParent' => $this->getIsParent(),
            'ParentSku' => $this->getParentSku(),
        );
    }
    
    public function load($obj) {
        if (isset($obj->IsInRelationship))
            $this->setIsInRelationship((bool) $obj->IsInRelationship);

        if (isset($obj->RelationshipName))
            $this->setRelationshipName($obj->RelationshipName);

        if (isset($obj->IsParent))
            $this->setIsParent((bool) $obj->IsParent);

        if (isset($obj->ParentSku))
            $this->setParentSku($obj->ParentSku);
    }

}