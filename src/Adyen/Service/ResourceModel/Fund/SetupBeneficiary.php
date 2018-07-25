<?php

namespace Adyen\Service\ResourceModel\Fund;

class SetupBeneficiary extends \Adyen\Service\AbstractResource
{
    protected $_requiredFields = array(
        'accountHolderCode',
    );

    protected $_endpoint;

    public function __construct($service)
    {
        $this->_endpoint = $service->getClient()->getConfig()->get('endpointFund') . '/cal/services/Account/' . $service->getClient()->getApiFundVersion() . '/setupBeneficiary';

        parent::__construct($service, $this->_endpoint, $this->_requiredFields);
    }

}