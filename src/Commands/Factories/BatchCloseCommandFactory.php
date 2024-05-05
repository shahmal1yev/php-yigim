<?php

namespace EasyPay\PHP\Yigim\Commands\Factories;

use EasyPay\PHP\Yigim\Abstracts\ResponseHandlerAbstract;
use EasyPay\PHP\Yigim\Commands\Attributers\BatchCloseCommandAttributer;
use EasyPay\PHP\Yigim\Commands\Attributers\CancellationCommandAttributer;
use EasyPay\PHP\Yigim\Commands\EndpointProviders\BatchCloseCommandEndpointProvider;
use EasyPay\PHP\Yigim\Commands\EndpointProviders\CancellationCommandEndpointProvider;
use EasyPay\PHP\Yigim\Commands\ResponseHandlers\BatchCloseCommandResponseHandler;
use EasyPay\PHP\Yigim\Commands\ResponseHandlers\CancellationCommandResponseHandler;
use EasyPay\PHP\Yigim\Contracts\CommandAttributerContract;
use EasyPay\PHP\Yigim\Contracts\CommandEndpointProviderContract;
use EasyPay\PHP\Yigim\Contracts\CommandFactoryContract;

/**
 * Class BatchCloseCommandFactory
 *
 * Factory for creating attributers, endpoint providers, and response handlers for the "closing of batch" command.
 *
 * @package EasyPay\PHP\Yigim\Commands
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
