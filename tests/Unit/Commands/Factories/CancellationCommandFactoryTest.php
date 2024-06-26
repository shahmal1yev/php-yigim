<?php

namespace EasyPay\PHP\Yigim\Tests\Unit\Commands\Factories;

use EasyPay\PHP\Yigim\Abstracts\ResponseHandlerAbstract;
use EasyPay\PHP\Yigim\Commands\Attributers\CancellationCommandAttributer;
use EasyPay\PHP\Yigim\Commands\EndpointProviders\CancellationCommandEndpointProvider;
use EasyPay\PHP\Yigim\Commands\Factories\CancellationCommandFactory;
use EasyPay\PHP\Yigim\Commands\ResponseHandlers\CancellationCommandResponseHandler;
use EasyPay\PHP\Yigim\Contracts\CommandAttributerContract;
use EasyPay\PHP\Yigim\Contracts\CommandEndpointProviderContract;
use PHPUnit\Framework\TestCase;

/**
 * Class CancellationCommandFactoryTest
 *
 * Test cases for the CancellationCommandFactory class.
 *
 * @package EasyPay\PHP\Yigim\Tests\Commands\Factories
 */
class CancellationCommandFactoryTest extends TestCase
{
    /**
     * Test the creation of the attributer by the factory.
     *
     * @return void
     */
    public function testCreateAttributer(): void
    {
        $actual = (new CancellationCommandFactory())->createAttributer();

        $this->assertInstanceOf(CommandAttributerContract::class, $actual);
        $this->assertInstanceOf(CancellationCommandAttributer::class, $actual);
    }

    /**
     * Test the creation of the response handler by the factory.
     *
     * @return void
     */
    public function testCreateResponseHandler(): void
    {
        $actual = (new CancellationCommandFactory())->createResponseHandler();

        $this->assertInstanceOf(ResponseHandlerAbstract::class, $actual);
        $this->assertInstanceOf(CancellationCommandResponseHandler::class, $actual);
    }

    /**
     * Test the creation of the provider by the factory.
     *
     * @return void
     */
    public function testCreateProvider(): void
    {
        $actual = (new CancellationCommandFactory())->createProvider();

        $this->assertInstanceOf(CommandEndpointProviderContract::class, $actual);
        $this->assertInstanceOf(CancellationCommandEndpointProvider::class, $actual);
    }
}
