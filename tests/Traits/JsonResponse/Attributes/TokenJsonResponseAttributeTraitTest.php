<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Traits\JsonResponse\Attributes;

use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\TokenJsonResponseAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class TokenJsonResponseAttributeTraitTest
 *
 * Test case for the TokenJsonResponseAttributeTrait trait.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Tests\Traits\JsonResponse\Attributes
 */
class TokenJsonResponseAttributeTraitTest extends TestCase
{
    use TokenJsonResponseAttributeTrait;

    /** @var object $response The mock JSON response object. */
    private object $response;

    /**
     * Set up the test environment.
     */
    protected function setUp(): void
    {
        $this->response = (object) ['token' => 'value'];
    }

    /**
     * Test the getToken method.
     */
    public function testGetToken(): void
    {
        $expected = $this->response->token;
        $actual = $this->getToken();

        $this->assertSame($expected, $actual);
    }
}