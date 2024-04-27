<?php

namespace Shahmal1yev\EasyPay\Yigim\Commands\Factories;

use Shahmal1yev\EasyPay\Yigim\Abstracts\ResponseHandlerAbstract;
use Shahmal1yev\EasyPay\Yigim\Commands\Attributers\DirectPaymentCommandAttributer;
use Shahmal1yev\EasyPay\Yigim\Commands\EndpointProviders\DirectPaymentCommandEndpointProvider;
use Shahmal1yev\EasyPay\Yigim\Commands\ResponseHandlers\DirectPaymentCommandResponseHandler;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttributerContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandEndpointProviderContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandFactoryContract;

class DirectPaymentCommandFactory implements CommandFactoryContract
{
    public function createResponseHandler(): ResponseHandlerAbstract
    {
        return new DirectPaymentCommandResponseHandler;
    }

    public function createProvider(): CommandEndpointProviderContract
    {
        return new DirectPaymentCommandEndpointProvider;
    }

    public function createAttributer(): CommandAttributerContract
    {
        return new DirectPaymentCommandAttributer;
    }
}