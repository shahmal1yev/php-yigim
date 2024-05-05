<?php

namespace EasyPay\PHP\Yigim\Commands\Factories;

use EasyPay\PHP\Yigim\Abstracts\ResponseHandlerAbstract;
use EasyPay\PHP\Yigim\Commands\Attributers\DirectPaymentCommandAttributer;
use EasyPay\PHP\Yigim\Commands\EndpointProviders\DirectPaymentCommandEndpointProvider;
use EasyPay\PHP\Yigim\Commands\ResponseHandlers\DirectPaymentCommandResponseHandler;
use EasyPay\PHP\Yigim\Contracts\CommandAttributerContract;
use EasyPay\PHP\Yigim\Contracts\CommandEndpointProviderContract;
use EasyPay\PHP\Yigim\Contracts\CommandFactoryContract;

/**
 * Class DirectPaymentCommandFactory
 *
 * Factory for creating attributers, endpoint providers, and response handlers for the "direct payment" command.
 *
 * @package EasyPay\PHP\Yigim\Commands\Factories
 */
class DirectPaymentCommandFactory implements CommandFactoryContract
{
    /**
     * Create a response handler instance for the "direct payment" command.
     *
     * @return ResponseHandlerAbstract The response handler instance.
     */
    public function createResponseHandler(): ResponseHandlerAbstract
    {
        return new DirectPaymentCommandResponseHandler;
    }

    /**
     * Create an endpoint provider instance for the "direct payment" command.
     *
     * @return CommandEndpointProviderContract The endpoint provider instance.
     */
    public function createProvider(): CommandEndpointProviderContract
    {
        return new DirectPaymentCommandEndpointProvider;
    }

    /**
     * Create an attributer instance for the "direct payment" command.
     *
     * @return CommandAttributerContract The attributer instance.
     */
    public function createAttributer(): CommandAttributerContract
    {
        return new DirectPaymentCommandAttributer;
    }
}