<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KMJ\ChannelAdvisorBundle\Wrapper\Request\Inventory;

use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
use KMJ\ChannelAdvisorBundle\Wrapper\Request\BaseRequest;

/**
 * Description of GetInventoryItemImageList
 *
 * @author kaelinjacobson
 */
class GetInventoryItemImageList extends BaseRequest implements RequestInterface {
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
        $result = parent::createClient()->GetInventoryItemImageList($this->toArray());
        $response = new \KMJ\ChannelAdvisorBundle\Wrapper\Response\BaseResponse($result->GetInventoryItemImageListResult);
        
        if ($response->isSuccess()) {
            if (isset($result->GetInventoryItemImageListResult->ResultData)) {
                if (is_array($result->GetInventoryItemImageListResult->ResultData->ImageInfoResponse)) {
                    $array = array();

                    foreach ($result->GetInventoryItemImageListResult->ResultData->ImageInfoResponse as $image) {
                        $imageObj = new \KMJ\ChannelAdvisorBundle\Wrapper\Response\Inventory\ImageInfoResponse($image);
                        $array[] = $imageObj;
                    }

                    $response->setResult($array);
                } else {
                    $imageObj = new \KMJ\ChannelAdvisorBundle\Wrapper\Response\Inventory\ImageInfoResponse($result->GetInventoryItemImageListResult->ResultData->ImageInfoResponse);

                    $response->setResult(array($imageObj));
                }
            } else {
             $response->setResult(array());   
            }
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
