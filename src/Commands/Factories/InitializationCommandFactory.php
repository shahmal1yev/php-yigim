<?php

namespace Shahmal1yev\EasyPay\Yigim\Commands\Factories;

use Shahmal1yev\EasyPay\Yigim\Commands\Attributers\InitializationCommandAttributer;
use Shahmal1yev\EasyPay\Yigim\Commands\EndpointProviders\InitializationCommandEndpointProvider;
use Shahmal1yev\EasyPay\Yigim\Commands\ResponseHandlers\InitializationCommandResponseHandler;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttributerContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandEndpointProviderContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandFactoryContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandResponseHandlerContract;

/**
 * Class InitializationCommandFactory
 *
 * Factory class responsible for creating instances of attributes, response handlers, and providers
 * for the initialization command in the Yigim payment system.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Commands
 */
class InitializationCommandFactory implements CommandFactoryContract
{
    /**
     * Create an instance of the command attributer.
     *
     * @return CommandAttributerContract An instance of the command attributer.
     */
    public function createAttributer(): CommandAttributerContract
    {
        return new InitializationCommandAttributer();
    }

    /**
     * Create an instance of the command response handler.
     *
     * @return CommandResponseHandlerContract An instance of the command response handler.
     */
    public function createResponseHandler(): CommandResponseHandlerContract
    {
        return new InitializationCommandResponseHandler();
    }

    /**
     * Create an instance of the command endpoint provider.
     *
     * @return CommandEndpointProviderContract An instance of the command endpoint provider.
     */
    public function createProvider(): CommandEndpointProviderContract
    {
        return new InitializationCommandEndpointProvider();
    }
}
