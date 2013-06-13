<?php

use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
namespace KMJ\ChannelAdvisorBundle\Wrapper\Object\Inventory;


/**
 * Description of InventoryUpsellChildInfo
 *
 * @author kaelinjacobson
 */
class UpsellChildInfo implements RequestInterface {
    protected $sku;
    protected $quantity;
    protected $salePrice;
    
    public function getSku() {
        return $this->sku;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getSalePrice() {
        return $this->salePrice;
    }

    public function setSku($sku) {
        $this->sku = $sku;
        return $this;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
        return $this;
    }

    public function setSalePrice($salePrice) {
        $this->salePrice = $salePrice;
        return $this;
    }

    public function toArray() {
        return array(
            'SKU' => $this->getSku(),
            'Quantity' => $this->getQuantity(),
            'SalePrice' => $this->getSalePrice(),
        );
    }

}

?>
