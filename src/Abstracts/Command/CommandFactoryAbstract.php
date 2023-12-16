<?php

namespace Shahmal1yev\EasyPay\Yigim\Abstracts\Command;

use DI\ContainerBuilder;
use Psr\Container\ContainerInterface;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandler\JsonResponseHandlerContract;

abstract class CommandFactoryAbstract
{
    protected ContainerInterface $containerBuilder;
    private function __construct(ContainerInterface $containerBuilder = null)
    {
        $this->containerBuilder = $containerBuilder ?? new ContainerBuilder();
        $this->boot();
    }

    abstract public static function make(): CommandFactoryAbstract;
    abstract protected function boot(): void;
    abstract public function execute(): JsonResponseHandlerContract;
}