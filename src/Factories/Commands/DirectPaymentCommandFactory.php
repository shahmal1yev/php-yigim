<?php

namespace Shahmal1yev\EasyPay\Yigim\Factories\Commands;

use Shahmal1yev\EasyPay\Yigim\Abstracts\Commands\CommandFactoryAbstract;
use Shahmal1yev\EasyPay\Yigim\Core\CommandAttributers\DirectPaymentCommandAttributer;
use Shahmal1yev\EasyPay\Yigim\Core\JsonResponseHandlers\DirectPaymentJsonResponseHandler;
use Shahmal1yev\EasyPay\Yigim\Enums\CommandEndpointEnum;
use Shahmal1yev\EasyPay\Yigim\Traits\Factories\DefaultBoot;

class DirectPaymentCommandFactory extends CommandFactoryAbstract
{
    use DefaultBoot;

    protected function getEndpoint(): CommandEndpointEnum
    {
        return CommandEndpointEnum::DIRECT_PAYMENT;
    }

    protected function getAttributerClass(): string
    {
        return DirectPaymentCommandAttributer::class;
    }

    protected function getJsonResponseHandlerClass(): string
    {
        return DirectPaymentJsonResponseHandler::class;
    }
}