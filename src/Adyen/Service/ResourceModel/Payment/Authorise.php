<?php

namespace Adyen\Service\ResourceModel\Payment;

class Authorise extends \Adyen\Service\AbstractResource
{
    protected $_endpoint;

    public function __construct($service)
    {
        $this->_endpoint = $service->getClient()->getConfig()->get('endpoint') . '/pal/servlet/Payment/' . $service->getClient()->getApiVersion() . '/authorise';
        parent::__construct($service, $this->_endpoint);
    }

}