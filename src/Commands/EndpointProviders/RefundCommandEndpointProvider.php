<?php

namespace EasyPay\PHP\Yigim\Commands\EndpointProviders;

use EasyPay\PHP\Yigim\Contracts\CommandEndpointProviderContract;
use EasyPay\PHP\Yigim\Enums\Endpoint;

/**
 * Class RefundCommandEndpointProvider
 *
 * Endpoint provider implementation for the "payment refund" command in the Yigim payment system.
 *
 * @package EasyPay\PHP\Yigim\EndpointProviders
 */
class RefundCommandEndpointProvider implements CommandEndpointProviderContract
{
    public function getEndpoint(): string
    {
        return Endpoint::REFUND->value;
    }
}