<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KMJ\ChannelAdvisorBundle\Wrapper\Response\Inventory;

/**
 * Description of ImageInfoResponse
 *
 * @author kaelinjacobson
 */
class ImageInfoResponse implements \KMJ\ChannelAdvisorBundle\Interfaces\ResponseInterface {

    //put your code here
    protected $placementName;
    protected $folderName;
    protected $url;
    protected $imageThumbList;

    public function getPlacementName() {
        return $this->placementName;
    }

    public function getFolderName() {
        return $this->folderName;
    }

    public function getUrl() {
        return $this->url;
    }

    public function getImageThumbList() {
        return $this->imageThumbList;
    }

    public function setPlacementName($placementName) {
        $this->placementName = $placementName;
        return $this;
    }

    public function setFolderName($folderName) {
        $this->folderName = $folderName;
        return $this;
    }

    public function setUrl($url) {
        $this->url = $url;
        return $this;
    }

    public function setImageThumbList($imageThumbList) {
        $this->imageThumbList = $imageThumbList;
        return $this;
    }
    
    public function __construct($obj) {
        $this->setImageThumbList(array());
        $this->load($obj);
    }

    public function load($obj) {
        if (isset($obj->PlacementName))
            $this->setPlacementName($obj->PlacementName);

        if (isset($obj->FolderName))
            $this->setFolderName($obj->FolderName);

        if (isset($obj->Url))
            $this->setUrl($obj->Url);

        if (isset($obj->ImageThumbList)) {
            foreach ($obj->ImageThumbList->ImageThumbInfo as $imageThumb) {
                $image = new \KMJ\ChannelAdvisorBundle\Wrapper\Object\Inventory\ImageThumb();
                $image->load($imageThumb);
                $this->setImageThumbList(array_merge($this->getImageThumbList(), array($imageThumb)));
            }
        }
    }

}

?>
