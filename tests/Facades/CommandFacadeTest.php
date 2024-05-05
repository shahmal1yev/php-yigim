<?php

namespace EasyPay\PHP\Yigim\Tests\Facades;

use EasyPay\PHP\Yigim\Contracts\CommandAttributerContract;
use EasyPay\PHP\Yigim\Contracts\CommandExecutorContract;
use EasyPay\PHP\Yigim\Facades\CommandFacade;
use PHPUnit\Framework\TestCase;

/**
 * Class CommandFacadeTest
 *
 * Test cases for the CommandFacade class.
 *
 * @package EasyPay\PHP\Yigim\Tests\Facades
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

    /**
     * Test "closing of batch" method returns CommandExecutorContract
     */
    public function testBatchCloseReturnsCommandExecutorContract(): void
    {
        $facade = new CommandFacade();
        $executor = $facade->batchClose();

        $this->assertInstanceOf(CommandExecutorContract::class, $executor);
    }
}
