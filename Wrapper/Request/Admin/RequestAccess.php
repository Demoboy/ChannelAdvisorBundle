<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Request\Admin;

use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
use KMJ\ChannelAdvisorBundle\Wrapper\Request\BaseRequest;

/**
 * Description of RequestAccess
 *
 * @author kaelinjacobson
 */
class RequestAccess extends BaseRequest implements RequestInterface {

    protected $localId;

    public function getLocalId() {
        return $this->localId;
    }

    public function setLocalId($localId) {
        $this->localId = $localId;
        return $this;
    }

    public function preformRequest() {
        $result = parent::createClient()->RequestAccess($this->toArray());
        $response = new \KMJ\ChannelAdvisorBundle\Wrapper\Response\BaseResponse($result->RequestAccessResult);

        if ($response->isSuccess()) {
            return (bool) $result->RequestAccessResult->ResultData;
        } else {
            //error?
        }

        return false;
    }

    public function toArray() {
        return array(
            'localID' => $this->getLocalId(),
        );
    }

}

?>