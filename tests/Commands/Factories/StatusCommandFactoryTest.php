<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Commands\Factories;

use Shahmal1yev\EasyPay\Yigim\Abstracts\ResponseHandlerAbstract;
use Shahmal1yev\EasyPay\Yigim\Commands\Attributers\StatusCommandAttributer;
use Shahmal1yev\EasyPay\Yigim\Commands\EndpointProviders\StatusCommandEndpointProvider;
use Shahmal1yev\EasyPay\Yigim\Commands\Factories\StatusCommandFactory;
use PHPUnit\Framework\TestCase;
use Shahmal1yev\EasyPay\Yigim\Commands\ResponseHandlers\StatusCommandResponseHandler;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttributerContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandEndpointProviderContract;

/**
 * Class StatusCommandFactoryTest
 *
 * Test cases for the StatusCommandFactory class.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Tests\Commands\Factories
 */
class StatusCommandFactoryTest extends TestCase
{
    /**
     * Test the creation of the attributer by the factory.
     *
     * @return void
     */
    public function testCreateAttributer(): void
    {
        $actual = (new StatusCommandFactory())->createAttributer();

        $this->assertInstanceOf(CommandAttributerContract::class, $actual);
        $this->assertInstanceOf(StatusCommandAttributer::class, $actual);
    }

    /**
     * Test the creation of the response handler by the factory.
     *
     * @return void
     */
    public function testCreateResponseHandler(): void
    {
        $actual = (new StatusCommandFactory())->createResponseHandler();

        $this->assertInstanceOf(ResponseHandlerAbstract::class, $actual);
        $this->assertInstanceOf(StatusCommandResponseHandler::class, $actual);
    }

    /**
     * Test the creation of the provider by the factory.
     *
     * @return void
     */
    public function testCreateProvider(): void
    {
        $actual = (new StatusCommandFactory())->createProvider();

        $this->assertInstanceOf(CommandEndpointProviderContract::class, $actual);
        $this->assertInstanceOf(StatusCommandEndpointProvider::class, $actual);
    }
}
