<?php

namespace EasyPay\PHP\Yigim\Commands\EndpointProviders;

use EasyPay\PHP\Yigim\Contracts\CommandEndpointProviderContract;
use EasyPay\PHP\Yigim\Enums\Endpoint;

/**
 * Class InitializationCommandEndpointProvider
 *
 * Endpoint provider implementation for the initialization command in the Yigim payment system.
 *
 * @package EasyPay\PHP\Yigim\EndpointProviders
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
