<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Core\CommandAttributers;

use PHPUnit\Framework\TestCase;
use Shahmal1yev\EasyPay\Yigim\Commands\Attributers\DirectPaymentCommandAttributer;

class DirectPaymentCommandAttributerTest extends TestCase
{
    public function testSetAndGetXMerchant()
    {
        $attributer = new DirectPaymentCommandAttributer();

        $attributer->setXMerchant('string');
        $this->assertEquals('string', $attributer->getXMerchant());
    }

    public function testSetAndGetSignature()
    {
        $attributer = new DirectPaymentCommandAttributer();

        $attributer->setXSignature('string');
        $this->assertEquals('string', $attributer->getXSignature());
    }

    public function testSetAndGetXType()
    {
        $attributer = new DirectPaymentCommandAttributer();

        $attributer->setXType('string');
        $this->assertEquals('string', $attributer->getXType());
    }

    public function testSetAndGetReference()
    {
        $attributer = new DirectPaymentCommandAttributer();

        $attributer->setReference('string');
        $this->assertEquals('string', $attributer->getReference());
    }

    public function testSetAndGetType()
    {
        $attributer = new DirectPaymentCommandAttributer();

        $attributer->setType('string');
        $this->assertEquals('string', $attributer->getType());
    }

    public function testSetAndGetToken()
    {
        $attributer = new DirectPaymentCommandAttributer();

        $attributer->setToken('string');
        $this->assertEquals('string', $attributer->getToken());
    }

    public function testSetAndGetPan()
    {
        $attributer = new DirectPaymentCommandAttributer();

        $attributer->setPan('string');
        $this->assertEquals('string', $attributer->getPan());
    }

    public function testSetAndGetExpiry()
    {
        $attributer = new DirectPaymentCommandAttributer();

        $attributer->setExpiry('string');
        $this->assertEquals('string', $attributer->getExpiry());
    }

    public function testSetAndGetCsc()
    {
        $attributer = new DirectPaymentCommandAttributer();

        $attributer->setCsc('string');
        $this->assertEquals('string', $attributer->getCsc());
    }

    public function testSetAndGetAmount()
    {
        $attributer = new DirectPaymentCommandAttributer();

        $attributer->setAmount(100);
        $this->assertEquals(100, $attributer->getAmount());

        $this->expectException(\TypeError::class);
        $attributer->setAmount('string');
    }

    public function testSetAndGetCurrency()
    {
        $attributer = new DirectPaymentCommandAttributer();

        $attributer->setCurrency('string');
        $this->assertEquals('string', $attributer->getCurrency());
    }

    public function testSetAndGetBiller()
    {
        $attributer = new DirectPaymentCommandAttributer();

        $attributer->setBiller('string');
        $this->assertEquals('string', $attributer->getBiller());
    }

    public function testSetAndGetExtra()
    {
        $attributer = new DirectPaymentCommandAttributer();

        $attributer->setExtra('string');
        $this->assertEquals('string', $attributer->getExtra());
    }
}
