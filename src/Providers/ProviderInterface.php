<?php

namespace Payment\Gateways\Providers;

use Payment\Gateways\ValueObjects\PaymentNeeds;
use Payment\Gateways\ValueObjects\PaymentRequestNeeds;
use Payment\Gateways\ValueObjects\PaymentRequestResponse;
use Payment\Gateways\ValueObjects\PaymentVerifyResponse;
use Symfony\Component\HttpFoundation\Request;

interface ProviderInterface
{
    /**
     * @return string
     */
    public function getName();
    
    /**
     * @param PaymentRequestNeeds $needs
     * @return PaymentRequestResponse
     */
    public function callPaymentRequest(PaymentRequestNeeds $needs);

    /**
     * @param PaymentNeeds $needs
     * @param Request $request
     * @return PaymentVerifyResponse
     */
    public function callVerifyRequest(PaymentNeeds $needs, Request $request = null);
    
}