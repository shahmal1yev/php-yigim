<?php

namespace EasyPay\PHP\Yigim\Tests\Traits\JsonResponse\Attributes;

use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\SystemJsonResponseAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class SystemJsonResponseAttributeTraitTest
 *
 * Test case for the SystemJsonResponseAttributeTrait trait.
 *
 * @package EasyPay\PHP\Yigim\Tests\Traits\JsonResponse\Attributes
 */
class SystemJsonResponseAttributeTraitTest extends TestCase
{
    use SystemJsonResponseAttributeTrait;

    /** @var object The JSON response object. */
    private object $response;

    /**
     * Set up the test case.
     */
    protected function setUp(): void
    {
        $this->response = (object) ['system' => 'value'];
    }

    /**
     * Test the getSystem method.
     */
    public function testGetSystem(): void
    {
        $expected = $this->response->system;
        $actual = $this->getSystem();

        $this->assertSame($expected, $actual);
    }
}
