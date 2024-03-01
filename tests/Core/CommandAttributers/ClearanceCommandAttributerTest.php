<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Core\CommandAttributers;

use PHPUnit\Framework\TestCase;
use Shahmal1yev\EasyPay\Yigim\Commands\Attributers\ClearanceCommandAttributer;

class ClearanceCommandAttributerTest extends TestCase
{
    public function testSetAndGetXMerchant()
    {
        $attributer = new ClearanceCommandAttributer();

        $attributer->setXMerchant('string');
        $this->assertEquals('string', $attributer->getXMerchant());
    }

    public function testSetAndGetSignature()
    {
        $attributer = new ClearanceCommandAttributer();

        $attributer->setXSignature('string');
        $this->assertEquals('string', $attributer->getXSignature());
    }

    public function testSetAndGetXType()
    {
        $attributer = new ClearanceCommandAttributer();

        $attributer->setXType('string');
        $this->assertEquals('string', $attributer->getXType());
    }

    public function testSetAndGetAmount()
    {
        $attributer = new ClearanceCommandAttributer();

        $attributer->setAmount(100);
        $this->assertEquals(100, $attributer->getAmount());

        $this->expectException(\TypeError::class);
        $attributer->setAmount('string');
    }

    public function testSetAndGetReference()
    {
        $attributer = new ClearanceCommandAttributer();

        $attributer->setReference('string');
        $this->assertEquals('string', $attributer->getReference());
    }
}
