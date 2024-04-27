<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Commands\Factories;

use Shahmal1yev\EasyPay\Yigim\Abstracts\ResponseHandlerAbstract;
use Shahmal1yev\EasyPay\Yigim\Commands\Attributers\BatchCloseCommandAttributer;
use Shahmal1yev\EasyPay\Yigim\Commands\EndpointProviders\BatchCloseCommandEndpointProvider;
use Shahmal1yev\EasyPay\Yigim\Commands\Factories\BatchCloseCommandFactory;
use PHPUnit\Framework\TestCase;
use Shahmal1yev\EasyPay\Yigim\Commands\ResponseHandlers\BatchCloseCommandResponseHandler;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttributerContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandEndpointProviderContract;

/**
 * Class BatchCloseCommandFactoryTest
 *
 * Test cases for the BatchCloseCommandFactory class.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Tests\Commands\Factories
 */
class BatchCloseCommandFactoryTest extends TestCase
{
    /**
     * Test the creation of the attributer by the factory.
     *
     * @return void
     */
    public function testCreateAttributer(): void
    {
        $actual = (new BatchCloseCommandFactory())->createAttributer();

        $this->assertInstanceOf(CommandAttributerContract::class, $actual);
        $this->assertInstanceOf(BatchCloseCommandAttributer::class, $actual);
    }

    /**
     * Test the creation of the response handler by the factory.
     *
     * @return void
     */
    public function testCreateResponseHandler(): void
    {
        $actual = (new BatchCloseCommandFactory())->createResponseHandler();

        $this->assertInstanceOf(ResponseHandlerAbstract::class, $actual);
        $this->assertInstanceOf(BatchCloseCommandResponseHandler::class, $actual);
    }

    /**
     * Test the creation of the provider by the factory.
     *
     * @return void
     */
    public function testCreateProvider(): void
    {
        $actual = (new BatchCloseCommandFactory())->createProvider();

        $this->assertInstanceOf(CommandEndpointProviderContract::class, $actual);
        $this->assertInstanceOf(BatchCloseCommandEndpointProvider::class, $actual);
    }
}
