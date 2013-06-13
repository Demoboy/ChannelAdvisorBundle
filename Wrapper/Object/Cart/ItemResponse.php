<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KMJ\ChannelAdvisorBundle\Wrapper\Object\Cart;

use KMJ\ChannelAdvisorBundle\Wrapper\Object\Weight;

/**
 * Description of ItemResponse
 *
 * @author kaelinjacobson
 */
class ItemResponse extends Item {
    protected $currencyCode;
    protected $weight;
    
    public function getCurrencyCode() {
        return $this->currencyCode;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function setCurrencyCode($currencyCode) {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    public function setWeight(Weight $weight) {
        $this->weight = $weight;
        return $this;
    }

    public function __construct($obj) {
        $this->load($obj);
    }
        
    public function load($obj) {
        parent::load($obj);
        
        if (isset($obj->CurrencyCode))
            $this->setCurrencyCode ($obj->CurrencyCode);
        
        if (isset($obj->UnitWeight)) {
            $weight = new Weight();
            $weight->load($obj->UnitWeight);
            $this->setWeight($weight);
        }
    }

    //put your code here
    /**
                                    
                                    [LineItemID] => 4351631
                                    [Quantity] => 1
                                    [ItemSaleSource] => DIRECT_SALE
                                    [UnitPrice] => 19.9900
                                    [CurrencyCode] => USD
                                    [UnitWeight] => stdClass Object
                                        (
                                            [_] => 26
                                            [UnitOfMeasure] => LB
                                        )
     */
}

?>
