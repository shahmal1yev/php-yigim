<?php

namespace EasyPay\PHP\Yigim\Tests\Commands\Factories;

use EasyPay\PHP\Yigim\Abstracts\ResponseHandlerAbstract;
use EasyPay\PHP\Yigim\Commands\Attributers\RefundCommandAttributer;
use EasyPay\PHP\Yigim\Commands\EndpointProviders\RefundCommandEndpointProvider;
use EasyPay\PHP\Yigim\Commands\Factories\RefundCommandFactory;
use PHPUnit\Framework\TestCase;
use EasyPay\PHP\Yigim\Commands\ResponseHandlers\RefundCommandResponseHandler;
use EasyPay\PHP\Yigim\Contracts\CommandAttributerContract;
use EasyPay\PHP\Yigim\Contracts\CommandEndpointProviderContract;

/**
 * Class RefundCommandFactoryTest
 *
 * Test cases for the RefundCommandFactory class.
 *
 * @package EasyPay\PHP\Yigim\Tests\Commands\Factories
 */
class RefundCommandFactoryTest extends TestCase
{
    /**
     * Test the creation of the attributer by the factory.
     *
     * @return void
     */
    public function testCreateAttributer(): void
    {
        $actual = (new RefundCommandFactory())->createAttributer();

        $this->assertInstanceOf(CommandAttributerContract::class, $actual);
        $this->assertInstanceOf(RefundCommandAttributer::class, $actual);
    }

    /**
     * Test the creation of the response handler by the factory.
     *
     * @return void
     */
    public function testCreateResponseHandler(): void
    {
        $actual = (new RefundCommandFactory())->createResponseHandler();

        $this->assertInstanceOf(ResponseHandlerAbstract::class, $actual);
        $this->assertInstanceOf(RefundCommandResponseHandler::class, $actual);
    }

    /**
     * Test the creation of the provider by the factory.
     *
     * @return void
     */
    public function testCreateProvider(): void
    {
        $actual = (new RefundCommandFactory())->createProvider();

        $this->assertInstanceOf(CommandEndpointProviderContract::class, $actual);
        $this->assertInstanceOf(RefundCommandEndpointProvider::class, $actual);
    }
}
