<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Traits\JsonResponse\Attributes;

use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\TypeJsonResponseAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class TypeJsonResponseAttributeTraitTest
 *
 * Test case for the TypeJsonResponseAttributeTrait.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Tests\Traits\JsonResponse\Attributes
 */
class TypeJsonResponseAttributeTraitTest extends TestCase
{
    use TypeJsonResponseAttributeTrait;

    /**
     * @var object $response The response object.
     */
    private object $response;

    /**
     * Set up the test case.
     */
    protected function setUp(): void
    {
        $this->response = (object) ['type' => 'value'];
    }

    /**
     * Test the getType method.
     */
    public function testGetType(): void
    {
        $expected = $this->response->type;
        $actual = $this->getType();

        $this->assertSame($expected, $actual);
    }
}
