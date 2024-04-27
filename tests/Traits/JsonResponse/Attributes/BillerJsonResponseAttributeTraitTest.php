<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Traits\JsonResponse\Attributes;

use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\BillerJsonResponseAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class BillerJsonResponseAttributeTraitTest
 *
 * Test case for the BillerJsonResponseAttributeTrait trait.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Tests\Traits\JsonResponse\Attributes
 */
class BillerJsonResponseAttributeTraitTest extends TestCase
{
    use BillerJsonResponseAttributeTrait;

    /** @var object The JSON response object. */
    private object $response;

    /**
     * Set up the test case.
     */
    protected function setUp(): void
    {
        $this->response = (object) ['biller' => 'value'];
    }

    /**
     * Test the getBiller method.
     */
    public function testGetBiller(): void
    {
        $expected = $this->response->biller;
        $actual = $this->getBiller();

        $this->assertSame($expected, $actual);
    }
}
