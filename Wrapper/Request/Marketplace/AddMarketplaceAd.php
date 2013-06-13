<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Request\Marketplace;

use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
use KMJ\ChannelAdvisorBundle\Wrapper\Object\Marketplace\MarketplaceAd;
use KMJ\ChannelAdvisorBundle\Wrapper\Request\BaseRequest;

/**
 * Description of AddMarketplaceAd
 *
 * @author kaelinjacobson
 */
class AddMarketplaceAd extends BaseRequest implements RequestInterface {

    use \KMJ\ChannelAdvisorBundle\Traits\Account;

    protected $adProperties;

    public function getAdProperties() {
        return $this->adProperties;
    }

    public function setAdProperties($adProperties) {
        $this->adProperties = $adProperties;
        return $this;
    }
    
    public function preformRequest() {
        print_r($this->toArray());
        $result = parent::createClient()->AddMarketplaceAd($this->toArray());
        
        print_r($result);
    }

    public function __construct() {
        $this->setAdProperties(new MarketplaceAd());
    }
    
    public function toArray() {
        return array(
            "accountID" => $this->getAccountId(),
            "adProperties" => $this->getAdProperties()->toArray(),
        );
    }
}