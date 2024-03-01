<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Core\CommandAttributers;

use PHPUnit\Framework\TestCase;
use Shahmal1yev\EasyPay\Yigim\Commands\Attributers\StatusCommandAttributer;

class StatusCommandAttributerTest extends TestCase
{
    public function testSetAndGetXMerchant()
    {
        $attributer = new StatusCommandAttributer();

        $attributer->setXMerchant('string');
        $this->assertEquals('string', $attributer->getXMerchant());
    }

    public function testSetAndGetSignature()
    {
        $attributer = new StatusCommandAttributer();

        $attributer->setXSignature('string');
        $this->assertEquals('string', $attributer->getXSignature());
    }

    public function testSetAndGetXType()
    {
        $attributer = new StatusCommandAttributer();

        $attributer->setXType('string');
        $this->assertEquals('string', $attributer->getXType());
    }

    public function testSetAndSetReference()
    {
        $attributer = new StatusCommandAttributer();

        $attributer->setReference('string');
        $this->assertEquals('string', $attributer->getReference());
    }
}
