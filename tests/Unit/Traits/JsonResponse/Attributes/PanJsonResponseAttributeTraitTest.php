<?php

namespace EasyPay\PHP\Yigim\Tests\Unit\Traits\JsonResponse\Attributes;

use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\PanJsonResponseAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class PanJsonResponseAttributeTraitTest
 *
 * Test case for the PanJsonResponseAttributeTrait.
 *
 * @package EasyPay\PHP\Yigim\Tests\Traits\JsonResponse\Attributes
 */
class PanJsonResponseAttributeTraitTest extends TestCase
{
    use PanJsonResponseAttributeTrait;

    private object $response;

    /**
     * Set up the test case.
     */
    protected function setUp(): void
    {
        $this->response = (object) ['pan' => 'value'];
    }

    /**
     * Test the getPan method.
     */
    public function testGetPan(): void
    {
        $expected = $this->response->pan;
        $actual = $this->getPan();

        $this->assertSame($expected, $actual);
    }
}
