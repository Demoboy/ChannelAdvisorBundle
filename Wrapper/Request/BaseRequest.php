<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Request;

use SoapClient;
use SoapHeader;

/**
 * Description of Base
 *
 * @author kaelinjacobson
 */
abstract class BaseRequest {

    private $key;
    private $password;
    private $wsdl;
    private $singleResult;
    
    public function getSingleResult() {
        return $this->singleResult;
    }

    public function setSingleResult($singleResult) {
        $this->singleResult = $singleResult;
        return $this;
    }
        
    abstract function preformRequest();

    protected function getKey() {
        return $this->key;
    }

    protected function getPassword() {
        return $this->password;
    }

    public function setKey($key) {
        $this->key = $key;
        return $this;
    }

    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    protected function getWSDL() {
        return $this->wsdl;
    }

    protected function getSoapHeader() {
        return new SoapHeader(
                "http://api.channeladvisor.com/webservices/", 'APICredentials', array(
            'DeveloperKey' => $this->getKey(),
            'Password' => $this->getPassword(),
                )
        );
    }

    
    protected function createClient() {
        $client = new SoapClient($this->getWSDL());
        $client->__setSoapHeaders($this->getSoapHeader());
        return $client;
    }

    public function setWSDL($wsdl) {
        $this->wsdl = $wsdl;
        return $this;
    }

}

?>