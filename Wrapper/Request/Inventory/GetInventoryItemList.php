<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Request\Inventory;

use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
use KMJ\ChannelAdvisorBundle\Wrapper\Request\BaseRequest;

/**
 * Description of GetInventoryItemList
 *
 * @author kaelinjacobson
 */
class GetInventoryItemList extends BaseRequest implements RequestInterface {
    //put your code here

use \KMJ\ChannelAdvisorBundle\Traits\Account;

    protected $skus;

    public function getSkus() {
        return $this->skus;
    }

    public function setSkus($skus) {
        $this->skus = $skus;
        return $this;
    }

    public function __construct() {
        $this->skus = array();
    }

    public function preformRequest() {
        $result = parent::createClient()->GetInventoryItemList($this->toArray());
        $response = new \KMJ\ChannelAdvisorBundle\Wrapper\Response\BaseResponse($result->GetInventoryItemListResult);
        
        if ($response->isSuccess()) {
            if (is_array($result->GetInventoryItemListResult->ResultData->InventoryItemResponse)) {
                $array = array();

                foreach ($result->GetInventoryItemListResult->ResultData->InventoryItemResponse as $data) {
                    $array[] = new \KMJ\ChannelAdvisorBundle\Wrapper\Response\Inventory\ItemResponse($data);
                }
                $response->setResult($array);
            } else {
                $item = new \KMJ\ChannelAdvisorBundle\Wrapper\Response\Inventory\ItemResponse($result->GetInventoryItemListResult->ResultData->InventoryItemResponse);

                if ($this->getSingleResult())
                    $response->setResult($item);
                else
                    $response->setResult(array($item));
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