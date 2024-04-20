<?php

namespace Shahmal1yev\EasyPay\Yigim\Facades;

use Shahmal1yev\EasyPay\Yigim\Commands\InitializationCommandFactory;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandExecutorContract;
use Shahmal1yev\EasyPay\Yigim\Executors\CommandExecutor;

class CommandFacade
{
    public function prepareForInitialization(): CommandExecutorContract
    {
        $factory = new InitializationCommandFactory();
        $executor = new CommandExecutor($factory);

        return $executor;
    }
}