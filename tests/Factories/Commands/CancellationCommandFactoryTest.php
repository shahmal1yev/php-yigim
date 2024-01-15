<?php

namespace Factories\Commands;

use PHPUnit\Framework\TestCase;
use Shahmal1yev\EasyPay\Yigim\Contracts\AuthCredentials\AuthCredentialsContract;
use Shahmal1yev\EasyPay\Yigim\Executors\CommandExecutor;
use Shahmal1yev\EasyPay\Yigim\Factories\Commands\CancellationCommandFactory;

class CancellationCommandFactoryTest extends TestCase
{
    public function testMake()
    {
        $xMerchant = 'xMerchant';
        $xSignature = 'xSignature';
        $xType = 'xType';

        $factory = CancellationCommandFactory::make($xMerchant, $xSignature, $xType);

        $this->assertInstanceOf($factory::class, CommandExecutor::class);
    }

    public function testMakeWithAuthCredentials()
    {
        $authCredentialsMock = $this->createMock(AuthCredentialsContract::class);
        $factory = CancellationCommandFactory::make($authCredentialsMock);

        $this->assertInstanceOf($factory::class, CommandExecutor::class);
    }
}
