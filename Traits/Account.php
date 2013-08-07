<?php

namespace KMJ\ChannelAdvisorBundle\Traits;


trait Account {

    protected $accountId;

    public function getAccountId() {
        return $this->accountId;
    }

    public function setAccountId($accountId) {
        $this->accountId = $accountId;
        return $this;
    }

}
