<?php

namespace EasyPay\PHP\Yigim\Tests\Unit\Traits\JsonResponse\Attributes;

use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\CurrencyJsonResponseAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class CurrencyJsonResponseAttributeTraitTest
 *
 * Test case for the CurrencyJsonResponseAttributeTrait.
 *
 * @package EasyPay\PHP\Yigim\Tests\Traits\JsonResponse\Attributes
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
