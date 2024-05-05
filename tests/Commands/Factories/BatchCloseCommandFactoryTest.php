<?php

namespace EasyPay\PHP\Yigim\Tests\Commands\Factories;

use EasyPay\PHP\Yigim\Abstracts\ResponseHandlerAbstract;
use EasyPay\PHP\Yigim\Commands\Attributers\BatchCloseCommandAttributer;
use EasyPay\PHP\Yigim\Commands\EndpointProviders\BatchCloseCommandEndpointProvider;
use EasyPay\PHP\Yigim\Commands\Factories\BatchCloseCommandFactory;
use PHPUnit\Framework\TestCase;
use EasyPay\PHP\Yigim\Commands\ResponseHandlers\BatchCloseCommandResponseHandler;
use EasyPay\PHP\Yigim\Contracts\CommandAttributerContract;
use EasyPay\PHP\Yigim\Contracts\CommandEndpointProviderContract;

/**
 * Class BatchCloseCommandFactoryTest
 *
 * Test cases for the BatchCloseCommandFactory class.
 *
 * @package EasyPay\PHP\Yigim\Tests\Commands\Factories
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
