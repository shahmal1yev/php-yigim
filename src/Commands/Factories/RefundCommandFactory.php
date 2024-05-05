<?php

namespace EasyPay\PHP\Yigim\Commands\Factories;

use EasyPay\PHP\Yigim\Abstracts\ResponseHandlerAbstract;
use EasyPay\PHP\Yigim\Commands\Attributers\CancellationCommandAttributer;
use EasyPay\PHP\Yigim\Commands\Attributers\RefundCommandAttributer;
use EasyPay\PHP\Yigim\Commands\EndpointProviders\CancellationCommandEndpointProvider;
use EasyPay\PHP\Yigim\Commands\EndpointProviders\RefundCommandEndpointProvider;
use EasyPay\PHP\Yigim\Commands\ResponseHandlers\CancellationCommandResponseHandler;
use EasyPay\PHP\Yigim\Commands\ResponseHandlers\RefundCommandResponseHandler;
use EasyPay\PHP\Yigim\Contracts\CommandAttributerContract;
use EasyPay\PHP\Yigim\Contracts\CommandEndpointProviderContract;
use EasyPay\PHP\Yigim\Contracts\CommandFactoryContract;

/**
 * Class RefundCommandFactory
 *
 * Factory class responsible for creating instances of attributes, response handlers, and providers
 * for the initialization command in the Yigim payment system.
 *
 * @package EasyPay\PHP\Yigim\Commands
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
