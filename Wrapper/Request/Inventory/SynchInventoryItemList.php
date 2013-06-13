<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KMJ\ChannelAdvisorBundle\Wrapper\Request\Inventory;

use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
use KMJ\ChannelAdvisorBundle\Wrapper\Object\Inventory\ItemSubmit;
use KMJ\ChannelAdvisorBundle\Wrapper\Request\BaseRequest;

/**
 * Description of SynchInventoryItem
 *
 * @author kaelinjacobson
 */
class SynchInventoryItemList extends BaseRequest implements RequestInterface {
    //put your code here

use \KMJ\ChannelAdvisorBundle\Traits\Account;

    protected $items;

    public function getItems() {
        return $this->items;
    }

    public function setItems(array $items) {
        $this->items = $items;
        return $this;
    }

    public function getBlankItem() {
        return new ItemSubmit();
    }

    public function preformRequest() {
        $response = parent::createClient()->SynchInventoryItemList($this->toArray());
    }

    public function __construct() {
        $this->setItem(new ItemSubmit());
    }

    public function toArray() {
        $itemList = array();

        foreach ($this->getItems as $item) {
            $itemList[] = $item->toArray();
        }
        
        return array(
            'accountID' => $this->getAccountId(),
            'itemList' => $itemList,
        );
    }

}

?>
