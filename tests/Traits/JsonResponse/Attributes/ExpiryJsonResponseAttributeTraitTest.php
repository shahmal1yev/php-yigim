<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Traits\JsonResponse\Attributes;

use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\ExpiryJsonResponseAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class ExpiryJsonResponseAttributeTraitTest
 *
 * Test case for the ExpiryJsonResponseAttributeTrait.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Tests\Traits\JsonResponse\Attributes
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
