<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KMJ\ChannelAdvisorBundle\Wrapper\Response\Inventory;

/**
 * Description of InventoryItemResponse
 *
 * @author kaelinjacobson
 */
class ItemResponse extends \KMJ\ChannelAdvisorBundle\Wrapper\Object\Inventory\ItemSubmit {

    public function __construct($obj) {
        parent::__construct();
        $this->setQuantityInfo(new \KMJ\ChannelAdvisorBundle\Wrapper\Object\Inventory\QuantityInfo());
        $this->load($obj);
    }

    public function load($obj) {
        parent::load($obj);

        if (isset($obj->Quantity))
            $this->getQuantityInfo()->load($obj->Quantity);
    }
    
    public function getListed() {
        return $this->getQuantityInfo()->getOpenAllocated() > 0;
    }

}

?>
