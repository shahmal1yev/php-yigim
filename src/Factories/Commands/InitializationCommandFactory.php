<?php

namespace Shahmal1yev\EasyPay\Yigim\Factories\Commands;

use Shahmal1yev\EasyPay\Yigim\Abstracts\Commands\CommandFactoryAbstract;
use Shahmal1yev\EasyPay\Yigim\Core\CommandAttributers\InitializationCommandAttributer;
use Shahmal1yev\EasyPay\Yigim\Core\JsonResponseHandlers\InitializationJsonResponseHandler;
use Shahmal1yev\EasyPay\Yigim\Enums\CommandEndpointEnum;
use Shahmal1yev\EasyPay\Yigim\Traits\Factories\DefaultBoot;

class InitializationCommandFactory extends CommandFactoryAbstract
{
    use DefaultBoot;

    protected function getEndpoint(): CommandEndpointEnum
    {
        return CommandEndpointEnum::INITIALIZATION;
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