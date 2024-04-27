<?php

namespace Shahmal1yev\EasyPay\Yigim\Commands\EndpointProviders;

use Shahmal1yev\EasyPay\Yigim\Contracts\CommandEndpointProviderContract;
use Shahmal1yev\EasyPay\Yigim\Enums\Endpoint;

/**
 * Class BatchCloseCommandEndpointProvider
 *
 * Endpoint provider implementation for the "closing of batch" command in the Yigim payment system.
 *
 * @package Shahmal1yev\EasyPay\Yigim\EndpointProviders
 */
class BatchCloseCommandEndpointProvider implements CommandEndpointProviderContract
{
    /**
     * Get the endpoint URL for the batch closure command.
     *
     * @return string The endpoint URL for the initialization command.
     */
    public function getEndpoint(): string
    {
        return Endpoint::BATCH_CLOSE->value;
    }
}