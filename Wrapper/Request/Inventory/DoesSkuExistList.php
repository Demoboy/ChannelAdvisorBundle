<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Request\Inventory;

use KMJ\ChannelAdvisorBundle\Interfaces\AccountInterface;
use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
use KMJ\ChannelAdvisorBundle\Wrapper\Request\BaseRequest;

/**
 * Description of DoesSkuExist
 *
 * @author kaelinjacobson
 */
class DoesSkuExistList extends BaseRequest implements RequestInterface, AccountInterface {

    protected $accountId;
    protected $skus;

    public function getAccountId() {
        return $this->accountId;
    }

    public function setAccountId($accountId) {
        $this->accountId = $accountId;
        return $this;
    }

    public function getSkus() {
        return $this->skus;
    }

    public function setSkus(array $skus) {
        $this->skus = $skus;
        return $this;
    }

    public function preformRequest() {
        $result = parent::createClient()->DoesSkuExistList($this->toArray());
        $response = new \KMJ\ChannelAdvisorBundle\Wrapper\Response\BaseResponse($result->DoesSkuExistListResult);

        if ($response->isSuccess()) {
            if (is_array($result->DoesSkuExistListResult->ResultData->DoesSkuExistResponse)) {
                $array = array();
                
                foreach ($result->DoesSkuExistListResult->ResultData->DoesSkuExistResponse as $data) {
                    $array[] = new \KMJ\ChannelAdvisorBundle\Wrapper\Response\Inventory\DoesSkuExistResponse($data);
                }
                
                $response->setResult($array);
            } else {
                $doesSkuExist = new \KMJ\ChannelAdvisorBundle\Wrapper\Response\Inventory\DoesSkuExistResponse($result->DoesSkuExistListResult->ResultData->DoesSkuExistResponse);
                $response->setResult($doesSkuExist);
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
