<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Traits\JsonResponse\Attributes;

use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\CurrencyJsonResponseAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class CurrencyJsonResponseAttributeTraitTest
 *
 * Test case for the CurrencyJsonResponseAttributeTrait.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Tests\Traits\JsonResponse\Attributes
 */
class CurrencyJsonResponseAttributeTraitTest extends TestCase
{
    use CurrencyJsonResponseAttributeTrait;

    /** @var object The JSON response object. */
    private object $response;

    /**
     * Set up the test environment.
     */
    protected function setUp(): void
    {
        $this->response = (object) ['currency' => 'value'];
    }

    /**
     * Test the getCurrency method.
     */
    public function testGetCurrency(): void
    {
        $expected = $this->response->currency;
        $actual = $this->getCurrency();

        $this->assertSame($expected, $actual);
    }
}
