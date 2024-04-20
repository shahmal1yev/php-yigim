<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts;

interface CommandFactoryContract
{
    public function createAttributer(): CommandAttributerContract;
    public function createResponseHandler(): CommandResponseHandlerContract;
    public function createProvider(): CommandEndpointProviderContract;
}