<?php

namespace EasyPay\PHP\Yigim\Tests\Unit\Commands\Factories;

use EasyPay\PHP\Yigim\Abstracts\ResponseHandlerAbstract;
use EasyPay\PHP\Yigim\Commands\Attributers\DirectPaymentCommandAttributer;
use EasyPay\PHP\Yigim\Commands\EndpointProviders\DirectPaymentCommandEndpointProvider;
use EasyPay\PHP\Yigim\Commands\Factories\DirectPaymentCommandFactory;
use EasyPay\PHP\Yigim\Commands\ResponseHandlers\DirectPaymentCommandResponseHandler;
use EasyPay\PHP\Yigim\Contracts\CommandAttributerContract;
use EasyPay\PHP\Yigim\Contracts\CommandEndpointProviderContract;
use PHPUnit\Framework\TestCase;

/**
 * Class DirectPaymentCommandFactoryTest
 *
 * Test cases for the DirectPaymentCommandFactory class.
 *
 * @package EasyPay\PHP\Yigim\Tests\Commands\Factories
 */
class DirectPaymentCommandFactoryTest extends TestCase
{
    /**
     * Test the creation of the attributer by the factory.
     *
     * @return void
     */
    public function testCreateAttributer(): void
    {
        $actual = (new DirectPaymentCommandFactory())->createAttributer();

        $this->assertInstanceOf(CommandAttributerContract::class, $actual);
        $this->assertInstanceOf(DirectPaymentCommandAttributer::class, $actual);
    }

    /**
     * Test the creation of the response handler by the factory.
     *
     * @return void
     */
    public function testCreateResponseHandler(): void
    {
        $actual = (new DirectPaymentCommandFactory())->createResponseHandler();

        $this->assertInstanceOf(ResponseHandlerAbstract::class, $actual);
        $this->assertInstanceOf(DirectPaymentCommandResponseHandler::class, $actual);
    }

    /**
     * Test the creation of the provider by the factory.
     *
     * @return void
     */
    public function testCreateProvider(): void
    {
        $actual = (new DirectPaymentCommandFactory())->createProvider();

        $this->assertInstanceOf(CommandEndpointProviderContract::class, $actual);
        $this->assertInstanceOf(DirectPaymentCommandEndpointProvider::class, $actual);
    }
}
