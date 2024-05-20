<?php

namespace EasyPay\PHP\Yigim\Tests\Unit\Traits\Commands\Attributes;

use EasyPay\PHP\Yigim\Exceptions\InvalidCallbackURLException;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\CallbackCommandAttributeTrait;
use PHPUnit\Framework\TestCase;

class CallbackCommandAttributeTraitTest extends TestCase
{
    use CallbackCommandAttributeTrait;

    /**
     * Test setting and getting 'callback' with valid argument.
     *
     * @return void
     *
     * @throws InvalidCallbackURLException
     */
    public function testSetAndGettingCallbackFieldWithValidArgument(): void
    {
        $expected = "https://example.com/webhook";

        $this->setCallback($expected);

        $takenActualCallbackFromMethod = $this->getCallback();
        $takenActualCallbackFromProperty = $this->callback;

        $this->assertSame($expected, $takenActualCallbackFromMethod);
        $this->assertSame($expected, $takenActualCallbackFromProperty);
    }

    /**
     * Test setting 'callback' field with invalid argument.
     *
     * @return void
     * @throws InvalidCallbackURLException
     */
    public function testSettingCallbackFieldWithInvalidArgument(): void
    {
        $actual = 'invalid url';

        $this->expectException(InvalidCallbackURLException::class);
        $this->expectExceptionMessage("Provided invalid URL for 'callback' field: $actual");

        $this->setCallback($actual);
    }
}
