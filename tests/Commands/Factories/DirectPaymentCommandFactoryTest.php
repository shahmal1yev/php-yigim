<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Commands\Factories;

use Shahmal1yev\EasyPay\Yigim\Abstracts\ResponseHandlerAbstract;
use Shahmal1yev\EasyPay\Yigim\Commands\Attributers\PaymentClearanceCommandAttributer;
use Shahmal1yev\EasyPay\Yigim\Commands\EndpointProviders\PaymentClearanceCommandEndpointProvider;
use PHPUnit\Framework\TestCase;
use Shahmal1yev\EasyPay\Yigim\Commands\Factories\PaymentClearanceCommandFactory;
use Shahmal1yev\EasyPay\Yigim\Commands\ResponseHandlers\PaymentClearanceCommandResponseHandler;
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
        $actual = (new PaymentClearanceCommandFactory())->createAttributer();

        $this->assertInstanceOf(CommandAttributerContract::class, $actual);
        $this->assertInstanceOf(PaymentClearanceCommandAttributer::class, $actual);
    }

    /**
     * Test the creation of the response handler by the factory.
     *
     * @return void
     */
    public function testCreateResponseHandler(): void
    {
        $actual = (new PaymentClearanceCommandFactory())->createResponseHandler();

        $this->assertInstanceOf(ResponseHandlerAbstract::class, $actual);
        $this->assertInstanceOf(PaymentClearanceCommandResponseHandler::class, $actual);
    }

    /**
     * Test the creation of the provider by the factory.
     *
     * @return void
     */
    public function testCreateProvider(): void
    {
        $actual = (new PaymentClearanceCommandFactory())->createProvider();

        $this->assertInstanceOf(CommandEndpointProviderContract::class, $actual);
        $this->assertInstanceOf(PaymentClearanceCommandEndpointProvider::class, $actual);
    }
}
