<?php

namespace EasyPay\PHP\Yigim\Tests\Unit\Traits\JsonResponse\Attributes;

use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\CodeJsonResponseAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class CodeJsonResponseAttributeTraitTest
 *
 * Test cases for the CodeJsonResponseAttributeTrait class.
 *
 * @package EasyPay\PHP\Yigim\Tests\Traits\JsonResponse\Attributes
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
