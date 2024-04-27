<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Traits\JsonResponse\Attributes;

use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\StatusJsonResponseAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class StatusJsonResponseAttributeTraitTest
 *
 * Test case for the StatusJsonResponseAttributeTrait.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Tests\Traits\JsonResponse\Attributes
 */
class StatusJsonResponseAttributeTraitTest extends TestCase
{
    use StatusJsonResponseAttributeTrait;

    private object $response;

    /**
     * Set up the test environment.
     */
    protected function setUp(): void
    {
        $this->response = (object) ['status' => 'value'];
    }

    /**
     * Test the getStatus method.
     */
    public function testGetStatus(): void
    {
        $expected = $this->response->status;
        $actual = $this->getStatus();

        $this->assertSame($expected, $actual);
    }
}
