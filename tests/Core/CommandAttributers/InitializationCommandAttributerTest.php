<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Core\CommandAttributers;

use PHPUnit\Framework\TestCase;
use Shahmal1yev\EasyPay\Yigim\Commands\Attributers\InitializationCommandAttributer;

class InitializationCommandAttributerTest extends TestCase
{
    public function testSetAndGetXMerchant()
    {
        $attributer = new InitializationCommandAttributer();

        $attributer->setXMerchant('string');
        $this->assertEquals('string', $attributer->getXMerchant());
    }

    public function testSetAndGetSignature()
    {
        $attributer = new InitializationCommandAttributer();

        $attributer->setXSignature('string');
        $this->assertEquals('string', $attributer->getXSignature());
    }

    public function testSetAndGetXType()
    {
        $attributer = new InitializationCommandAttributer();

        $attributer->setXType('string');
        $this->assertEquals('string', $attributer->getXType());
    }

    public function testSetAndSetReference()
    {
        $attributer = new InitializationCommandAttributer();

        $attributer->setReference('string');
        $this->assertEquals('string', $attributer->getReference());
    }

    public function testSetAndGetType()
    {
        $attributer = new InitializationCommandAttributer();

        $attributer->setType('string');
        $this->assertEquals('string', $attributer->getType());
    }

    public function testSetAndGetToken()
    {
        $attributer = new InitializationCommandAttributer();

        $attributer->setToken('string');
        $this->assertEquals('string', $attributer->getToken());
    }

    public function testSetAndGetSave()
    {
        $attributer = new InitializationCommandAttributer();

        $attributer->setSave('string');
        $this->assertEquals('string', $attributer->getSave());
    }

    public function testSetAndGetAmount()
    {
        $attributer = new InitializationCommandAttributer();

        $attributer->setAmount(1000);
        $this->assertEquals(1000, $attributer->getAmount());

        $this->expectException(\TypeError::class);
        $attributer->setAmount('string');
    }

    public function testSetAndGetCurrency()
    {
        $attributer = new InitializationCommandAttributer();

        $attributer->setCurrency('string');
        $this->assertEquals('string', $attributer->getCurrency());
    }

    public function testSetAndGetBiller()
    {
        $attributer = new InitializationCommandAttributer();

        $attributer->setBiller('string');
        $this->assertEquals('string', $attributer->getBiller());
    }

    public function testSetAndGetDescription()
    {
        $attributer = new InitializationCommandAttributer();

        $attributer->setDescription('string');
        $this->assertEquals('string', $attributer->getDescription());
    }

    public function testSetAndGetTemplate()
    {
        $attributer = new InitializationCommandAttributer();

        $attributer->setTemplate('string');
        $this->assertEquals('string', $attributer->getTemplate());
    }

    public function testSetAndGetLanguage()
    {
        $attributer = new InitializationCommandAttributer();

        $attributer->setLanguage('string');
        $this->assertEquals('string', $attributer->getLanguage());
    }

    public function testSetAndGetCallback()
    {
        $attributer = new InitializationCommandAttributer();

        $attributer->setCallback('string');
        $this->assertEquals('string', $attributer->getCallback());
    }

    public function testSetAndGetExtra()
    {
        $attributer = new InitializationCommandAttributer();

        $attributer->setExtra('string');
        $this->assertEquals('string', $attributer->getExtra());
    }
}
