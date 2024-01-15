<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Core\CommandAttributers;

use Shahmal1yev\EasyPay\Yigim\Core\CommandAttributers\RefundCommandAttributer;
use PHPUnit\Framework\TestCase;

class RefundCommandAttributerTest extends TestCase
{
    public function testSetAndGetXMerchant()
    {
        $attributer = new RefundCommandAttributer();

        $attributer->setXMerchant('string');
        $this->assertEquals('string', $attributer->getXMerchant());
    }

    public function testSetAndGetSignature()
    {
        $attributer = new RefundCommandAttributer();

        $attributer->setXSignature('string');
        $this->assertEquals('string', $attributer->getXSignature());
    }

    public function testSetAndGetXType()
    {
        $attributer = new RefundCommandAttributer();

        $attributer->setXType('string');
        $this->assertEquals('string', $attributer->getXType());
    }

    public function testSetAndGetAmount()
    {
        $attributer = new RefundCommandAttributer();

        $attributer->setAmount(1000);
        $this->assertEquals(1000, $attributer->getAmount());

        $this->expectException(\TypeError::class);
        $attributer->setAmount('string');
    }

    public function testSetAndSetReference()
    {
        $attributer = new RefundCommandAttributer();

        $attributer->setReference('string');
        $this->assertEquals('string', $attributer->getReference());
    }
}
