<?php

namespace Shahmal1yev\EasyPay\Yigim\Commands\Factories;

use Shahmal1yev\EasyPay\Yigim\Abstracts\ResponseHandlerAbstract;
use Shahmal1yev\EasyPay\Yigim\Commands\Attributers\BatchCloseCommandAttributer;
use Shahmal1yev\EasyPay\Yigim\Commands\Attributers\CancellationCommandAttributer;
use Shahmal1yev\EasyPay\Yigim\Commands\EndpointProviders\BatchCloseCommandEndpointProvider;
use Shahmal1yev\EasyPay\Yigim\Commands\EndpointProviders\CancellationCommandEndpointProvider;
use Shahmal1yev\EasyPay\Yigim\Commands\ResponseHandlers\BatchCloseCommandResponseHandler;
use Shahmal1yev\EasyPay\Yigim\Commands\ResponseHandlers\CancellationCommandResponseHandler;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttributerContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandEndpointProviderContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandFactoryContract;

/**
 * Class BatchCloseCommandFactory
 *
 * Factory for creating attributers, endpoint providers, and response handlers for the "closing of batch" command.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Commands
 */
class BatchCloseCommandFactory implements CommandFactoryContract
{
    /**
     * Create an instance of the command attributer.
     *
     * @return CommandAttributerContract An instance of the command attributer.
     */
    public function createAttributer(): CommandAttributerContract
    {
        return new BatchCloseCommandAttributer();
    }

    /**
     * Create an instance of the command response handler.
     *
     * @return ResponseHandlerAbstract An instance of the command response handler.
     */
    public function createResponseHandler(): ResponseHandlerAbstract
    {
        return new BatchCloseCommandResponseHandler();
    }

    /**
     * Create an instance of the command endpoint provider.
     *
     * @return CommandEndpointProviderContract An instance of the command endpoint provider.
     */
    public function createProvider(): CommandEndpointProviderContract
    {
        return new BatchCloseCommandEndpointProvider();
    }
}
