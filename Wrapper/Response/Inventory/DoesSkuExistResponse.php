<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Response\Inventory;

/**
 * Description of DoesSkuExistResponse
 *
 * @author kaelinjacobson
 */
class DoesSkuExistResponse implements \KMJ\ChannelAdvisorBundle\Interfaces\ResponseInterface {

    //put your code here
    protected $sku;
    protected $exists;

    public function __construct($obj) {
        $this->load($obj);
    }

    public function getSku() {
        return $this->sku;
    }

    public function getExists() {
        return $this->exists;
    }

    public function setSku($sku) {
        $this->sku = $sku;
        return $this;
    }

    public function setExists($exists) {
        $this->exists = $exists;
        return $this;
    }

    public function load($obj) {
        if ($obj == "1" || $obj == null)
            $this->setExists((bool) $obj);
        
        if (isset($obj->Sku))
            $this->setSku($obj->Sku);

        if (isset($obj->Result))
            $this->setExists ((bool) $obj->Result);
    }

}
?>
