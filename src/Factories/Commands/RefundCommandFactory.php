<?php

namespace Shahmal1yev\EasyPay\Yigim\Factories\Commands;

use Shahmal1yev\EasyPay\Yigim\Abstracts\Commands\CommandFactoryAbstract;
use Shahmal1yev\EasyPay\Yigim\Commands\Attributers\RefundCommandAttributer;
use Shahmal1yev\EasyPay\Yigim\Enums\Endpoint;
use Shahmal1yev\EasyPay\Yigim\JsonResponseHandlers\Handlers\RefundJsonResponseHandler;
use Shahmal1yev\EasyPay\Yigim\Traits\Factories\DefaultBoot;

class RefundCommandFactory extends CommandFactoryAbstract
{
    use DefaultBoot;

    protected function getEndpoint(): Endpoint
    {
        return Endpoint::REFUND;
    }

    protected function getAttributerClass(): string
    {
        return RefundCommandAttributer::class;
    }

    protected function getJsonResponseHandlerClass(): string
    {
        return RefundJsonResponseHandler::class;
    }
}