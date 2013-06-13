<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KMJ\ChannelAdvisorBundle\Wrapper\Response\Cart;

/**
 * Description of Cart
 *
 * @author kaelinjacobson
 */
class Cart implements \KMJ\ChannelAdvisorBundle\Interfaces\ResponseInterface {

    //put your code here
    protected $id;
    protected $checkoutURL;
    protected $items;

    public function getCheckoutURL() {
        return $this->checkoutURL;
    }

    public function getItems() {
        return $this->items;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setCheckoutURL($checkoutURL) {
        $this->checkoutURL = $checkoutURL;
        return $this;
    }

    public function setItems($items) {
        $this->items = $items;
        return $this;
    }

    public function __construct($obj) {
        $this->load($obj);
    }

    public function load($obj) {
        if (isset($obj->CartID))
            $this->setId($obj->CartID);

        if (isset($obj->CheckoutURL))
            $this->setCheckoutURL($obj->CheckoutURL);

        if (isset($obj->LineItemList->CartItem)) {
            if (is_array($obj->LineItemList->CartItem)) {
                $items = array();
                foreach ($obj->LineItemList->CartItem as $lineItem) {
                    $items[] = new \KMJ\ChannelAdvisorBundle\Wrapper\Object\Cart\ItemResponse($lineItem);
                }
                $this->setItems($items);
            } else {
                 $item = new \KMJ\ChannelAdvisorBundle\Wrapper\Object\Cart\ItemResponse($obj->LineItemList->CartItem);
                 $this->setItems(array($item));
            }
        }
    }

}

?>
