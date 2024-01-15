<?php

namespace Factories\Commands;

use Shahmal1yev\EasyPay\Yigim\Contracts\AuthCredentials\AuthCredentialsContract;
use Shahmal1yev\EasyPay\Yigim\Executors\CommandExecutor;
use Shahmal1yev\EasyPay\Yigim\Factories\Commands\StatusCommandFactory;
use PHPUnit\Framework\TestCase;

class StatusCommandFactoryTest extends TestCase
{
    public function testMake()
    {
        $xMerchant = 'xMerchant';
        $xSignature = 'xSignature';
        $xType = 'xType';

        $factory = StatusCommandFactory::make($xMerchant, $xSignature, $xType);

        $this->assertInstanceOf($factory::class, CommandExecutor::class);
    }

    public function testMakeWithAuthCredentials()
    {
        $authCredentialsMock = $this->createMock(AuthCredentialsContract::class);
        $factory = StatusCommandFactory::make($authCredentialsMock);

        $this->assertInstanceOf($factory::class, CommandExecutor::class);
    }
}
