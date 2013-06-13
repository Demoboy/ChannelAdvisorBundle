<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Response\Inventory;

/**
 * Description of DistributionCenterInfoResponse
 *
 * @author kaelinjacobson
 */
class DistributionCenterInfoResponse extends \KMJ\ChannelAdvisorBundle\Wrapper\Object\Inventory\DistributionCenterInfoSubmit implements \KMJ\ChannelAdvisorBundle\Interfaces\ResponseInterface {

    //put your code here
    protected $availableQuantity;
    protected $openAllocatedQuantity;
    protected $openAllocatedPooledQuantity;
      
    public function getAvailableQuantity() {
        return $this->availableQuantity;
    }

    public function getOpenAllocatedQuantity() {
        return $this->openAllocatedQuantity;
    }

    public function getOpenAllocatedPooledQuantity() {
        return $this->openAllocatedPooledQuantity;
    }

    public function setAvailableQuantity($availableQuantity) {
        $this->availableQuantity = $availableQuantity;
        return $this;
    }

    public function setOpenAllocatedQuantity($openAllocatedQuantity) {
        $this->openAllocatedQuantity = $openAllocatedQuantity;
        return $this;
    }

    public function setOpenAllocatedPooledQuantity($openAllocatedPooledQuantity) {
        $this->openAllocatedPooledQuantity = $openAllocatedPooledQuantity;
        return $this;
    }

    public function __construct($obj = null) {
        parent::__construct($obj);
        
        if ($obj != null) 
            $this->load($obj);
    }

    public function load($obj) {
        if (isset($obj->AvailableQuantity))
            $this->setAvailableQuantity($obj->AvailableQuantity);

        if (isset($obj->OpenAllocatedQuantity))
            $this->setOpenAllocatedQuantity($obj->OpenAllocatedQuantity);

        if (isset($obj->OpenAllocatedPooledQuantity))
            $this->setOpenAllocatedPooledQuantity($obj->OpenAllocatedPooledQuantity);

    }

}
