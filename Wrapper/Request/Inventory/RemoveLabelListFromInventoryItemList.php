<?php

use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
use KMJ\ChannelAdvisorBundle\Wrapper\Request\BaseRequest;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KMJ\ChannelAdvisorBundle\Wrapper\Request\Inventory;

/**
 * Description of RemoveLabelListFromInventoryItemList
 *
 * @author kaelinjacobson
 */
class RemoveLabelListFromInventoryItemList extends BaseRequest implements RequestInterface {
    //put your code here
    use \KMJ\ChannelAdvisorBundle\Traits\Account;
    protected $labelList;
    protected $skuList;
    protected $removeReason;
    
    public function getLabelList() {
        return $this->labelList;
    }

    public function getSkuList() {
        return $this->skuList;
    }

    public function getRemoveReason() {
        return $this->removeReason;
    }

    public function setLabelList(array $labelList) {
        $this->labelList = $labelList;
        return $this;
    }

    public function setSkuList(array $skuList) {
        $this->skuList = $skuList;
        return $this;
    }

    public function setRemoveReason($removeReason) {
        $this->removeReason = $removeReason;
        return $this;
    }

    public function preformRequest() {
        $response = parent::createClient()->RemoveLabelListFromInventoryItemList($this->toArray());
    }

    public function toArray() {
       return array(
           'accountID' => $this->getAccountId(),
           'labelList' => $this->getLabelList(),
           'skuList' => $this->getSkuList(),
           'removeReasonDesc' => $this->getRemoveReason(),
       );
    }

}

?>
