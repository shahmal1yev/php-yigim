<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Traits\JsonResponse\Attributes;

use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\CodeJsonResponseAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class CodeJsonResponseAttributeTraitTest
 *
 * Test cases for the CodeJsonResponseAttributeTrait class.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Tests\Traits\JsonResponse\Attributes
 */
class CodeJsonResponseAttributeTraitTest extends TestCase
{
    use CodeJsonResponseAttributeTrait;

    /** @var \stdClass $response The JSON response object. */
    private \stdClass $response;

    /**
     * Setup method to prepare the test case.
     *
     * @return void
     */
    protected function setUp(): void
    {
        $this->response = new \stdClass();
        $this->response->code = 200;
    }

    /**
     * Test getting the code from the JSON response.
     *
     * @return void
     */
    public function testGetCode(): void
    {
        $expected = 200;
        $actual = $this->getCode();

        $this->assertSame($expected, $actual);
        $this->assertIsInt($actual);
    }
}
