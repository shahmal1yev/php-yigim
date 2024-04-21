<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\EndpointProviders;

use Shahmal1yev\EasyPay\Yigim\Contracts\CommandEndpointProviderContract;
use Shahmal1yev\EasyPay\Yigim\EndpointProviders\InitializationCommandEndpointProvider;
use PHPUnit\Framework\TestCase;
use Shahmal1yev\EasyPay\Yigim\Enums\Endpoint;

/**
 * Class InitializationCommandEndpointProviderTest
 *
 * Test cases for the InitializationCommandEndpointProvider class.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Tests\EndpointProviders
 */
class InitializationCommandEndpointProviderTest extends TestCase
{
    /**
     * Test instantiation of the class.
     *
     * @return void
     */
    public function testClassInstantiation(): void
    {
        $endpointProvider = new InitializationCommandEndpointProvider();

        $this->assertInstanceOf(CommandEndpointProviderContract::class, $endpointProvider);
    }

    /**
     * Test that getEndpoint method returns an instance of Endpoint enum.
     *
     * @return void
     */
    public function testGetEndpointReturnsEndpointEnum()
    {
        $endpointProvider = new InitializationCommandEndpointProvider();
        $endpointEnum = $endpointProvider->getEndpoint();

        $this->assertInstanceOf(Endpoint::class, $endpointEnum);
    }

    /**
     * Test that getEndpoint method returns the correct endpoint.
     *
     * @return void
     */
    public function testGetEndpointReturnsCorrectEndpoint()
    {
        $endpointProvider = new InitializationCommandEndpointProvider();
        $endpoint = $endpointProvider->getEndpoint()->value;

        $this->assertSame(Endpoint::INITIALIZATION->value, $endpoint);
    }
}
