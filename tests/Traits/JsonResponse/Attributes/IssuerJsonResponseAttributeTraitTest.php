<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Traits\JsonResponse\Attributes;

use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\IssuerJsonResponseAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class IssuerJsonResponseAttributeTraitTest
 *
 * Test case for the IssuerJsonResponseAttributeTrait.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Tests\Traits\JsonResponse\Attributes
 */
class IssuerJsonResponseAttributeTraitTest extends TestCase
{
    use IssuerJsonResponseAttributeTrait;

    private object $response;

    protected function setUp(): void
    {
        $this->response = (object) ['issuer' => 'value'];
    }

    /**
     * Test the getIssuer method.
     */
    public function testGetIssuer(): void
    {
        $expected = $this->response->issuer;
        $actual = $this->getIssuer();

        $this->assertSame($expected, $actual);
    }
}
