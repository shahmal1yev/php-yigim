<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Commands\Factories;

use PHPUnit\Framework\TestCase;
use Shahmal1yev\EasyPay\Yigim\Abstracts\ResponseHandlerAbstract;
use Shahmal1yev\EasyPay\Yigim\Commands\Attributers\DirectPaymentCommandAttributer;
use Shahmal1yev\EasyPay\Yigim\Commands\EndpointProviders\DirectPaymentCommandEndpointProvider;
use Shahmal1yev\EasyPay\Yigim\Commands\Factories\DirectPaymentCommandFactory;
use Shahmal1yev\EasyPay\Yigim\Commands\ResponseHandlers\DirectPaymentCommandResponseHandler;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttributerContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandEndpointProviderContract;

/**
 * Class DirectPaymentCommandFactoryTest
 *
 * Test cases for the DirectPaymentCommandFactory class.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Tests\Commands\Factories
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