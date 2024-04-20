<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts;

use Shahmal1yev\EasyPay\Yigim\Enums\Endpoint;

/**
 * Interface CommandEndpointProviderContract
 *
 * Interface for providing the endpoint URL for a command in the Yigim payment system.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Contracts
 */
interface CommandEndpointProviderContract
{
    /**
     * Get the endpoint URL for the command.
     *
     * @return Endpoint The endpoint URL for the command.
     */
    public function getEndpoint(): Endpoint;
}
