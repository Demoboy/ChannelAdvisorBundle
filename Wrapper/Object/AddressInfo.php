<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Object;

use KMJ\ChannelAdvisorBundle\Interfaces\ResponseInterface;

/**
 * Description of AddressInfo
 *
 * @author kaelinjacobson
 */
class AddressInfo implements ResponseInterface {

    use \KMJ\ChannelAdvisorBundle\Traits\SimpleElementTrait {
        \KMJ\ChannelAdvisorBundle\Traits\SimpleElementTrait::__construct as private __aiConstruct;
    }
    
    public function __construct($obj = null) {
        $this->__aiConstruct($obj);
    }
    
    protected $addressLine1;
    protected $addressLine2;
    protected $city;
    protected $region;
    protected $regionDescription;
    protected $postalCode;
    protected $countryCode;

    public function getAddress() {
        return $this->address;
    }

    public function getAddress2() {
        return $this->address2;
    }

    public function getCity() {
        return $this->city;
    }

    public function getRegion() {
        return $this->region;
    }

    public function getRegionDescription() {
        return $this->regionDescription;
    }

    public function getPostalCode() {
        return $this->postalCode;
    }

    public function getCountryCode() {
        return $this->countryCode;
    }

    public function setAddress($address) {
        $this->address = $address;
        return $this;
    }

    public function setAddress2($address2) {
        $this->address2 = $address2;
        return $this;
    }

    public function setCity($city) {
        $this->city = $city;
        return $this;
    }

    public function setRegion($region) {
        $this->region = $region;
        return $this;
    }

    public function setRegionDescription($regionDescription) {
        $this->regionDescription = $regionDescription;
        return $this;
    }

    public function setPostalCode($postalCode) {
        $this->postalCode = $postalCode;
        return $this;
    }

    public function setCountryCode($countryCode) {
        $this->countryCode = $countryCode;
        return $this;
    }

    public function load($obj) {
        
    }

}