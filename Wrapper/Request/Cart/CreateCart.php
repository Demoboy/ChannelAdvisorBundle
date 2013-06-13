<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KMJ\ChannelAdvisorBundle\Wrapper\Request\Cart;

use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
use KMJ\ChannelAdvisorBundle\Wrapper\Object\Cart\ItemRequest;
use KMJ\ChannelAdvisorBundle\Wrapper\Request\BaseRequest;

/**
 * Description of CreateCart
 *
 * @author kaelinjacobson
 */
class CreateCart extends BaseRequest implements RequestInterface {
    //put your code here
    use \KMJ\ChannelAdvisorBundle\Traits\Account;
    protected $buyerEmail;
    protected $items;
    
    public function getBuyerEmail() {
        return $this->buyerEmail;
    }

    public function getItems() {
        return $this->items;
    }

    public function setBuyerEmail($buyerEmail) {
        $this->buyerEmail = $buyerEmail;
        return $this;
    }

    public function setItems($items) {
        $this->items = $items;
        return $this;
    }
    
    public function getBlankItem() {
        return new ItemRequest;
    }

    public function __construct() {
        $this->setItems(array());
    }
    
    public function preformRequest() {
        $result = parent::createClient()->CreateCart($this->toArray());
        $response = new \KMJ\ChannelAdvisorBundle\Wrapper\Response\BaseResponse($result->CreateCartResult);
        
        if ($response->isSuccess()) {
            $cart = new \KMJ\ChannelAdvisorBundle\Wrapper\Response\Cart\Cart($result->CreateCartResult->ResultData);
            $response->setResult($cart);
        }
                
        return $response;
    }

    public function toArray() {
        $lineItems = array();
        
        foreach ($this->getItems() as $key => $item) {
            $item->setId($key);
            $lineItems[] = $item->toArray();
        }
        
        return array(
            "accountID" => $this->getAccountId(),
            'buyerEmail' => $this->getBuyerEmail(),
            "lineItem" => $lineItems
        );
    }

    
}

?>
