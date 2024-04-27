<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Traits\JsonResponse\Attributes;

use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\ReferenceJsonResponseAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class ReferenceJsonResponseAttributeTraitTest
 *
 * Test cases for the ReferenceJsonResponseAttributeTrait class.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Tests\Traits\JsonResponse\Attributes
 */
class ReferenceJsonResponseAttributeTraitTest extends TestCase
{
    use ReferenceJsonResponseAttributeTrait;

    /** @var object $response The response object. */
    private object $response;

    /**
     * Set up the test case.
     *
     * @return void
     */
    protected function setUp(): void
    {
        $this->response = (object) ['reference' => 'value'];
    }

    /**
     * Test the getReference method of the ReferenceJsonResponseAttributeTrait.
     *
     * @return void
     */
    public function testGetReference()
    {
        $actual = $this->getReference();
        $expected = $this->response->reference;

        $this->assertSame($expected, $actual);
    }
}
