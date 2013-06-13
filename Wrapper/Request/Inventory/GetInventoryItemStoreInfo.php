<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KMJ\ChannelAdvisorBundle\Wrapper\Request\Inventory;

use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
use KMJ\ChannelAdvisorBundle\Wrapper\Object\Inventory\StoreInfo;
use KMJ\ChannelAdvisorBundle\Wrapper\Request\BaseRequest;
use KMJ\ChannelAdvisorBundle\Wrapper\Response\BaseResponse;

/**
 * Description of GetInventoryItemStoreInfo
 *
 * @author kaelinjacobson
 */
class GetInventoryItemStoreInfo extends BaseRequest implements RequestInterface {
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
        $result = parent::createClient()->GetInventoryItemStoreInfo($this->toArray());
        $response = new BaseResponse($result->GetInventoryItemStoreInfoResult);
        
        if ($response->isSuccess()) {
            $response->setResult(new StoreInfo($result->GetInventoryItemStoreInfoResult->ResultData));
        }
        
        print_r($response);
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
