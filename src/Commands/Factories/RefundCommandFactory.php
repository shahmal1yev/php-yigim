<?php

namespace Shahmal1yev\EasyPay\Yigim\Commands\Factories;

use Shahmal1yev\EasyPay\Yigim\Abstracts\ResponseHandlerAbstract;
use Shahmal1yev\EasyPay\Yigim\Commands\Attributers\CancellationCommandAttributer;
use Shahmal1yev\EasyPay\Yigim\Commands\Attributers\RefundCommandAttributer;
use Shahmal1yev\EasyPay\Yigim\Commands\EndpointProviders\CancellationCommandEndpointProvider;
use Shahmal1yev\EasyPay\Yigim\Commands\EndpointProviders\RefundCommandEndpointProvider;
use Shahmal1yev\EasyPay\Yigim\Commands\ResponseHandlers\CancellationCommandResponseHandler;
use Shahmal1yev\EasyPay\Yigim\Commands\ResponseHandlers\RefundCommandResponseHandler;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttributerContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandEndpointProviderContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandFactoryContract;

/**
 * Class RefundCommandFactory
 *
 * Factory class responsible for creating instances of attributes, response handlers, and providers
 * for the initialization command in the Yigim payment system.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Commands
 */
class RefundCommandFactory implements CommandFactoryContract
{
    /**
     * Create an instance of the command attributer.
     *
     * @return CommandAttributerContract An instance of the command attributer.
     */
    public function createAttributer(): CommandAttributerContract
    {
        return new RefundCommandAttributer();
    }

    /**
     * Create an instance of the command response handler.
     *
     * @return ResponseHandlerAbstract An instance of the command response handler.
     */
    public function createResponseHandler(): ResponseHandlerAbstract
    {
        return new RefundCommandResponseHandler();
    }

    /**
     * Create an instance of the command endpoint provider.
     *
     * @return CommandEndpointProviderContract An instance of the command endpoint provider.
     */
    public function createProvider(): CommandEndpointProviderContract
    {
        return new RefundCommandEndpointProvider();
    }
}
