<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Request\Inventory;

use KMJ\ChannelAdvisorBundle\Interfaces\AccountInterface;
use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
use KMJ\ChannelAdvisorBundle\Wrapper\Request\BaseRequest;

/**
 * Description of DeleteInventoryItem
 *
 * @author kaelinjacobson
 */
class DeleteInventoryItem extends BaseRequest implements RequestInterface, AccountInterface {
    protected $accountId;
    protected $sku;
    
    public function getAccountId() {
        return $this->accountId;
    }

    public function getSku() {
        return $this->sku;
    }

    public function setAccountId($accountId) {
        $this->accountId = $accountId;
        return $this;
    }

    public function setSku($sku) {
        $this->sku = $sku;
        return $this;
    }

    public function preformRequest() {
        $response = parent::createClient()->DeleteInventoryItem($this->toArray());
    }

    public function toArray() {
        return array(
            'accountID' => $this->getAccountId(),
            'sku' => $this->getSku(),
        );
    }

    
}

?>
