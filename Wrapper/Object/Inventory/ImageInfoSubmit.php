<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KMJ\ChannelAdvisorBundle\Wrapper\Object\Inventory;

/**
 * Description of ImageInfoSubmit
 *
 * @author kaelinjacobson
 */
class ImageInfoSubmit implements \KMJ\ChannelAdvisorBundle\Interfaces\RequestInterface {
    //put your code here
    protected $placementName;
    protected $folderName;
    protected $filenameOrUrl;
    
    public function getPlacementName() {
        return $this->placementName;
    }

    public function getFolderName() {
        return $this->folderName;
    }

    public function getFilenameOrUrl() {
        return $this->filenameOrUrl;
    }

    public function setPlacementName($placementName) {
        $this->placementName = $placementName;
        return $this;
    }

    public function setFolderName($folderName) {
        $this->folderName = $folderName;
        return $this;
    }

    public function setFilenameOrUrl($filenameOrUrl) {
        $this->filenameOrUrl = $filenameOrUrl;
        return $this;
    }
    
    public function toArray() {
        return array(
            'PlacementName' => $this->getPlacementName(),
            'FolderName' => $this->getFolderName(),
            'FilenameOrUrl' => $this->getFilenameOrUrl(),
        );
    }

}

?>
