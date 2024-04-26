<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Commands\EndpointProviders;

use PHPUnit\Framework\TestCase;
use Shahmal1yev\EasyPay\Yigim\Commands\EndpointProviders\InitializationCommandEndpointProvider;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandEndpointProviderContract;
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
}
