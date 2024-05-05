<?php

namespace EasyPay\PHP\Yigim\Commands\EndpointProviders;

use EasyPay\PHP\Yigim\Contracts\CommandEndpointProviderContract;
use EasyPay\PHP\Yigim\Enums\Endpoint;

/**
 * Class StatusCommandEndpointProvider
 *
 * Provides the endpoint for the "status" command.
 *
 * @package EasyPay\PHP\Yigim\Commands\EndpointProviders
 */
class StatusCommandEndpointProvider implements CommandEndpointProviderContract
{
    /**
     * Get the endpoint for the "status" command.
     *
     * @return string The endpoint URL.
     */
    public function getEndpoint(): string
    {
        return Endpoint::STATUS->value;
    }
}
