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
class DoesSkuExist extends BaseRequest implements RequestInterface {
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
        $result = parent::createClient()->DoesSkuExist($this->toArray());
        $response = new \KMJ\ChannelAdvisorBundle\Wrapper\Response\BaseResponse($result->DoesSkuExistResult);

        if ($response->isSuccess()) {
            $doesSkuExist = new \KMJ\ChannelAdvisorBundle\Wrapper\Response\Inventory\DoesSkuExistResponse($result->DoesSkuExistResult->ResultData);
            $doesSkuExist->setSku($this->getSku());
            $response->setResult($doesSkuExist);
        } else {
            //error?
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
