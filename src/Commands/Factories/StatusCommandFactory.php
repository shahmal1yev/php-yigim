<?php

namespace EasyPay\PHP\Yigim\Commands\Factories;

use EasyPay\PHP\Yigim\Abstracts\ResponseHandlerAbstract;
use EasyPay\PHP\Yigim\Commands\Attributers\StatusCommandAttributer;
use EasyPay\PHP\Yigim\Commands\EndpointProviders\StatusCommandEndpointProvider;
use EasyPay\PHP\Yigim\Commands\ResponseHandlers\StatusCommandResponseHandler;
use EasyPay\PHP\Yigim\Contracts\CommandAttributerContract;
use EasyPay\PHP\Yigim\Contracts\CommandEndpointProviderContract;
use EasyPay\PHP\Yigim\Contracts\CommandFactoryContract;

/**
 * Class StatusCommandFactory
 *
 * Factory for creating attributers, endpoint providers, and response handlers for the "status" command.
 *
 * @package EasyPay\PHP\Yigim\Commands\Factories
 */
class StatusCommandFactory implements CommandFactoryContract
{
    /**
     * Create an attributer instance for the "status" command.
     *
     * @return CommandAttributerContract The attributer instance.
     */
    public function createAttributer(): CommandAttributerContract
    {
        return new StatusCommandAttributer;
    }

    /**
     * Create an endpoint provider instance for the "status" command.
     *
     * @return CommandEndpointProviderContract The endpoint provider instance.
     */
    public function createProvider(): CommandEndpointProviderContract
    {
        return new StatusCommandEndpointProvider;
    }

    /**
     * Create a response handler instance for the "status" command.
     *
     * @return ResponseHandlerAbstract The response handler instance.
     */
    public function createResponseHandler(): ResponseHandlerAbstract
    {
        return new StatusCommandResponseHandler;
    }
}
