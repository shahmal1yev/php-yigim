<?php

namespace Shahmal1yev\EasyPay\Yigim\Factories\Commands;

use Shahmal1yev\EasyPay\Yigim\Abstracts\Commands\CommandFactoryAbstract;
use Shahmal1yev\EasyPay\Yigim\Core\CommandAttributers\StatusCommandAttributer;
use Shahmal1yev\EasyPay\Yigim\Core\JsonResponseHandlers\StatusJsonResponseHandler;
use Shahmal1yev\EasyPay\Yigim\Enums\CommandEndpointEnum;
use Shahmal1yev\EasyPay\Yigim\Traits\Factories\DefaultBoot;

class StatusCommandFactory extends CommandFactoryAbstract
{
    use DefaultBoot;

    protected function getEndpoint(): CommandEndpointEnum
    {
        return CommandEndpointEnum::STATUS;
    }

    protected function getAttributerClass(): string
    {
        return StatusCommandAttributer::class;
    }

    protected function getJsonResponseHandlerClass(): string
    {
        return StatusJsonResponseHandler::class;
    }
}