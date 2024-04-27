<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Commands\Factories;

use Shahmal1yev\EasyPay\Yigim\Abstracts\ResponseHandlerAbstract;
use Shahmal1yev\EasyPay\Yigim\Commands\Attributers\CancellationCommandAttributer;
use Shahmal1yev\EasyPay\Yigim\Commands\EndpointProviders\CancellationCommandEndpointProvider;
use Shahmal1yev\EasyPay\Yigim\Commands\Factories\CancellationCommandFactory;
use PHPUnit\Framework\TestCase;
use Shahmal1yev\EasyPay\Yigim\Commands\ResponseHandlers\CancellationCommandResponseHandler;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttributerContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandEndpointProviderContract;

/**
 * Class CancellationCommandFactoryTest
 *
 * Test cases for the CancellationCommandFactory class.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Tests\Commands\Factories
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
