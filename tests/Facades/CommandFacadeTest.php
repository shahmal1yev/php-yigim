<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Facades;

use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttributerContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandExecutorContract;
use Shahmal1yev\EasyPay\Yigim\Facades\CommandFacade;
use PHPUnit\Framework\TestCase;

/**
 * Class CommandFacadeTest
 *
 * Test cases for the CommandFacade class.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Tests\Facades
 */
class CommandFacadeTest extends TestCase
{
    /**
     * Test "initialization" method returns CommandExecutorContract
     */
    public function testInitializationReturnsCommandExecutorContract(): void
    {
        $facade = new CommandFacade();
        $executor = $facade->initialization();

        $this->assertInstanceOf(CommandExecutorContract::class, $executor);
    }

    /**
     * Test "status" method returns CommandExecutorContract
     */
    public function testStatusReturnsCommandExecutorContract(): void
    {
        $facade = new CommandFacade();
        $executor = $facade->status();

        $this->assertInstanceOf(CommandExecutorContract::class, $executor);
    }

    /**
     * Test "directPayment" method returns CommandExecutorContract
     */
    public function testDirectPaymentReturnsCommandExecutorContract(): void
    {
        $facade = new CommandFacade();
        $executor = $facade->directPayment();

        $this->assertInstanceOf(CommandExecutorContract::class, $executor);
    }

    /**
     * Test "paymentClearance" method returns CommandExecutorContract
     */
    public function testPaymentClearanceReturnsCommandExecutorContract(): void
    {
        $facade = new CommandFacade();
        $executor = $facade->paymentClearance();

        $this->assertInstanceOf(CommandExecutorContract::class, $executor);
    }

    /**
     * Test "cancellation" method returns CommandExecutorContract
     */
    public function testCancellationReturnsCommandExecutorContract(): void
    {
        $facade = new CommandFacade();
        $executor = $facade->cancellation();

        $this->assertInstanceOf(CommandExecutorContract::class, $executor);
    }

    /**
     * Test "refund" method returns CommandExecutorContract
     */
    public function testRefundReturnsCommandExecutorContract(): void
    {
        $facade = new CommandFacade();
        $executor = $facade->refund();

        $this->assertInstanceOf(CommandExecutorContract::class, $executor);
    }
}
