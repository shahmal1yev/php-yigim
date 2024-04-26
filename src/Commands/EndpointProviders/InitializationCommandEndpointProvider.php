<?php

namespace Shahmal1yev\EasyPay\Yigim\Commands\EndpointProviders;

use Shahmal1yev\EasyPay\Yigim\Contracts\CommandEndpointProviderContract;
use Shahmal1yev\EasyPay\Yigim\Enums\Endpoint;

/**
 * Class InitializationCommandEndpointProvider
 *
 * Endpoint provider implementation for the initialization command in the Yigim payment system.
 *
 * @package Shahmal1yev\EasyPay\Yigim\EndpointProviders
 */
class InitializationCommandEndpointProvider implements CommandEndpointProviderContract
{
    /**
     * Get the endpoint URL for the initialization command.
     *
     * @return string The endpoint URL for the initialization command.
     */
    public function getEndpoint(): string
    {
        return Endpoint::INITIALIZATION->value;
    }
}
