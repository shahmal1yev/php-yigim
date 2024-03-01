<?php

namespace Shahmal1yev\EasyPay\Yigim\Factories\Commands;

use Shahmal1yev\EasyPay\Yigim\Abstracts\Commands\CommandFactoryAbstract;
use Shahmal1yev\EasyPay\Yigim\Commands\Attributers\StatusCommandAttributer;
use Shahmal1yev\EasyPay\Yigim\Enums\Endpoint;
use Shahmal1yev\EasyPay\Yigim\JsonResponseHandlers\Handlers\StatusJsonResponseHandler;
use Shahmal1yev\EasyPay\Yigim\Traits\Factories\DefaultBoot;

class StatusCommandFactory extends CommandFactoryAbstract
{
    use DefaultBoot;

    protected function getEndpoint(): Endpoint
    {
        return Endpoint::STATUS;
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