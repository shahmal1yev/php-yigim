<?php

namespace Shahmal1yev\EasyPay\Yigim\Commands\Factories;

use Shahmal1yev\EasyPay\Yigim\Abstracts\ResponseHandlerAbstract;
use Shahmal1yev\EasyPay\Yigim\Commands\Attributers\PaymentClearanceCommandAttributer;
use Shahmal1yev\EasyPay\Yigim\Commands\EndpointProviders\PaymentClearanceCommandEndpointProvider;
use Shahmal1yev\EasyPay\Yigim\Commands\ResponseHandlers\PaymentClearanceCommandResponseHandler;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttributerContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandEndpointProviderContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandFactoryContract;

/**
 * Class PaymentClearanceCommandFactory
 *
 * Factory for creating attributers, endpoint providers, and response handlers for the "payment clearance" command.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Commands\Factories
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