<?php

namespace Shahmal1yev\EasyPay\Yigim\Abstracts\Commands;

use InvalidArgumentException;
use Shahmal1yev\EasyPay\Yigim\Contracts\AuthCredentials\AuthCredentialsContract;
use Shahmal1yev\EasyPay\Yigim\Enums\CommandEndpointEnum;
use Shahmal1yev\EasyPay\Yigim\Executors\CommandExecutor;

abstract class CommandFactoryAbstract
{
    protected CommandExecutor $executor;
    protected array $config;

    public function make(AuthCredentialsContract|string $credentials, string $xSignature = null, string $xType = null): CommandExecutor
    {
        $this->config = $this->prepareConfig($credentials, $xSignature, $xType);

        $this->executor = new CommandExecutor(
            $this->getEndpoint(),
            $this->getAttributerClass(),
            $this->getJsonResponseHandlerClass()
        );

        $this->boot();

        return $this->executor;
    }

    protected function prepareConfig(AuthCredentialsContract|string $credentials, string $xSignature = null, string $xType = null): array
    {
        if ($credentials instanceof AuthCredentialsContract)
        {
            return [
                'xMerchant' => $credentials->getXMerchant(),
                'xSignature' => $credentials->getXSignature(),
                'xType' => $credentials->getXType(),
            ];
        }

        if (!$xSignature)
        {
            throw new InvalidArgumentException('`$xSignature`: cannot be null for this situation');
        }

        if (!$xType)
        {
            throw new InvalidArgumentException('`$xType`: cannot be null for this situation');
        }

        return [
            'xMerchant' => $credentials,
            'xSignature' => $xSignature,
            'xType' => $xType,
        ];
    }

    abstract protected function boot(): void;

    abstract protected function getEndpoint(): CommandEndpointEnum;

    abstract protected function getAttributerClass(): string;

    abstract protected function getJsonResponseHandlerClass(): string;
}
