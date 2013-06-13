<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace KMJ\ChannelAdvisorBundle\Wrapper\Object;
/**
 * Description of Weight
 *
 * @author kaelinjacobson
 */
class Weight implements \KMJ\ChannelAdvisorBundle\Interfaces\ResponseInterface {
    //put your code here
    protected $value;
    protected $units;
    
    public function getValue() {
        return $this->value;
    }

    public function getUnits() {
        return $this->units;
    }

    public function setValue($value) {
        $this->value = $value;
        return $this;
    }

    public function setUnits($units) {
        $this->units = $units;
        return $this;
    }

    public function load($obj) {
        if (isset($obj->_))
            $this->setValue ($obj->_);
        
        if (isset($obj->UnitOfMeasure))
            $this->setUnits ($obj->UnitOfMeasure);
    }

}

?>
