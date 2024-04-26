<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Traits\JsonResponse\Attributes;

use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\MessageJsonResponseAttributeTrait;
use PHPUnit\Framework\TestCase;

class MessageJsonResponseAttributeTraitTest extends TestCase
{
    use MessageJsonResponseAttributeTrait;
    private \stdClass $response;

    protected function setUp(): void
    {
        $this->response = new \stdClass();
        $this->response->message = "Response message";
    }

    public function testGetMessage(): void
    {
        $expected = "Response message";
        $actual = $this->getMessage();

        $this->assertSame($expected, $actual);
        $this->assertIsString($actual);
    }
}
