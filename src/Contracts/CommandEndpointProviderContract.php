<?php

namespace EasyPay\PHP\Yigim\Contracts;

use EasyPay\PHP\Yigim\Enums\Endpoint;

/**
 * Interface CommandEndpointProviderContract
 *
 * Interface for providing the endpoint URL for a command in the Yigim payment system.
 *
 * @package EasyPay\PHP\Yigim\Contracts
 */
interface CommandEndpointProviderContract
{
    /**
     * Get the endpoint URL for the command.
     *
     * @return string The endpoint URL for the command.
     */
    public function getEndpoint(): string;
}
