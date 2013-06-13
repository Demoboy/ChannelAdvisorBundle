<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KMJ\ChannelAdvisorBundle\Wrapper\Object\Cart;

/**
 * Description of ItemRequest
 *
 * @author kaelinjacobson
 */
class ItemRequest extends Item {
    protected $allowNegativeQuantity;
    
    public function getAllowNegativeQuantity() {
        return $this->allowNegativeQuantity;
    }

    public function setAllowNegativeQuantity($allowNegativeQuantity) {
        $this->allowNegativeQuantity = $allowNegativeQuantity;
        return $this;
    }

    public function __construct() {
        parent::__construct();
        $this->setAllowNegativeQuantity(true);
    }
    
    public function toArray() {        
        return array_merge(parent::toArray(), array(
            'AllowNegativeQuantity' => $this->getAllowNegativeQuantity(),
        ));
    }
}

?>
