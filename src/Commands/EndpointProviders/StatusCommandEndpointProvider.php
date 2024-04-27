<?php

namespace Shahmal1yev\EasyPay\Yigim\Commands\EndpointProviders;

use Shahmal1yev\EasyPay\Yigim\Contracts\CommandEndpointProviderContract;
use Shahmal1yev\EasyPay\Yigim\Enums\Endpoint;

/**
 * Class StatusCommandEndpointProvider
 *
 * Provides the endpoint for the "status" command.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Commands\EndpointProviders
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
