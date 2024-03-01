<?php

namespace Shahmal1yev\EasyPay\Yigim\Abstracts\Commands;

use InvalidArgumentException;
use Shahmal1yev\EasyPay\Yigim\Contracts\AuthCredentials\AuthCredentialsContract;
use Shahmal1yev\EasyPay\Yigim\Enums\Endpoint;
use Shahmal1yev\EasyPay\Yigim\Executors\CommandExecutor;

abstract class CommandFactoryAbstract
{
    protected CommandExecutor $executor;
    protected array $config;

    public static final function make(AuthCredentialsContract|string $credentials, string $xSignature = null, string $xType = null): CommandExecutor
    {
        $_this = new static();

        $_this->config = $_this->prepareConfig($credentials, $xSignature, $xType);

        $_this->executor = new CommandExecutor(
            $_this->getEndpoint(),
            $_this->getAttributerClass(),
            $_this->getJsonResponseHandlerClass()
        );

        $_this->boot();

        return $_this->executor;
    }

    protected function __construct()
    {

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

    abstract protected function getEndpoint(): Endpoint;

    abstract protected function getAttributerClass(): string;

    abstract protected function getJsonResponseHandlerClass(): string;
}
