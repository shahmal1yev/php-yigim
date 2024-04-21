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
     * Test that preparing for "initialization" command returns CommandAttributerContract.
     */
    public function testInitializationCommandReturnsCommandAttributerContract(): void
    {
        $facade = new CommandFacade();

        $executor = $facade->initializationCommand();

        $this->assertInstanceOf(CommandAttributerContract::class, $executor->fieldBuilder());
    }
}
