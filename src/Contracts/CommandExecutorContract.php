<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts;

/**
 * Interface CommandExecutorContract
 *
 * Represents a contract for executing commands.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Contracts
 */
interface CommandExecutorContract
{
    /**
     * Executes the command.
     *
     * @return ResponseDataContract The response data contract.
     */
    public function execute(): ResponseDataContract;

    /**
     * Retrieves the command attributer for building command fields.
     *
     * @return CommandAttributerContract The command attributer.
     */
    public function fieldBuilder(): CommandAttributerContract;
}
