<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Traits\JsonResponse\Attributes;

use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\DatetimeJsonResponseAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class DatetimeJsonResponseAttributeTraitTest
 *
 * Test case for the DatetimeJsonResponseAttributeTrait.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Tests\Traits\JsonResponse\Attributes
 */
class DatetimeJsonResponseAttributeTraitTest extends TestCase
{
    use DatetimeJsonResponseAttributeTrait;

    /**
     * @var object $response The response object.
     */
    private object $response;

    /**
     * Set up the test case.
     */
    protected function setUp(): void
    {
        $this->response = (object) ['datetime' => 'value'];
    }

    /**
     * Test the getDatetime method.
     */
    public function testGetDatetime(): void
    {
        $expected = $this->response->datetime;
        $actual = $this->getDatetime();

        $this->assertSame($expected, $actual);
    }
}
