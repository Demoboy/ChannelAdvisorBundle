<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KMJ\ChannelAdvisorBundle\Wrapper\Object\Order;

use KMJ\ChannelAdvisorBundle\Interfaces\ResponseInterface;

/**
 * Description of CustomValue
 *
 * @author kaelinjacobson
 */
class CustomValue implements ResponseInterface {

    use \KMJ\ChannelAdvisorBundle\Traits\SimpleElementTrait;
    //put your code here
    protected $ID;
    protected $value;

    public function getID() {
        return $this->ID;
    }

    public function getValue() {
        return $this->value;
    }

    public function setID($ID) {
        $this->ID = $ID;
        return $this;
    }

    public function setValue($value) {
        $this->value = $value;
        return $this;
    }

}