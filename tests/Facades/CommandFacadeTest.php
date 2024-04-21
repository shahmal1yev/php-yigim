<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Facades;

use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttributerContract;
use Shahmal1yev\EasyPay\Yigim\Facades\CommandFacade;
use PHPUnit\Framework\TestCase;

class CommandFacadeTest extends TestCase
{
    public function testPreparingForInitializationCommandReturningTheBuilderAsCorrectly()
    {
        $facade = new CommandFacade();

        $executor = $facade->prepareForInitialization();

        $this->assertInstanceOf(CommandAttributerContract::class, $executor->fieldBuilder());
    }
}
