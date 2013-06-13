<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KMJ\ChannelAdvisorBundle\Wrapper\Request\Inventory;

/**
 * Description of GetInventoryQuantityList
 *
 * @author kaelinjacobson
 */
class GetInventoryQuantityList extends \KMJ\ChannelAdvisorBundle\Wrapper\Request\BaseRequest implements \KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface {
    //put your code here

use \KMJ\ChannelAdvisorBundle\Traits\Account;

    protected $skus;

    public function getSkus() {
        return $this->skus;
    }

    public function setSkus(array $skus) {
        $this->skus = $skus;
        return $this;
    }

    public function preformRequest() {
        $result = parent::createClient()->GetInventoryQuantityList($this->toArray());
        $response = new \KMJ\ChannelAdvisorBundle\Wrapper\Response\BaseResponse($result->GetInventoryQuantityListResult);

        if ($response->isSuccess()) {
            if (is_array($result->GetInventoryQuantityListResult->ResultData->InventoryQuantityResponse)) {
                $array = array();

                foreach ($result->GetInventoryQuantityListResult->ResultData->InventoryQuantityResponse as $r) {
                    $array[] = array(
                        'sku' => $r->SKU,
                        'quantity' => $r->Quantity,
                        'messageCode' => $r->MessageCode,
                    );
                }

                $response->setResult($array);
            } else {
                $r = array(
                    'sku' => $result->GetInventoryQuantityListResult->ResultData->InventoryQuantityResponse->SKU,
                    'quantity' => $result->GetInventoryQuantityListResult->ResultData->InventoryQuantityResponse->Quantity,
                    'messageCode' => $result->GetInventoryQuantityListResult->ResultData->InventoryQuantityResponse->MessageCode,
                );

                if ($this->getSingleResult())
                    $response->setResult($r);
                else
                    $response->setResult(array($r));
            }
        }

        return $response;
    }

    public function toArray() {
        return array(
            'accountID' => $this->getAccountId(),
            'skuList' => $this->getSkus(),
        );
    }

}

?>
