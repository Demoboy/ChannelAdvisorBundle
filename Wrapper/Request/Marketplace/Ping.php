<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Request\Marketplace;

use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
use KMJ\ChannelAdvisorBundle\Wrapper\Request\BaseRequest;

/**
 * Description of Ping
 *
 * @author kaelinjacobson
 */
class Ping extends BaseRequest implements RequestInterface {

    public function preformRequest() {
        $result = parent::createClient()->Ping($this->toArray());
        $response = new \KMJ\ChannelAdvisorBundle\Wrapper\Response\Ping($result->PingResult);
                
        return $response;
    }

    public function toArray() {
        return array();
    }

}

?>
