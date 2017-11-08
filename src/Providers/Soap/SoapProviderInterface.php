<?php

namespace Payment\Gateways\Providers\Soap;

use Payment\Gateways\Providers\ProviderInterface;

interface SoapProviderInterface extends ProviderInterface
{
    /**
     * Get wsdl endpoint
     *
     * @return string
     */
    public function getWsdl();
    
}