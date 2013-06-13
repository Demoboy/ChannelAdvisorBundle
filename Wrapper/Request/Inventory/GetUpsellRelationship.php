<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Request\Inventory;


/**
 * Description of GetUpsellRelationship
 *
 * @author kaelinjacobson
 */
class GetUpsellRelationship implements \KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface {

    //put your code here
    use \KMJ\ChannelAdvisorBundle\Traits\Account;
    
    protected $parentSkus;

    public function getParentSkus() {
        return $this->parentSkus;
    }

    public function setParentSkus(array $parentSkus) {
        $this->parentSkus = $parentSkus;
        return $this;
    }
    
    public function preformRequest() {
        $response = parent::createClient()->GetUpsellRelationship($this->toArray());
    }

    public function toArray() {
        return array(
            'accountID' => $this->getAccountId(),
            'parentSKUList' => $this->getParentSkus(),
        );
    }


}

?>
