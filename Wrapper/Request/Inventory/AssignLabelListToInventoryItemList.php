<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Request\Inventory;

use KMJ\ChannelAdvisorBundle\Interfaces\AccountInterface;
use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
use KMJ\ChannelAdvisorBundle\Wrapper\Request\BaseRequest;


/**
 * Assigns the list of Labels to the specified list of SKUs. *
 * @author kaelinjacobson
 */
class AssignLabelListToInventoryItemList extends BaseRequest implements RequestInterface, AccountInterface {
    protected $accountId;
    protected $labelList;
    protected $createLabelIfNotExist;
    protected $skuList;
    protected $assignReasonDesc;
    
    public function getAccountId() {
        return $this->accountId;
    }

    public function getLabelList() {
        return $this->labelList;
    }

    public function getCreateLabelIfNotExist() {
        return $this->createLabelIfNotExist;
    }

    public function getSkuList() {
        return $this->skuList;
    }

    public function getAssignReasonDesc() {
        return $this->assignReasonDesc;
    }

    public function setAccountId($accountId) {
        $this->accountId = $accountId;
        return $this;
    }

    public function setLabelList(array $labelList) {
        $this->labelList = $labelList;
        return $this;
    }

    public function setCreateLabelIfNotExist($createLabelIfNotExist) {
        $this->createLabelIfNotExist = $createLabelIfNotExist;
        return $this;
    }

    public function setSkuList(array $skuList) {
        $this->skuList = $skuList;
        return $this;
    }

    public function setAssignReasonDesc($assignReasonDesc) {
        $this->assignReasonDesc = $assignReasonDesc;
        return $this;
    }

    public function preformRequest() {
        $response = parent::createClient()->AssignLabelListToInventoryItemList($this->toArray());
    }

    public function toArray() {
        return array(
            'accountID' => $this->getAccountId(),
            'labelList' => $this->getLabelList(),
            'createLabelIfNotExist' => $this->getCreateLabelIfNotExist(),
            'skuList' => $this->getSkuList(),
            'assignReasonDesc' => $this->getAssignReasonDesc(),
        );
    }

            
}

?>
