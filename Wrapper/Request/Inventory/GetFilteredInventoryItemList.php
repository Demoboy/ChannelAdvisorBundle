<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Request\Inventory;

use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
use KMJ\ChannelAdvisorBundle\Wrapper\Object\Inventory\ItemCriteria;
use KMJ\ChannelAdvisorBundle\Wrapper\Object\Inventory\ItemDetailLevel;
use KMJ\ChannelAdvisorBundle\Wrapper\Request\BaseRequest;
use KMJ\ChannelAdvisorBundle\Wrapper\Response\BaseResponse;
use KMJ\ChannelAdvisorBundle\Wrapper\Response\Inventory\ItemResponse;

/**
 * Description of GetFilteredInventoryItemList
 *
 * @author kaelinjacobson
 */
class GetFilteredInventoryItemList extends BaseRequest implements RequestInterface {

    use \KMJ\ChannelAdvisorBundle\Traits\Account,
        \KMJ\ChannelAdvisorBundle\Traits\SortableRequest;

    protected $itemCriteria;
    protected $detailLevel;

    public function getItemCriteria() {
        return $this->itemCriteria;
    }

    public function getDetailLevel() {
        return $this->detailLevel;
    }

    public function setItemCriteria(ItemCriteria $itemCriteria) {
        $this->itemCriteria = $itemCriteria;
        return $this;
    }

    public function setDetailLevel(ItemDetailLevel $detailLevel) {
        $this->detailLevel = $detailLevel;
        return $this;
    }

    public function preformRequest() {
        $result = parent::createClient()->GetFilteredInventoryItemList($this->toArray());

        $response = new BaseResponse($result->GetFilteredInventoryItemListResult);

        if ($response->isSuccess()) {
            if (isset($result->GetFilteredInventoryItemListResult->ResultData)) {
                if (is_array($result->GetFilteredInventoryItemListResult->ResultData->InventoryItemResponse)) {
                    $array = array();

                    foreach ($result->GetFilteredInventoryItemListResult->ResultData->InventoryItemResponse as $data) {
                        $array[] = new ItemResponse($data);
                    }

                    $response->setResult($array);
                } else {
                    $item = new ItemResponse($result->GetFilteredInventoryItemListResult->ResultData->InventoryItemResponse);

                    if ($this->getSingleResult())
                        $response->setResult($item);
                    else
                        $response->setResult(array($item));
                }
            } else {
                $response->setResult(null);
            }
        }

        return $response;
    }

    public function __construct() {
        $this->setItemCriteria(new ItemCriteria());
        $this->setDetailLevel(new ItemDetailLevel());
    }

    public function toArray() {
        return array(
            'accountID' => $this->getAccountId(),
            'itemCriteria' => $this->getItemCriteria()->toArray(),
            'detailLevel' => $this->getDetailLevel()->toArray(),
            'sortField' => $this->getSortField(),
            'sortDirection' => $this->getSortDirection(),
        );
    }

}

?>
