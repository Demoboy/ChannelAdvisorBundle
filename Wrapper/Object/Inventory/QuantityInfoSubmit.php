<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Object\Inventory;

use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
use InvalidArgumentException;

/**
 * Description of QuantityInfoSubmit
 *
 * @author kaelinjacobson
 */
class QuantityInfoSubmit implements RequestInterface {
    //put your code here
    protected $updateType;
    protected $total;
    
    public function getUpdateType() {
        return $this->updateType;
    }

    public function getTotal() {
        return $this->total;
    }

    public function setUpdateType($updateType) {
        if (!in_array($updateType, $this->getPossibleUpdateTypes())) {
            throw new InvalidArgumentException("Update type is invalid");
        }
        $this->updateType = $updateType;
        return $this;
    }

    public function setTotal($total) {
        $this->total = $total;
        return $this;
    }
    
    public function getPossibleUpdateTypes() {
        return array(
            'Absolute',
            'Relative',
            'Available',
            'InStock',
            'UnShipped',
        );
    }

    public function toArray() {
        return array(
            'UpdateType' => $this->getUpdateType(),
            'Total' => $this->getTotal(),
        );
    }  
    
   

}