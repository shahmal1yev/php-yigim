<?php

namespace Shahmal1yev\EasyPay\Yigim\Commands\EndpointProviders;

use Shahmal1yev\EasyPay\Yigim\Contracts\CommandEndpointProviderContract;
use Shahmal1yev\EasyPay\Yigim\Enums\Endpoint;

/**
 * Class DirectPaymentCommandEndpointProvider
 *
 * Endpoint provider implementation for the "direct payment" command in the Yigim payment system.
 *
 * @package Shahmal1yev\EasyPay\Yigim\EndpointProviders
 */
class DirectPaymentCommandEndpointProvider implements CommandEndpointProviderContract
{
    public function getEndpoint(): string
    {
        return Endpoint::DIRECT_PAYMENT->value;
    }
}