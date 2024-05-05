<?php

namespace EasyPay\PHP\Yigim\Commands\EndpointProviders;

use EasyPay\PHP\Yigim\Contracts\CommandEndpointProviderContract;
use EasyPay\PHP\Yigim\Enums\Endpoint;

/**
 * Class DirectPaymentCommandEndpointProvider
 *
 * Endpoint provider implementation for the "direct payment" command in the Yigim payment system.
 *
 * @package EasyPay\PHP\Yigim\EndpointProviders
 */
class DirectPaymentCommandEndpointProvider implements CommandEndpointProviderContract
{
    public function getEndpoint(): string
    {
        return Endpoint::DIRECT_PAYMENT->value;
    }
}