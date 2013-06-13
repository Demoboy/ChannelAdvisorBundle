<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KMJ\ChannelAdvisorBundle\Wrapper\Request\Inventory;

use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
use KMJ\ChannelAdvisorBundle\Wrapper\Request\BaseRequest;
use KMJ\ChannelAdvisorBundle\Wrapper\Object\Inventory\ItemSubmit;
/**
 * Description of SynchInventoryItem
 *
 * @author kaelinjacobson
 */
class SynchInventoryItem extends BaseRequest implements RequestInterface {
    //put your code here

    use \KMJ\ChannelAdvisorBundle\Traits\Account;

    protected $item;

    public function getItem() {
        return $this->item;
    }

    public function setItem(ItemSubmit $item) {
        $this->item = $item;
        return $this;
    }

    public function preformRequest() {
        $result = parent::createClient()->SynchInventoryItem($this->toArray());
        $response = new \KMJ\ChannelAdvisorBundle\Wrapper\Response\BaseResponse($result->SynchInventoryItemResult);
        
        if ($response->isSuccess()) {
            return (bool) $result->SynchInventoryItemResult->ResultData;
        } else {
            return false;
        }
    }
    
    public function __construct() {
        $this->setItem(new ItemSubmit());
    }

    public function toArray() {
        return array(
            'accountID' => $this->getAccountId(),
            'item' => $this->getItem()->toArray(),
        );
    }

}