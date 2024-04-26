<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Commands\Factories;

use Shahmal1yev\EasyPay\Yigim\Commands\Attributers\InitializationCommandAttributer;
use Shahmal1yev\EasyPay\Yigim\Commands\EndpointProviders\InitializationCommandEndpointProvider;
use Shahmal1yev\EasyPay\Yigim\Commands\Factories\InitializationCommandFactory;
use PHPUnit\Framework\TestCase;
use Shahmal1yev\EasyPay\Yigim\Commands\ResponseHandlers\InitializationCommandResponseHandler;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttributerContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandEndpointProviderContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandResponseHandlerContract;

/**
 * Class InitializationCommandFactoryTest
 *
 * Test cases for the InitializationCommandFactory class.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Tests\Commands\Factories
 */
class InitializationCommandFactoryTest extends TestCase
{
    /**
     * Test the creation of the attributer by the factory.
     *
     * @return void
     */
    public function testCreateAttributer(): void
    {
        $actual = (new InitializationCommandFactory())->createAttributer();

        $this->assertInstanceOf(CommandAttributerContract::class, $actual);
        $this->assertInstanceOf(InitializationCommandAttributer::class, $actual);
    }

    /**
     * Test the creation of the response handler by the factory.
     *
     * @return void
     */
    public function testCreateResponseHandler(): void
    {
        $actual = (new InitializationCommandFactory())->createResponseHandler();

        $this->assertInstanceOf(CommandResponseHandlerContract::class, $actual);
        $this->assertInstanceOf(InitializationCommandResponseHandler::class, $actual);
    }

    /**
     * Test the creation of the provider by the factory.
     *
     * @return void
     */
    public function testCreateProvider(): void
    {
        $actual = (new InitializationCommandFactory())->createProvider();

        $this->assertInstanceOf(CommandEndpointProviderContract::class, $actual);
        $this->assertInstanceOf(InitializationCommandEndpointProvider::class, $actual);
    }
}
