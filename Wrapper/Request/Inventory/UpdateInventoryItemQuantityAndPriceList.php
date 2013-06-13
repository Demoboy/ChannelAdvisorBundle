<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KMJ\ChannelAdvisorBundle\Wrapper\Request\Inventory;

use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
use KMJ\ChannelAdvisorBundle\Wrapper\Object\Inventory\ItemQuantityAndPrice;

/**
 * Description of UpdateInventoryItemQuantityAndPriceList
 *
 * @author kaelinjacobson
 */
class UpdateInventoryItemQuantityAndPriceList implements RequestInterface {

    use \KMJ\ChannelAdvisorBundle\Traits\Account;

    protected $itemQuantityAndPrices;

    public function getItemQuantityAndPrices() {
        return $this->itemQuantityAndPrices;
    }

    public function setItemQuantityAndPrices(array $itemQuantityAndPrices) {
        $this->itemQuantityAndPrices = $itemQuantityAndPrices;
        return $this;
    }
    
    public function getBlankItem() {
        return new ItemQuantityAndPrice();
    }

    public function preformRequest() {
        $response = parent::createClient()->UpdateInventoryItemQuantityAndPriceList($this->toArray());
    }

    public function toArray() {
        $itemsList = array();
        foreach ($this->itemQuantityAndPrices as $items) {
            $itemsList[] = $items->toArray();
        }
        return array(
            'accountID' => $this->getAccountId(),
            'itemQuantityAndPrice' => $itemsList,
        );
    }

}

?>
