<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Response\Admin;

/**
 * Description of AuthorizationResponse
 *
 * @author kaelinjacobson
 */
class AuthorizationResponse {
    //put your code here

use \KMJ\ChannelAdvisorBundle\Traits\Account;

    protected $localId;
    protected $accountName;
    protected $accountType;
    protected $resourceName;
    protected $status;

    public function getAccountId() {
        return $this->accountId;
    }

    public function getLocalId() {
        return $this->localId;
    }

    public function getAccountName() {
        return $this->accountName;
    }

    public function getAccountType() {
        return $this->accountType;
    }

    public function getResourceName() {
        return $this->resourceName;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setAccountId($accountId) {
        $this->accountId = $accountId;
        return $this;
    }

    public function setLocalId($localId) {
        $this->localId = $localId;
        return $this;
    }

    public function setAccountName($accountName) {
        $this->accountName = $accountName;
        return $this;
    }

    public function setAccountType($accountType) {
        $this->accountType = $accountType;
        return $this;
    }

    public function setResourceName($resourceName) {
        $this->resourceName = $resourceName;
        return $this;
    }

    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    public function __construct($obj) {
        $this->load($obj);
    }

    public function isActive() {
        return $this->getStatus() == "Enabled";
    }

    public function load($obj) {
        if (isset($obj->AccountID))
            $this->setAccountId($obj->AccountID);

        if (isset($obj->LocalID))
            $this->setLocalId($obj->LocalID);

        if (isset($obj->AccountName))
            $this->setAccountName($obj->AccountName);

        if (isset($obj->AccountType))
            $this->setAccountType($obj->AccountType);

        if (isset($obj->ResourceName))
            $this->setResourceName($obj->ResourceName);

        if (isset($obj->Status)) {
            $this->setStatus($obj->Status);
        }
    }

}

?>
