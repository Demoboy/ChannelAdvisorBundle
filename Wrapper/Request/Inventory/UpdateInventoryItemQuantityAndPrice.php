<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KMJ\ChannelAdvisorBundle\Wrapper\Request\Inventory;

use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
use KMJ\ChannelAdvisorBundle\Wrapper\Object\Inventory\ItemQuantityAndPrice;
use KMJ\ChannelAdvisorBundle\Wrapper\Request\BaseRequest;

/**
 * Description of UpdateInventoryItemQuantityAndPrice
 *
 * @author kaelinjacobson
 */
class UpdateInventoryItemQuantityAndPrice extends BaseRequest implements RequestInterface {

    use \KMJ\ChannelAdvisorBundle\Traits\Account;

    protected $itemQuantityAndPrice;

    public function getItemQuantityAndPrice() {
        return $this->itemQuantityAndPrice;
    }

    public function setItemQuantityAndPrice(ItemQuantityAndPrice $itemQuantityAndPrice) {
        $this->itemQuantityAndPrice = $itemQuantityAndPrice;
        return $this;
    }

    public function __construct() {
        $this->setItemQuantityAndPrice(new ItemQuantityAndPrice());
    }

    public function preformRequest() {
        $result = parent::createClient()->UpdateInventoryItemQuantityAndPrice($this->toArray());
        $response = new \KMJ\ChannelAdvisorBundle\Wrapper\Response\BaseResponse($result->UpdateInventoryItemQuantityAndPriceResult);

        if ($response->isSuccess()) {
            return (bool) $result->UpdateInventoryItemQuantityAndPriceResult->ResultData;
        } else {
            return false;
        }
    }

    public function toArray() {
        return array(
            'accountID' => $this->getAccountId(),
            'itemQuantityAndPrice' => $this->getItemQuantityAndPrice()->toArray(),
        );
    }

}