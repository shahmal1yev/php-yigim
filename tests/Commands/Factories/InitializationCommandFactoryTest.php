<?php

namespace EasyPay\PHP\Yigim\Tests\Commands\Factories;

use EasyPay\PHP\Yigim\Abstracts\ResponseHandlerAbstract;
use EasyPay\PHP\Yigim\Commands\Attributers\InitializationCommandAttributer;
use EasyPay\PHP\Yigim\Commands\EndpointProviders\InitializationCommandEndpointProvider;
use EasyPay\PHP\Yigim\Commands\Factories\InitializationCommandFactory;
use PHPUnit\Framework\TestCase;
use EasyPay\PHP\Yigim\Commands\ResponseHandlers\InitializationCommandResponseHandler;
use EasyPay\PHP\Yigim\Contracts\CommandAttributerContract;
use EasyPay\PHP\Yigim\Contracts\CommandEndpointProviderContract;

/**
 * Class InitializationCommandFactoryTest
 *
 * Test cases for the InitializationCommandFactory class.
 *
 * @package EasyPay\PHP\Yigim\Tests\Commands\Factories
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

        $this->assertInstanceOf(ResponseHandlerAbstract::class, $actual);
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
