<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts;

use Shahmal1yev\EasyPay\Yigim\Abstracts\ResponseHandlerAbstract;

/**
 * CommandFactoryContract interface.
 *
 * Represents a factory for creating command-related objects such as attributers, response handlers, and providers.
 */
interface CommandFactoryContract
{
    /**
     * Create an instance of the command attributer.
     *
     * @return CommandAttributerContract An instance of the command attributer.
     */
    public function createAttributer(): CommandAttributerContract;

    /**
     * Create an instance of the response handler.
     *
     * @return ResponseHandlerAbstract An instance of the response handler.
     */
    public function createResponseHandler(): ResponseHandlerAbstract;

    /**
     * Create an instance of the command provider.
     *
     * @return CommandEndpointProviderContract An instance of the command provider.
     */
    public function createProvider(): CommandEndpointProviderContract;
}
