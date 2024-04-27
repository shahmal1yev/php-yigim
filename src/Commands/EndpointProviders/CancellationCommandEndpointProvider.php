<?php

namespace Shahmal1yev\EasyPay\Yigim\Commands\EndpointProviders;

use Shahmal1yev\EasyPay\Yigim\Contracts\CommandEndpointProviderContract;
use Shahmal1yev\EasyPay\Yigim\Enums\Endpoint;

/**
 * Class CancellationCommandEndpointProvider
 *
 * Endpoint provider implementation for the "payment cancellation" command in the Yigim payment system.
 *
 * @package Shahmal1yev\EasyPay\Yigim\EndpointProviders
 */
class CancellationCommandEndpointProvider implements CommandEndpointProviderContract
{
    public function getEndpoint(): string
    {
        return Endpoint::CANCELLATION->value;
    }
}