<?php

namespace Shahmal1yev\EasyPay\Yigim\Factories\Commands;

use Shahmal1yev\EasyPay\Yigim\Abstracts\Commands\CommandFactoryAbstract;
use Shahmal1yev\EasyPay\Yigim\Commands\Attributers\DirectPaymentCommandAttributer;
use Shahmal1yev\EasyPay\Yigim\Enums\Endpoint;
use Shahmal1yev\EasyPay\Yigim\JsonResponseHandlers\Handlers\DirectPaymentJsonResponseHandler;
use Shahmal1yev\EasyPay\Yigim\Traits\Factories\DefaultBoot;

class DirectPaymentCommandFactory extends CommandFactoryAbstract
{
    use DefaultBoot;

    protected function getEndpoint(): Endpoint
    {
        return Endpoint::DIRECT_PAYMENT;
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