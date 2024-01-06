<?php

namespace Shahmal1yev\EasyPay\Yigim\Factories\Commands;

use Shahmal1yev\EasyPay\Yigim\Abstracts\Commands\CommandFactoryAbstract;
use Shahmal1yev\EasyPay\Yigim\Core\CommandAttributers\CancellationCommandAttributer;
use Shahmal1yev\EasyPay\Yigim\Core\JsonResponseHandlers\CancellationJsonResponseHandler;
use Shahmal1yev\EasyPay\Yigim\Enums\CommandEndpointEnum;

class CancellationCommandFactory extends CommandFactoryAbstract
{
    protected function boot(): void
    {
        $this->executor->setAttribute()->setXMerchant($this->config['xMerchant']);
        $this->executor->setAttribute()->setXSignature($this->config['xSignature']);
        $this->executor->setAttribute()->setXType($this->config['xType']);
    }

    protected function getEndpoint(): CommandEndpointEnum
    {
        return CommandEndpointEnum::CANCELLATION;
    }

    protected function getAttributerClass(): string
    {
        return CancellationCommandAttributer::class;
    }

    protected function getJsonResponseHandlerClass(): string
    {
        return CancellationJsonResponseHandler::class;
    }
}