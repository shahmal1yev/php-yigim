<?php

namespace EasyPay\PHP\Yigim\Commands\EndpointProviders;

use EasyPay\PHP\Yigim\Contracts\CommandEndpointProviderContract;
use EasyPay\PHP\Yigim\Enums\Endpoint;

/**
 * Class PaymentClearanceCommandEndpointProvider
 *
 * Endpoint provider implementation for the "payment clearance" command in the Yigim payment system.
 *
 * @package EasyPay\PHP\Yigim\EndpointProviders
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