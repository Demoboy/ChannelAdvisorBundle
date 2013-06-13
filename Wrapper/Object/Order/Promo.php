<?php
namespace KMJ\ChannelAdvisorBundle\Wrapper\Object\Order;

use KMJ\ChannelAdvisorBundle\Interfaces\ResponseInterface;
use KMJ\ChannelAdvisorBundle\Wrapper\Object\Order\LineItemBase;

/**
 * Description of Promo
 *
 * @author kaelinjacobson
 */
class Promo extends LineItemBase implements ResponseInterface {
    //put your code here
    protected $promoCode;
    protected $unitPrice;
    protected $shippingPrice;
    
    public function getPromoCode() {
        return $this->promoCode;
    }

    public function getUnitPrice() {
        return $this->unitPrice;
    }

    public function getShippingPrice() {
        return $this->shippingPrice;
    }

    public function setPromoCode($promoCode) {
        $this->promoCode = $promoCode;
        return $this;
    }

    public function setUnitPrice($unitPrice) {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    public function setShippingPrice($shippingPrice) {
        $this->shippingPrice = $shippingPrice;
        return $this;
    }
    
    public function __construct($obj = null) {
        parent::__construct($obj);
        
        if ($obj != null) 
            $this->load($obj);
        
    }
    public function load($obj) {
        parent::load($obj);
        
        if (isset($obj->PromoCode))
            $this->setPromoCode ($obj->PromoCode);
        
        if (isset($obj->UnitPrice))
            $this->setUnitPrice ($obj->UnitPrice);
        
        if (isset($obj->ShippingPrice))
            $this->setShippingPrice ($obj->ShippingPrice);
    }

}

?>
