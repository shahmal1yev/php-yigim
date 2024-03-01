<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Core\CommandAttributers;

use PHPUnit\Framework\TestCase;
use Shahmal1yev\EasyPay\Yigim\Commands\Attributers\CancellationCommandAttributer;

class CancellationCommandAttributerTest extends TestCase
{
    public function testSetAndGetXMerchant()
    {
        $attributer = new CancellationCommandAttributer();

        $attributer->setXMerchant('string');
        $this->assertEquals('string', $attributer->getXMerchant());
    }

    public function testSetAndGetSignature()
    {
        $attributer = new CancellationCommandAttributer();

        $attributer->setXSignature('string');
        $this->assertEquals('string', $attributer->getXSignature());
    }

    public function testSetAndGetXType()
    {
        $attributer = new CancellationCommandAttributer();

        $attributer->setXType('string');
        $this->assertEquals('string', $attributer->getXType());
    }

    public function testSetAndGetAmount()
    {
        $attributer = new CancellationCommandAttributer();

        $attributer->setAmount(100);
        $this->assertEquals(100, $attributer->getAmount());

        $this->expectException(\TypeError::class);
        $attributer->setAmount('string');
    }

    public function testSetAndGetReference()
    {
        $attributer = new CancellationCommandAttributer();

        $attributer->setReference('string');
        $this->assertEquals('string', $attributer->getReference());
    }
}