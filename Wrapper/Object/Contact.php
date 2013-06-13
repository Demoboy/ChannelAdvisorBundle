<?php
namespace KMJ\ChannelAdvisorBundle\Wrapper\Object;

use KMJ\ChannelAdvisorBundle\Wrapper\Object\AddressInfo;
/**
 * Description of Contact
 *
 * @author kaelinjacobson
 */
class Contact extends AddressInfo {

    protected $companyName;
    protected $title;
    protected $firstName;
    protected $lastName;
    protected $suffix;
    protected $phoneNumberDay;
    protected $phoneNumberNight;

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

    public function getPhoneNumberDay() {
        return $this->phoneNumberDay;
    }

    public function getPhoneNumberNight() {
        return $this->phoneNumberNight;
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

    public function setPhoneNumberDay($phoneNumberDay) {
        $this->phoneNumberDay = $phoneNumberDay;
        return $this;
    }

    public function setPhoneNumberNight($phoneNumberNight) {
        $this->phoneNumberNight = $phoneNumberNight;
        return $this;
    }

    public function load($obj) {
        parent::load($obj);

        if (isset($obj->CompanyName))
            $this->setCompanyName($obj->CompanyName);
        
        if (isset($obj->Title))
            $this->setTitle($obj->Title);
        
        if (isset($obj->FirstName))
            $this->setFirstName($obj->FirstName);
        
        if (isset($obj->LastName))
            $this->setLastName($obj->LastName);
        
        if (isset($obj->Suffix))
            $this->setSuffix($obj->Suffix);
        
        if (isset($obj->PhoneNumberDay))
            $this->setPhoneNumberDay($obj->PhoneNumberDay);
        
         if (isset($obj->PhoneNumberEvening))
            $this->setPhoneNumberNight($obj->PhoneNumberEvening);
    }

}