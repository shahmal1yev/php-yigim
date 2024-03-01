<?php

namespace Shahmal1yev\EasyPay\Yigim\Factories\Commands;

use Shahmal1yev\EasyPay\Yigim\Abstracts\Commands\CommandFactoryAbstract;
use Shahmal1yev\EasyPay\Yigim\Commands\Attributers\InitializationCommandAttributer;
use Shahmal1yev\EasyPay\Yigim\Enums\Endpoint;
use Shahmal1yev\EasyPay\Yigim\JsonResponseHandlers\Handlers\InitializationJsonResponseHandler;
use Shahmal1yev\EasyPay\Yigim\Traits\Factories\DefaultBoot;

class InitializationCommandFactory extends CommandFactoryAbstract
{
    use DefaultBoot;

    protected function getEndpoint(): Endpoint
    {
        return Endpoint::INITIALIZATION;
    }

    protected function getAttributerClass(): string
    {
        return InitializationCommandAttributer::class;
    }

    protected function getJsonResponseHandlerClass(): string
    {
        return InitializationJsonResponseHandler::class;
    }
}