<?php

namespace Shahmal1yev\EasyPay\Yigim\Commands\Factories;

use Shahmal1yev\EasyPay\Yigim\Abstracts\ResponseHandlerAbstract;
use Shahmal1yev\EasyPay\Yigim\Commands\Attributers\DirectPaymentCommandAttributer;
use Shahmal1yev\EasyPay\Yigim\Commands\EndpointProviders\DirectPaymentCommandEndpointProvider;
use Shahmal1yev\EasyPay\Yigim\Commands\ResponseHandlers\DirectPaymentCommandResponseHandler;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttributerContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandEndpointProviderContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandFactoryContract;

/**
 * Class DirectPaymentCommandFactory
 *
 * Factory for creating attributers, endpoint providers, and response handlers for the "direct payment" command.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Commands\Factories
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