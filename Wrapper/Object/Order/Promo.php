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

    use \KMJ\ChannelAdvisorBundle\Traits\SimpleElementTrait {
        \KMJ\ChannelAdvisorBundle\Traits\SimpleElementTrait::__construct as private __pConstruct;
    }

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
        $this->__pConstruct($obj);
    }

}