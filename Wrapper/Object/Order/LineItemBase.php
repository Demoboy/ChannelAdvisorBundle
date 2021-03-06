<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Object\Order;

use KMJ\ChannelAdvisorBundle\Interfaces\ResponseInterface;

/**
 * Description of LineItemBase
 *
 * @author kaelinjacobson
 */
class LineItemBase implements ResponseInterface {

    use \KMJ\ChannelAdvisorBundle\Traits\SimpleElementTrait {
        \KMJ\ChannelAdvisorBundle\Traits\SimpleElementTrait::__construct as private __libConstruct;
    }

    protected $lineItemType;
    protected $unitPrice;

    public function getType() {
        return $this->type;
    }

    public function getUnitPrice() {
        return $this->unitPrice;
    }

    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    public function setUnitPrice($unitPrice) {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    public function __construct($obj = null) {
       $this->__libConstruct($obj);
    }

    public function load($obj) {
        if (isset($obj->LineItemType))
            $this->setType($obj->LineItemType);

        if (isset($obj->UnitPrice))
            $this->setUnitPrice($obj->UnitPrice);
    }

}

?>
