<?php

namespace EasyPay\PHP\Yigim\Tests\Unit\Commands\Factories;

use EasyPay\PHP\Yigim\Abstracts\ResponseHandlerAbstract;
use EasyPay\PHP\Yigim\Commands\Attributers\PaymentClearanceCommandAttributer;
use EasyPay\PHP\Yigim\Commands\EndpointProviders\PaymentClearanceCommandEndpointProvider;
use EasyPay\PHP\Yigim\Commands\Factories\PaymentClearanceCommandFactory;
use EasyPay\PHP\Yigim\Commands\ResponseHandlers\PaymentClearanceCommandResponseHandler;
use EasyPay\PHP\Yigim\Contracts\CommandAttributerContract;
use EasyPay\PHP\Yigim\Contracts\CommandEndpointProviderContract;
use PHPUnit\Framework\TestCase;

/**
 * Class PaymentClearanceCommandFactoryTest
 *
 * Test cases for the PaymentClearanceCommandFactory class.
 *
 * @package EasyPay\PHP\Yigim\Tests\Commands\Factories
 */
class PaymentClearanceCommandFactoryTest extends TestCase
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
