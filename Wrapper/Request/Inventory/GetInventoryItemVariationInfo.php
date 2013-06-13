<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KMJ\ChannelAdvisorBundle\Wrapper\Request\Inventory;

use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
use KMJ\ChannelAdvisorBundle\Wrapper\Request\BaseRequest;

/**
 * Description of GetInventoryItemVariationInfo
 *
 * @author kaelinjacobson
 */
class GetInventoryItemVariationInfo extends BaseRequest implements RequestInterface {
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
        $result = parent::createClient()->GetInventoryItemVariationInfo($this->toArray());
        $response = new \KMJ\ChannelAdvisorBundle\Wrapper\Response\BaseResponse($result->GetInventoryItemVariationInfoResult);
        
        if ($response->isSuccess()) {
            $response->setResult(new \KMJ\ChannelAdvisorBundle\Wrapper\Object\Inventory\VariationInfo($result->GetInventoryItemVariationInfoResult->ResultData));
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
