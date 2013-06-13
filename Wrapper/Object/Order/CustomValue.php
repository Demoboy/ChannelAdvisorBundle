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

    //put your code here
    protected $id;
    protected $value;

    public function getId() {
        return $this->id;
    }

    public function getValue() {
        return $this->value;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setValue($value) {
        $this->value = $value;
        return $this;
    }

    public function load($obj) {
        if (isset($obj->ID))
            $this->setId($obj->ID);

        if (isset($obj->Value))
            $this->setValue($obj->Value);
    }
    
    public function __construct($obj = null) {
        if ($obj != null)
            $this->load ($obj);
    }
}

?>
