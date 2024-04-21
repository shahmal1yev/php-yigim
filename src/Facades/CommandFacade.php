<?php

namespace Shahmal1yev\EasyPay\Yigim\Facades;

use Shahmal1yev\EasyPay\Yigim\Commands\InitializationCommandFactory;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandExecutorContract;
use Shahmal1yev\EasyPay\Yigim\Executors\CommandExecutor;

/**
 * Class CommandFacade
 *
 * Represents a facade for simplifying command execution.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Facades
 */
class CommandFacade
{
    /**
     * Prepares the command executor for "initialization" command.
     *
     * @return CommandExecutorContract The command executor.
     */
    public function initializationCommand(): CommandExecutorContract
    {
        $factory = new InitializationCommandFactory();
        $executor = new CommandExecutor($factory);

        return $executor;
    }
}
