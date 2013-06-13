<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KMJ\ChannelAdvisorBundle\Wrapper\Request\Inventory;

use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
use KMJ\ChannelAdvisorBundle\Wrapper\Request\BaseRequest;

/**
 * Description of GetInventoryItemQuantityInfo
 *
 * @author kaelinjacobson
 */
class GetInventoryItemQuantityInfo extends BaseRequest implements RequestInterface {
    //put your code here

use \KMJ\ChannelAdvisorBundle\Traits\Account;

    protected $sku;

    public function getSku() {
        return $this->sku;
    }

    public function setSku($sku) {
        $this->sku = $sku;
        return $this;
    }

    public function preformRequest() {
        $result = parent::createClient()->GetInventoryItemQuantityInfo($this->toArray());
        $response = new \KMJ\ChannelAdvisorBundle\Wrapper\Response\BaseResponse($result->GetInventoryItemQuantityInfoResult);

        if ($response->isSuccess()) {
            $response->setResult(new \KMJ\ChannelAdvisorBundle\Wrapper\Object\Inventory\QuantityInfo($result->GetInventoryItemQuantityInfoResult->ResultData));
        }
        
        return $response;
    }

    public function toArray() {
        return array(
            'accountID' => $this->getAccountId(),
            'sku' => $this->getSku(),
        );
    }

}

?>