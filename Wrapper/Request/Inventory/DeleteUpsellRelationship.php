<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Request\Inventory;

use KMJ\ChannelAdvisorBundle\Interfaces\AccountInterface;
use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
use KMJ\ChannelAdvisorBundle\Wrapper\Request\BaseRequest;

/**
 * Deletes upsell relationships between a single parent item and a list of child items.
 *
 * @author kaelinjacobson
 */
class DeleteUpsellRelationship extends BaseRequest implements RequestInterface, AccountInterface {

    protected $accountId;
    protected $parentSku;
    protected $childSKUList;

    public function getAccountId() {
        return $this->accountId;
    }

    public function getParentSku() {
        return $this->parentSku;
    }

    public function getChildSKUList() {
        return $this->childSKUList;
    }

    public function setAccountId($accountId) {
        $this->accountId = $accountId;
        return $this;
    }

    public function setParentSku($parentSku) {
        $this->parentSku = $parentSku;
        return $this;
    }

    public function setChildSKUList(array $childSKUList) {
        $this->childSKUList = $childSKUList;
        return $this;
    }

    public function __construct() {
        $this->setChildSKUList(array());
    }

    public function preformRequest() {
        $response = parent::createClient()->DeleteUpsellRelationship($this->toArray());
    }

    public function toArray() {
        return array(
            'accountID' => $this->getAccountId(),
            'parentSKU' => $this->getParentSku(),
            'childSKUList' => $this->getChildSKUList(),
        );
    }

}

?>
