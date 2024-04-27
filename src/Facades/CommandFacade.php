<?php

namespace Shahmal1yev\EasyPay\Yigim\Facades;

use Shahmal1yev\EasyPay\Yigim\Commands\Factories\DirectPaymentCommandFactory;
use Shahmal1yev\EasyPay\Yigim\Commands\Factories\InitializationCommandFactory;
use Shahmal1yev\EasyPay\Yigim\Commands\Factories\PaymentClearanceCommandFactory;
use Shahmal1yev\EasyPay\Yigim\Commands\Factories\StatusCommandFactory;
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
     * Prepares the command executor for the "initialization" command.
     *
     * @return CommandExecutorContract The command executor.
     */
    public function initializationCommand(): CommandExecutorContract
    {
        $factory = new InitializationCommandFactory();
        $executor = new CommandExecutor($factory);

        return $executor;
    }

    /**
     * Prepares the command executor for the "status" command.
     *
     * @return CommandExecutorContract The command executor.
     */
    public function statusCommand(): CommandExecutorContract
    {
        $factory = new StatusCommandFactory();
        $executor = new CommandExecutor($factory);

        return $executor;
    }

    /**
     * Prepares the command executor for the "direct payment" command.
     *
     * @return CommandExecutorContract The command executor.
     */
    public function directPayment(): CommandExecutorContract
    {
        $factory = new DirectPaymentCommandFactory();
        $executor = new CommandExecutor($factory);

        return $executor;
    }

    /**
     * Prepares the command executor for the "payment clearance" command.
     *
     * @return CommandExecutorContract The command executor.
     */
    public function paymentClearance(): CommandExecutorContract
    {
        $factory = new PaymentClearanceCommandFactory();
        $executor = new CommandExecutor($factory);

        return $executor;
    }
}
