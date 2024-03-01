<?php

namespace Shahmal1yev\EasyPay\Yigim\Factories\Commands;

use Shahmal1yev\EasyPay\Yigim\Abstracts\Commands\CommandFactoryAbstract;
use Shahmal1yev\EasyPay\Yigim\Commands\Attributers\ClearanceCommandAttributer;
use Shahmal1yev\EasyPay\Yigim\Enums\CommandEndpointEnum;
use Shahmal1yev\EasyPay\Yigim\JsonResponseHandlers\Handlers\ClearanceJsonResponseHandler;
use Shahmal1yev\EasyPay\Yigim\Traits\Factories\DefaultBoot;

class ClearanceCommandFactory extends CommandFactoryAbstract
{
    use DefaultBoot;

    protected function getEndpoint(): CommandEndpointEnum
    {
        return CommandEndpointEnum::CLEARANCE;
    }

    protected function getAttributerClass(): string
    {
        return ClearanceCommandAttributer::class;
    }

    protected function getJsonResponseHandlerClass(): string
    {
        return ClearanceJsonResponseHandler::class;
    }
}