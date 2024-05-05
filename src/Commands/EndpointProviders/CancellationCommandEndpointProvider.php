<?php

namespace EasyPay\PHP\Yigim\Commands\EndpointProviders;

use EasyPay\PHP\Yigim\Contracts\CommandEndpointProviderContract;
use EasyPay\PHP\Yigim\Enums\Endpoint;

/**
 * Class CancellationCommandEndpointProvider
 *
 * Endpoint provider implementation for the "payment cancellation" command in the Yigim payment system.
 *
 * @package EasyPay\PHP\Yigim\EndpointProviders
 */
class CancellationCommandEndpointProvider implements CommandEndpointProviderContract
{
    public function getEndpoint(): string
    {
        return Endpoint::CANCELLATION->value;
    }
}