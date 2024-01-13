<?php

namespace Shahmal1yev\EasyPay\Yigim\Factories\Commands;

use Shahmal1yev\EasyPay\Yigim\Abstracts\Commands\CommandFactoryAbstract;
use Shahmal1yev\EasyPay\Yigim\Core\CommandAttributers\RefundCommandAttributer;
use Shahmal1yev\EasyPay\Yigim\Core\JsonResponseHandlers\RefundJsonResponseHandler;
use Shahmal1yev\EasyPay\Yigim\Enums\CommandEndpointEnum;
use Shahmal1yev\EasyPay\Yigim\Traits\Factories\DefaultBoot;

class RefundCommandFactory extends CommandFactoryAbstract
{
    use DefaultBoot;

    protected function getEndpoint(): CommandEndpointEnum
    {
        return CommandEndpointEnum::REFUND;
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