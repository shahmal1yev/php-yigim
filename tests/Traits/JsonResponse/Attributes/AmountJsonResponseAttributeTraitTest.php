<?php

namespace EasyPay\PHP\Yigim\Tests\Traits\JsonResponse\Attributes;

use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\AmountJsonResponseAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class AmountJsonResponseAttributeTraitTest
 *
 * Test case for the AmountJsonResponseAttributeTrait trait.
 *
 * @package EasyPay\PHP\Yigim\Tests\Traits\JsonResponse\Attributes
 */
class AmountJsonResponseAttributeTraitTest extends TestCase
{
    use AmountJsonResponseAttributeTrait;

    /** @var object The mock JSON response object. */
    private object $response;

    /**
     * Set up the test case.
     */
    protected function setUp(): void
    {
        $this->response = (object) ['amount' => 22];
    }

    /**
     * Test the getAmount method.
     */
    public function testGetAmount(): void
    {
        $expected = $this->response->amount;
        $actual = $this->getAmount();

        $this->assertSame($expected, $actual);
    }
}
