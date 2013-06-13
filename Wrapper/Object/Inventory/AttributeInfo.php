<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KMJ\ChannelAdvisorBundle\Wrapper\Object\Inventory;

use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
use KMJ\ChannelAdvisorBundle\Interfaces\ResponseInterface;

/**
 * Description of AttributeInfo
 *
 * @author kaelinjacobson
 */
class AttributeInfo implements RequestInterface, ResponseInterface {

    protected $name;
    protected $value;

    public function getName() {
        return $this->name;
    }

    public function getValue() {
        return $this->value;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setValue($value) {
        $this->value = $value;
        return $this;
    }

    public function toArray() {
        return array(
            'Name' => $this->getName(),
            'Value' => $this->getValue(),
        );
    }

    public function __construct($obj = null) {
        if ($obj != null)
            $this->load($obj);
    }

    public function load($obj) {
        if (isset($obj->Name))
            $this->setName($obj->Name);

        if (isset($obj->Value))
            $this->setValue($obj->Value);
    }

}

?>
