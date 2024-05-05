<?php

namespace EasyPay\PHP\Yigim\Facades;

use EasyPay\PHP\Yigim\Commands\Factories\BatchCloseCommandFactory;
use EasyPay\PHP\Yigim\Commands\Factories\CancellationCommandFactory;
use EasyPay\PHP\Yigim\Commands\Factories\DirectPaymentCommandFactory;
use EasyPay\PHP\Yigim\Commands\Factories\InitializationCommandFactory;
use EasyPay\PHP\Yigim\Commands\Factories\PaymentClearanceCommandFactory;
use EasyPay\PHP\Yigim\Commands\Factories\RefundCommandFactory;
use EasyPay\PHP\Yigim\Commands\Factories\StatusCommandFactory;
use EasyPay\PHP\Yigim\Contracts\CommandExecutorContract;
use EasyPay\PHP\Yigim\Executors\CommandExecutor;

/**
 * Class CommandFacade
 *
 * Represents a facade for simplifying command execution.
 *
 * @package EasyPay\PHP\Yigim\Facades
 */
class CommandFacade
{
    /**
     * Prepares the command executor for the "initialization" command.
     *
     * @return CommandExecutorContract The command executor.
     */
    public function initialization(): CommandExecutorContract
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
    public function status(): CommandExecutorContract
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

    /**
     * Prepares the command executor for the "cancellation" command.
     *
     * @return CommandExecutorContract The command executor.
     */
    public function cancellation(): CommandExecutorContract
    {
        $factory = new CancellationCommandFactory();
        $executor = new CommandExecutor($factory);

        return $executor;
    }

    /**
     * Prepares the command executor for the "payment refund" command.
     *
     * @return CommandExecutorContract The command executor.
     */
    public function refund(): CommandExecutorContract
    {
        $factory = new RefundCommandFactory();
        $executor = new CommandExecutor($factory);

        return $executor;
    }

    /**
     * Prepares the command executor for the "closing of batch" command.
     *
     * @return CommandExecutorContract The command executor.
     */
    public function batchClose(): CommandExecutorContract
    {
        $factory = new BatchCloseCommandFactory();
        $executor = new CommandExecutor($factory);

        return $executor;
    }
}
