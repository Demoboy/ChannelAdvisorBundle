<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KMJ\ChannelAdvisorBundle\Wrapper\Object\Inventory;

/**
 * Description of ImageThumb
 *
 * @author kaelinjacobson
 */
class ImageThumb implements \KMJ\ChannelAdvisorBundle\Interfaces\ResponseInterface {

    //put your code here
    protected $type;
    protected $url;

    public function getType() {
        return $this->type;
    }

    public function getUrl() {
        return $this->url;
    }

    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    public function setUrl($url) {
        $this->url = $url;
        return $this;
    }

    public function load($obj) {
        if (isset($obj->TypeName))
            $this->setType($obj->TypeName);

        if (isset($obj->Url))
            $this->setUrl($obj->Url);
    }

}

?>
