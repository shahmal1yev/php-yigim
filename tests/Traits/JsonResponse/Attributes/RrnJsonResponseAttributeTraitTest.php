<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Traits\JsonResponse\Attributes;

use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\RrnJsonResponseAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class RrnJsonResponseAttributeTraitTest
 *
 * Test case for the RrnJsonResponseAttributeTrait.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Tests\Traits\JsonResponse\Attributes
 */
class RrnJsonResponseAttributeTraitTest extends TestCase
{
    use RrnJsonResponseAttributeTrait;

    /** @var object $response The mock JSON response object. */
    private object $response;

    /**
     * Sets up the test fixture.
     */
    protected function setUp(): void
    {
        $this->response = (object) ['rrn' => 'value'];
    }

    /**
     * Test the getRrn method.
     */
    public function testGetRrn(): void
    {
        $expected = $this->response->rrn;
        $actual = $this->getRrn();

        $this->assertSame($expected, $actual);
    }
}
