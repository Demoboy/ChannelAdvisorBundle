<?php

namespace KMJ\ChannelAdvisorBundle\Wrapper\Object;

use KMJ\ChannelAdvisorBundle\Wrapper\Object\AddressInfo;

/**
 * Description of Contact
 *
 * @author kaelinjacobson
 */
class Contact extends AddressInfo {

    use \KMJ\ChannelAdvisorBundle\Traits\SimpleElementTrait {
        \KMJ\ChannelAdvisorBundle\Traits\SimpleElementTrait::__construct as private __contactConstruct;
    }

    public function __construct($obj = null) {
        parent::__construct($obj);
        $this->__contactConstruct($obj);
    }

    protected $companyName;
    protected $title;
    protected $firstName;
    protected $lastName;
    protected $suffix;
    protected $jobTitle;
    protected $phoneNumberDay;
    protected $phoneNumberEvening;

    public function getCompanyName() {
        return $this->companyName;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getSuffix() {
        return $this->suffix;
    }

    public function getJobTitle() {
        return $this->jobTitle;
    }

    public function getPhoneNumberDay() {
        return $this->phoneNumberDay;
    }

    public function getPhoneNumberEvening() {
        return $this->phoneNumberEvening;
    }

    public function setCompanyName($companyName) {
        $this->companyName = $companyName;
        return $this;
    }

    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
        return $this;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
        return $this;
    }

    public function setSuffix($suffix) {
        $this->suffix = $suffix;
        return $this;
    }

    public function setJobTitle($jobTitle) {
        $this->jobTitle = $jobTitle;
        return $this;
    }

    public function setPhoneNumberDay($phoneNumberDay) {
        $this->phoneNumberDay = $phoneNumberDay;
        return $this;
    }

    public function setPhoneNumberEvening($phoneNumberEvening) {
        $this->phoneNumberEvening = $phoneNumberEvening;
        return $this;
    }
}