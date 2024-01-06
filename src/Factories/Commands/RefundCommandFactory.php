<?php

namespace Shahmal1yev\EasyPay\Yigim\Factories\Commands;

use Shahmal1yev\EasyPay\Yigim\Abstracts\Commands\CommandFactoryAbstract;
use Shahmal1yev\EasyPay\Yigim\Core\CommandAttributers\RefundCommandAttributer;
use Shahmal1yev\EasyPay\Yigim\Core\JsonResponseHandlers\RefundJsonResponseHandler;
use Shahmal1yev\EasyPay\Yigim\Enums\CommandEndpointEnum;

class RefundCommandFactory extends CommandFactoryAbstract
{
    protected function boot(): void
    {
        $this->executor->setAttribute()->setXMerchant($this->config['xMerchant']);
        $this->executor->setAttribute()->setXSignature($this->config['xSignature']);
        $this->executor->setAttribute()->setXType($this->config['xType']);
    }

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