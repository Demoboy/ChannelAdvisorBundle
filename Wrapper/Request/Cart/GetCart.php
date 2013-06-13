<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KMJ\ChannelAdvisorBundle\Wrapper\Request\Cart;

/**
 * Description of GetCart
 *
 * @author kaelinjacobson
 */
class GetCart extends \KMJ\ChannelAdvisorBundle\Wrapper\Request\BaseRequest implements \KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface {
    //put your code here
    use \KMJ\ChannelAdvisorBundle\Traits\Account;
    protected $cartId;
    
    public function getCartId() {
        return $this->cartId;
    }

    public function setCartId($cartId) {
        $this->cartId = $cartId;
        return $this;
    }

    public function preformRequest() {
        $result = parent::createClient()->CreateCart($this->toArray());
    }

    public function toArray() {
        return array(
            'accountID' => $this->getAccountId(),
            'cartID' => $this->getCartId(),
        );
    }


    
}

?>
