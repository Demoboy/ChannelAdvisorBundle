<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Request\Marketplace;

use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
use KMJ\ChannelAdvisorBundle\Wrapper\Request\BaseRequest;
use KMJ\ChannelAdvisorBundle\Wrapper\Response\BaseResponse;

/**
 * Description of DeleteMarketplaceAd
 *
 * @author kaelinjacobson
 */
class DeleteMarketplaceAd extends BaseRequest implements RequestInterface {

    use \KMJ\ChannelAdvisorBundle\Traits\Account;

    protected $marketplaceAdID;

    public function getMarketplaceAdID() {
        return $this->marketplaceAdID;
    }

    public function setMarketplaceAdID($marketplaceAdID) {
        $this->marketplaceAdID = $marketplaceAdID;
        return $this;
    }

    public function preformRequest() {
        $result = parent::createClient()->DeleteMarketplaceAd($this->toArray());
        $response = new BaseResponse($result->DeleteMarketplaceAdResult);
        
        if ($response->isSuccess()) {
            $response->setResult($result->DeleteMarketplaceAdResult->ResultData);
        }

        return $response;
    }
   
    public function toArray() {
        return array(
            "accountID" => $this->getAccountId(),
            "marketplaceAdID" => $this->getMarketplaceAdID(),
        );
    }
}