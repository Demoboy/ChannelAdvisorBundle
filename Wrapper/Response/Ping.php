<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Response;

use KMJ\ChannelAdvisorBundle\Interfaces\ResponseInterface;

/**
 * Description of Ping
 *
 * @author kaelinjacobson
 */
class Ping implements ResponseInterface {
    protected $status;
    protected $messageCode;
    protected $resultData;
    
    public function getStatus() {
        return $this->status;
    }

    public function getMessageCode() {
        return $this->messageCode;
    }

    public function getResultData() {
        return $this->resultData;
    }

    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    public function setMessageCode($messageCode) {
        $this->messageCode = $messageCode;
        return $this;
    }

    public function setResultData($resultData) {
        $this->resultData = $resultData;
        return $this;
    }
    
    public function __construct($obj) {
        $this->load($obj);
    }
    
    public function load($obj) {        
        if (isset($obj->Status))
            $this->setStatus($obj->Status);
        
        if (isset($obj->MessageCode))
            $this->setMessageCode($obj->MessageCode);
        
        if (isset($obj->ResultData))
            $this->setResultData($obj->ResultData);
    }
}

?>