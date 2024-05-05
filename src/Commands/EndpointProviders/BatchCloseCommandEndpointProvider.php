<?php

namespace EasyPay\PHP\Yigim\Commands\EndpointProviders;

use EasyPay\PHP\Yigim\Contracts\CommandEndpointProviderContract;
use EasyPay\PHP\Yigim\Enums\Endpoint;

/**
 * Class BatchCloseCommandEndpointProvider
 *
 * Endpoint provider implementation for the "closing of batch" command in the Yigim payment system.
 *
 * @package EasyPay\PHP\Yigim\EndpointProviders
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