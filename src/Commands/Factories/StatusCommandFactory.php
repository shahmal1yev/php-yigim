<?php

namespace Shahmal1yev\EasyPay\Yigim\Commands\Factories;

use Shahmal1yev\EasyPay\Yigim\Abstracts\ResponseHandlerAbstract;
use Shahmal1yev\EasyPay\Yigim\Commands\Attributers\StatusCommandAttributer;
use Shahmal1yev\EasyPay\Yigim\Commands\EndpointProviders\StatusCommandEndpointProvider;
use Shahmal1yev\EasyPay\Yigim\Commands\ResponseHandlers\StatusCommandResponseHandler;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttributerContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandEndpointProviderContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandFactoryContract;

/**
 * Class StatusCommandFactory
 *
 * Factory for creating attributers, endpoint providers, and response handlers for the "status" command.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Commands\Factories
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
