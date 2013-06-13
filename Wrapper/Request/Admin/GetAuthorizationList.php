<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Request\Admin;

use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
use KMJ\ChannelAdvisorBundle\Wrapper\Request\BaseRequest;

/**
 * Description of GetAuthorizationList
 *
 * @author kaelinjacobson
 */
class GetAuthorizationList extends BaseRequest implements RequestInterface {

    protected $localId;

    public function getLocalId() {
        return $this->localId;
    }

    public function setLocalId($localId) {
        $this->localId = $localId;
        return $this;
    }

    public function preformRequest() {
        $result = parent::createClient()->GetAuthorizationList($this->toArray());
        $response = new \KMJ\ChannelAdvisorBundle\Wrapper\Response\BaseResponse($result->GetAuthorizationListResult);

        if ($response->isSuccess()) {
            if (is_array($result->GetAuthorizationListResult->ResultData->AuthorizationResponse)) {
                $array = array();

                foreach ($result->GetAuthorizationListResult->ResultData->AuthorizationResponse as $data) {
                    $authResponse = new \KMJ\ChannelAdvisorBundle\Wrapper\Response\Admin\AuthorizationResponse($data);
                    $array[] = $authResponse;
                }

                $response->setResult($array);
            } else {
                $authResponse = new \KMJ\ChannelAdvisorBundle\Wrapper\Response\Admin\AuthorizationResponse($result->GetAuthorizationListResult->ResultData->AuthorizationResponse);
                $response->setResult(array($authResponse));
            }
        }

        return $response;
    }

    public function toArray() {
        return array(
            'localID' => $this->getLocalId(),
        );
    }

}

?>