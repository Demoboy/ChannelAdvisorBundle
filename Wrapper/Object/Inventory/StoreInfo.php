<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KMJ\ChannelAdvisorBundle\Wrapper\Object\Inventory;

use KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface;
use KMJ\ChannelAdvisorBundle\Interfaces\ResponseInterface;

/**
 * Description of StoreInfo
 *
 * @author kaelinjacobson
 */
class StoreInfo implements RequestInterface, ResponseInterface {

    //put your code here
    protected $displayInStore;
    protected $title;
    protected $description;
    protected $categoryId;

    public function getDisplayInStore() {
        return $this->displayInStore;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getCategoryId() {
        return $this->categoryId;
    }

    public function setDisplayInStore($displayInStore) {
        $this->displayInStore = $displayInStore;
        return $this;
    }

    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    public function setCategoryId($categoryId) {
        $this->categoryId = $categoryId;
        return $this;
    }

    public function __construct($obj = null) {
        $this->displayInStore = true;
        if ($obj != null) 
            $this->load($obj);
    }

    public function toArray() {
        return array(
            'DisplayInStore' => $this->getDisplayInStore(),
            'Title' => $this->getTitle(),
            'Description' => $this->getDescription(),
            'CategoryID' => $this->getCategoryId(),
        );
    }    

    public function load($obj) {
        if (isset($obj->DisplayInStore))
            $this->setDisplayInStore((bool) $obj->DisplayInStore);
        
        if (isset($obj->Title))
            $this->setTitle($obj->Title);
        
        if (isset($obj->Description))
            $this->setDescription($obj->Description);
        
        if (isset($obj->CategoryID))
            $this->setCategoryID($obj->CategoryID);
    }

}