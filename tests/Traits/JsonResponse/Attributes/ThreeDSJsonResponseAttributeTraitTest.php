<?php

namespace EasyPay\PHP\Yigim\Tests\Traits\JsonResponse\Attributes;

use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\ThreeDSJsonResponseAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class ThreeDSJsonResponseAttributeTraitTest
 *
 * Test case for the ThreeDSJsonResponseAttributeTrait.
 *
 * @package EasyPay\PHP\Yigim\Tests\Traits\JsonResponse\Attributes
 */
class ThreeDSJsonResponseAttributeTraitTest extends TestCase
{
    use ThreeDSJsonResponseAttributeTrait;

    /** @var object The JSON response object. */
    private object $response;

    /**
     * Set up the test case.
     */
    protected function setUp(): void
    {
        $this->response = (object) ['3ds' => 'value'];
    }

    /**
     * Test the get3ds method.
     */
    public function testGet3ds(): void
    {
        $expected = $this->response->{"3ds"};
        $actual = $this->get3ds();

        $this->assertSame($expected, $actual);
    }
}
