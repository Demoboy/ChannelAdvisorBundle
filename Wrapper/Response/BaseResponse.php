<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KMJ\ChannelAdvisorBundle\Wrapper\Response;

use KMJ\ChannelAdvisorBundle\Interfaces\ResponseInterface;

/**
 * Description of BaseResponse
 *
 * @author kaelinjacobson
 */
class BaseResponse implements ResponseInterface {

    //put your code here
    protected $status;
    protected $messageCode;
    protected $message;
    protected $data;
    protected $result;

    public function getStatus() {
        return $this->status;
    }

    public function getMessageCode() {
        return $this->messageCode;
    }

    public function getMessage() {
        return $this->message;
    }

    public function getData() {
        return $this->data;
    }

    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    public function setMessageCode($messageCode) {
        $this->messageCode = $messageCode;
        return $this;
    }

    public function setMessage($message) {
        $this->message = $message;
        return $this;
    }

    public function setData($data) {
        $this->data = $data;
        return $this;
    }

    public function __construct($obj) {
        $this->load($obj);
    }
    
    public function getResult() {
        return $this->result;
    }

    public function setResult($result) {
        $this->result = $result;
        return $this;
    }
    
    public function isSuccess() {
        return $this->getStatus() == "Success";
    }
    
    public function isFailure() {
        return $this->getStatus() == "Failure";
    }
    
    public function load($obj) {
        if (isset($obj->Status))
            $this->setStatus($obj->Status);
        
        if (isset($obj->MessageCode))
            $this->setMessageCode($obj->MessageCode);
        
        if (isset($obj->Message))
            $this->setMessage ($obj->Message);
        
        if (isset($obj->Data))
            $this->setData ($obj->Data);
    }

}

?>
