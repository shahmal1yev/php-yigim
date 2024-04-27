<?php

namespace Shahmal1yev\EasyPay\Yigim\Commands\EndpointProviders;

use Shahmal1yev\EasyPay\Yigim\Contracts\CommandEndpointProviderContract;
use Shahmal1yev\EasyPay\Yigim\Enums\Endpoint;

/**
 * Class PaymentClearanceCommandEndpointProvider
 *
 * Endpoint provider implementation for the "payment clearance" command in the Yigim payment system.
 *
 * @package Shahmal1yev\EasyPay\Yigim\EndpointProviders
 */
class PaymentClearanceCommandEndpointProvider implements CommandEndpointProviderContract
{
    /**
     * Get the endpoint URL for the "payment clearance" command.
     *
     * @return string The endpoint URL for the "payment clearance" command.
     */
    public function getEndpoint(): string
    {
        return Endpoint::CLEARANCE->value;
    }
}