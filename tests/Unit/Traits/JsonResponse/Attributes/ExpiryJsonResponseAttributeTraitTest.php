<?php

namespace EasyPay\PHP\Yigim\Tests\Unit\Traits\JsonResponse\Attributes;

use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\ExpiryJsonResponseAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class ExpiryJsonResponseAttributeTraitTest
 *
 * Test case for the ExpiryJsonResponseAttributeTrait.
 *
 * @package EasyPay\PHP\Yigim\Tests\Traits\JsonResponse\Attributes
 */
class ExpiryJsonResponseAttributeTraitTest extends TestCase
{
    use ExpiryJsonResponseAttributeTrait;

    private object $response;

    /**
     * Sets up the test case.
     */
    protected function setUp(): void
    {
        $this->response = (object) ['expiry' => 'value'];
    }

    /**
     * Test the getExpiry method.
     */
    public function testGetExpiry(): void
    {
        $expected = $this->response->expiry;
        $actual = $this->getExpiry();

        $this->assertSame($expected, $actual);
    }
}
