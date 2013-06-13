<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Request\Inventory;

use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
use KMJ\ChannelAdvisorBundle\Wrapper\Object\Inventory\AttributeInfo;
use KMJ\ChannelAdvisorBundle\Wrapper\Request\BaseRequest;
use KMJ\ChannelAdvisorBundle\Wrapper\Response\BaseResponse;

/**
 * Description of GetInventoryItemAttributeList
 *
 * @author kaelinjacobson
 */
class GetInventoryItemAttributeList extends BaseRequest implements RequestInterface {
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
        $result = parent::createClient()->GetInventoryItemAttributeList($this->toArray());
        $response = new BaseResponse($result->GetInventoryItemAttributeListResult);

        if ($response->isSuccess()) {
            if (is_array($result->GetInventoryItemAttributeListResult->ResultData->AttributeInfo)) {
                $array = array();

                foreach ($result->GetInventoryItemAttributeListResult->ResultData->AttributeInfo as $data) {
                    $array[] = new AttributeInfo($data);
                }

                $response->setResult($array);
            } else {
                $item = new AttributeInfo($result->GetInventoryItemAttributeListResult->ResultData->AttributeInfo);

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
            'sku' => $this->getSku(),
        );
    }

}

?>