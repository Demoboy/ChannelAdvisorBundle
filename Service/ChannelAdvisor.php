<?php

namespace KMJ\ChannelAdvisorBundle\Service;

use JMS\DiExtraBundle\Annotation\Service;
use JMS\DiExtraBundle\Annotation\InjectParams;
use JMS\DiExtraBundle\Annotation\Inject;

/**
 * @Service("channeladvisor")
 */
class ChannelAdvisor {

    const REQUEST_PATH = "\KMJ\ChannelAdvisorBundle\Wrapper\Request";

    private $configs;
    private $templating;

    /**
     * @InjectParams({
     *      "configs" = @Inject("%api.channeladvisor.parameters%"), 
     *      "templating" = @Inject("templating"),
     * })
     */
    public function __construct(array $configs, $templating) {
        $this->configs = $configs;
        $this->templating = $templating;
    }

    public function getKey() {
        return $this->configs['key'];
    }

    public function getRequest($request) {
        $explodedRequest = explode('.', $request);
        $class = self::REQUEST_PATH . '\\' . $explodedRequest[0] . '\\' . $explodedRequest[1];
        $request = new $class();

        return $this->setup($request, $explodedRequest[0]);
    }

    public function setup($request, $type) {
        $request->setKey($this->getKey())
                ->setPassword($this->getPassword());

        switch (strtolower($type)) {
            case "admin":
                $request->setWSDL($this->getAdminServiceWSDL());
                break;
            case "cart":
                $request->setWSDL($this->getCartServiceWSDL());
                break;
            case "inventory":
                $request->setWSDL($this->getInventoryServiceWSDL());
                break;
            case "listing":
                $request->setWSDL($this->getListingServiceWSDL());
                break;
            case "marketplace":
                $request->setWSDL($this->getMarketplaceServiceWSDL());
                break;
            case "order":
                $request->setWSDL($this->getOrderServiceWSDL());
                break;
            case "shipping":
                $request->setWSDL($this->getShippingServiceWSDL());
                break;
            case "store":
                $request->setWSDL($this->getStoreServiceWSDL());
                break;
            case "tax":
                $request->setWSDL($this->getTaxServiceWSDL());
                break;
        }
        
        if (method_exists($request, 'setAccountId')) {
            $request->setAccountId($this->getAccountId());
        }

        return $request;
    }

    public function getPassword() {
        return $this->configs['password'];
    }

    public function getAccountId() {
        return $this->configs['accountid'];
    }

    public function getAdminServiceWSDL() {
        return $this->configs['wsdl']['admin'];
    }

    public function getCartServiceWSDL() {
        return $this->configs['wsdl']['cart'];
    }

    public function getInventoryServiceWSDL() {
        return $this->configs['wsdl']['inventory'];
    }

    public function getListingServiceWSDL() {
        return $this->configs['wsdl']['listing'];
    }

    public function getMarketplaceServiceWSDL() {
        return $this->configs['wsdl']['marketplace'];
    }

    public function getOrderServiceWSDL() {
        return $this->configs['wsdl']['order'];
    }

    public function getShippingServiceWSDL() {
        return $this->configs['wsdl']['shipping'];
    }

    public function getStoreServiceWSDL() {
        return $this->configs['wsdl']['store'];
    }

    public function getTaxServiceWSDL() {
        return $this->configs['wsdl']['tax'];
    }

    public function getConfigs() {
        return $this->configs;
    }

    public function getTemplating() {
        return $this->templating;
    }

    public function setConfigs($configs) {
        $this->configs = $configs;
        return $this;
    }

    public function setTemplating($templating) {
        $this->templating = $templating;
        return $this;
    }

}

?>