<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Request\Inventory;

use KMJ\ChannelAdvisorBundle\Wrapper\Object\Inventory\ItemCriteria;
use KMJ\ChannelAdvisorBundle\Wrapper\Response\Inventory\ItemResponse;
use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
use KMJ\ChannelAdvisorBundle\Wrapper\Request\BaseRequest;
use KMJ\ChannelAdvisorBundle\Wrapper\Response\BaseResponse;

/**
 * Description of GetFilteredSkuList
 *
 * @author kaelinjacobson
 */
class GetFilteredSkuList extends BaseRequest implements RequestInterface {

    use \KMJ\ChannelAdvisorBundle\Traits\Account,
        \KMJ\ChannelAdvisorBundle\Traits\SortableRequest;

    protected $itemCriteria;

    public function getItemCriteria() {
        return $this->itemCriteria;
    }

    public function setItemCriteria(ItemCriteria $itemCriteria) {
        $this->itemCriteria = $itemCriteria;
        return $this;
    }

    public function __construct() {
        $this->setItemCriteria(new ItemCriteria());
    }

    public function preformRequest() {
        $result = parent::createClient()->GetFilteredSkuList($this->toArray());
        $response = new BaseResponse($result->GetInventoryItemListResult);

        if ($response->isSuccess()) {
            if (is_array($result->GetInventoryItemListResult->ResultData->InventoryItemResponse)) {
                $array = array();

                foreach ($result->GetInventoryItemListResult->ResultData->InventoryItemResponse as $data) {
                    $array[] = new ItemResponse($data);
                }
                $response->setResult($array);
            } else {
                $item = new ItemResponse($result->GetInventoryItemListResult->ResultData->InventoryItemResponse);

                if ($this->getSingleResult())
                    $response->setResult($item);
                else
                    $response->setResult(array($item));
            }
        }
    }

    public function toArray() {
        return array(
            'accountID' => $this->getAccountId(),
            'itemCriteria' => $this->getItemCriteria()->toArray(),
            'sortField' => $this->getSortField(),
            'sortDirection' => $this->getSortDirection(),
        );
    }

}

?>
