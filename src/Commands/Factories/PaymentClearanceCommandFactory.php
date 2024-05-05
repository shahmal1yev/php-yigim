<?php

namespace EasyPay\PHP\Yigim\Commands\Factories;

use EasyPay\PHP\Yigim\Abstracts\ResponseHandlerAbstract;
use EasyPay\PHP\Yigim\Commands\Attributers\PaymentClearanceCommandAttributer;
use EasyPay\PHP\Yigim\Commands\EndpointProviders\PaymentClearanceCommandEndpointProvider;
use EasyPay\PHP\Yigim\Commands\ResponseHandlers\PaymentClearanceCommandResponseHandler;
use EasyPay\PHP\Yigim\Contracts\CommandAttributerContract;
use EasyPay\PHP\Yigim\Contracts\CommandEndpointProviderContract;
use EasyPay\PHP\Yigim\Contracts\CommandFactoryContract;

/**
 * Class PaymentClearanceCommandFactory
 *
 * Factory for creating attributers, endpoint providers, and response handlers for the "payment clearance" command.
 *
 * @package EasyPay\PHP\Yigim\Commands\Factories
 */
class PaymentClearanceCommandFactory implements CommandFactoryContract
{
    /**
     * Create an attributer instance for the "payment clearance" command.
     *
     * @return CommandAttributerContract The attributer instance.
     */
    public function createAttributer(): CommandAttributerContract
    {
        return new PaymentClearanceCommandAttributer;
    }

    /**
     * Create an endpoint provider instance for the "payment clearance" command.
     *
     * @return CommandEndpointProviderContract The endpoint provider instance.
     */
    public function createProvider(): CommandEndpointProviderContract
    {
        return new PaymentClearanceCommandEndpointProvider;
    }

    /**
     * Create a response handler instance for the "payment clearance" command.
     *
     * @return ResponseHandlerAbstract The response handler instance.
     */
    public function createResponseHandler(): ResponseHandlerAbstract
    {
        return new PaymentClearanceCommandResponseHandler;
    }
}