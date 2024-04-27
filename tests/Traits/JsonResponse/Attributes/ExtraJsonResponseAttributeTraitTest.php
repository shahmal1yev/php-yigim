<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Traits\JsonResponse\Attributes;

use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\ExtraJsonResponseAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class ExtraJsonResponseAttributeTraitTest
 *
 * Test case for the ExtraJsonResponseAttributeTrait trait.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Tests\Traits\JsonResponse\Attributes
 */
class ExtraJsonResponseAttributeTraitTest extends TestCase
{
    use ExtraJsonResponseAttributeTrait;

    private object $response;

    /**
     * Set up the test case.
     */
    protected function setUp(): void
    {
        $this->response = (object) ['extra' => 'value'];
    }

    /**
     * Test the getExtra method.
     */
    public function testGetExtra(): void
    {
        $expected = $this->response->extra;
        $actual = $this->getExtra();

        $this->assertSame($expected, $actual);
    }
}
