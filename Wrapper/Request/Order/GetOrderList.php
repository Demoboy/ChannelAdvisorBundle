<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KMJ\ChannelAdvisorBundle\Wrapper\Request\Order;

use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
use KMJ\ChannelAdvisorBundle\Wrapper\Object\Order\Criteria;
use KMJ\ChannelAdvisorBundle\Wrapper\Request\BaseRequest;
use KMJ\ChannelAdvisorBundle\Wrapper\Response\BaseResponse;
use KMJ\ChannelAdvisorBundle\Wrapper\Response\Order\ResponseItem;

/**
 * Description of GetOrderList
 *
 * @author kaelinjacobson
 */
class GetOrderList extends BaseRequest implements RequestInterface {

    use \KMJ\ChannelAdvisorBundle\Traits\Account;

    /**
     *
     * @var Criteria
     */
    protected $orderCriteria;

    public function getOrderCriteria() {
        return $this->orderCriteria;
    }

    public function setOrderCriteria(Criteria $orderCriteria) {
        $this->orderCriteria = $orderCriteria;
        return $this;
    }

    public function __construct() {
        $this->setOrderCriteria(new Criteria());
    }
    
    public function preformRequest() {
        $result = parent::createClient()->getOrderList($this->toArray());
        $response = new BaseResponse($result->GetOrderListResult);

        if ($response->isSuccess()) {
            if (is_array($result->GetOrderListResult->ResultData->OrderResponseItem)) {
                $responses = array();
                foreach ($result->GetOrderListResult->ResultData->OrderResponseItem as $responseItem) {
                    $responses[] = new ResponseItem($responseItem);
                }
                $response->setResult($responses);
            } else {
                $response->setResult(array(new ResponseItem($result->GetOrderListResult->ResultData->OrderResponseItem)));
            }
        }

        return $response;
    }

    public function toArray() {
        return array(
            'accountID' => $this->getAccountId(),
            'orderCriteria' => $this->getOrderCriteria()->toArray(),
        );
    }

}