<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KMJ\ChannelAdvisorBundle\Wrapper\Request\Inventory;

use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
use KMJ\ChannelAdvisorBundle\Wrapper\Request\BaseRequest;
use KMJ\ChannelAdvisorBundle\Wrapper\Response\BaseResponse;
use KMJ\ChannelAdvisorBundle\Wrapper\Response\Inventory\DistributionCenterInfoResponse;

/**
 * Description of GetInventoryItemShippingInfo
 *
 * @author kaelinjacobson
 */
class GetInventoryItemShippingInfo extends BaseRequest implements RequestInterface {
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
        $result = parent::createClient()->GetInventoryItemShippingInfo($this->toArray());
        $response = new BaseResponse($result->GetInventoryItemShippingInfoResult);

        if ($response->isSuccess()) {
            if (is_array($result->GetInventoryItemShippingInfoResult->ResultData->DistributionCenterInfoResponse)) {
                $array = array();

                foreach ($result->GetInventoryItemShippingInfoResult->ResultData->DistributionCenterInfoResponse as $r) {
                    $array[] = new DistributionCenterInfoResponse($r);
                }

                $response->setResult($array);
            } else {
                $dc = new DistributionCenterInfoResponse($result->GetInventoryItemShippingInfoResult->ResultData->DistributionCenterInfoResponse);

                if (!$this->getSingleResult()) {
                    $response->setResult(array($dc));
                } else {
                    $response->setResult($dc);
                }
            }
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
