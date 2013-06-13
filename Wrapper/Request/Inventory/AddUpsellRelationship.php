<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Request\Inventory;

use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
use KMJ\ChannelAdvisorBundle\Wrapper\Object\Inventory\UpsellInfoSubmit;
use KMJ\ChannelAdvisorBundle\Wrapper\Request\BaseRequest;

/**
 * Description of AddUpsellRelationship
 *
 * @author kaelinjacobson
 */
class AddUpsellRelationship extends BaseRequest implements RequestInterface {

    use \KMJ\ChannelAdvisorBundle\Traits\Account;

    protected $upsellInfoList;

    public function getUpsellInfoList() {
        return $this->upsellInfoList;
    }

    public function setUpsellInfoList(array $upsellInfoList) {
        $this->upsellInfoList = $upsellInfoList;
        return $this;
    }

    public function getBlankUpsellInfoList() {
        return new UpsellInfoSubmit();
    }

    public function preformRequest() {
        $response = parent::createClient()->AddUpsellRelationship($this->toArray());
    }

    public function toArray() {
        $upsellInfoList = array();

        foreach ($this->getUpsellInfoList() as $l) {
            $upsellInfoList[] = $l->toArray();
        }

        return array(
            'accountID' => $this->getAccountId(),
            'upsellInfoList' => $upsellInfoList,
        );
    }

}

?>
