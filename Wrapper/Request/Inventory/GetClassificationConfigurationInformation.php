<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Request\Inventory;

use KMJ\ChannelAdvisorBundle\Interfaces\AccountInterface;
use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
use KMJ\ChannelAdvisorBundle\Wrapper\Request\BaseRequest;

/**
 * Description of GetClassificationConfigurationInformation
 *
 * @author kaelinjacobson
 */
class GetClassificationConfigurationInformation extends BaseRequest implements AccountInterface, RequestInterface {

    use \KMJ\ChannelAdvisorBundle\Traits\Account;

    public function preformRequest() {
        $response = parent::createClient()->GetClassificationConfigurationInformation($this->toArray());
        print_r($response);
        
    }

    public function toArray() {
        return array(
            'accountID' => $this->getAccountId(),
        );
    }

}

?>