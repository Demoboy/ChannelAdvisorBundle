<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KMJ\ChannelAdvisorBundle\Wrapper\Object\Order;

use KMJ\ChannelAdvisorBundle\Interfaces\ResponseInterface;

/**
 * Description of Invoice
 *
 * @author kaelinjacobson
 */
class Invoice implements ResponseInterface {
    //put your code here
    use \KMJ\ChannelAdvisorBundle\Traits\SimpleElementTrait;
    
    protected $lineItemType;
    protected $unitPrice;
    public function getLineItemType() {
        return $this->lineItemType;
    }

    public function getUnitPrice() {
        return $this->unitPrice;
    }

    public function setLineItemType($lineItemType) {
        $this->lineItemType = $lineItemType;
        return $this;
    }

    public function setUnitPrice($unitPrice) {
        $this->unitPrice = $unitPrice;
        return $this;
    }


}