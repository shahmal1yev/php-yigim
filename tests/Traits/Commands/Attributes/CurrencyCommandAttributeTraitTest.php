<?php

namespace EasyPay\PHP\Yigim\Tests\Traits\Commands\Attributes;

use EasyPay\PHP\Yigim\Exceptions\InvalidCurrencyException;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\CurrencyCommandAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class CurrencyCommandAttributeTraitTest
 *
 * Test cases for the CurrencyCommandAttributeTraitTest class.
 *
 * @package EasyPay\PHP\Yigim\Tests\Traits\Commands\Attributes
 */
class CurrencyCommandAttributeTraitTest extends TestCase
{
    use CurrencyCommandAttributeTrait;

    /**
     * Test setting "currency" with valid argument.
     *
     * @return void
     * @throws InvalidCurrencyException
     */
    public function testSettingAndGettingCurrencyWithValidArgument(): void
    {
        $expected = "EUR";

        $this->setCurrency($expected);

        $takenActualCurrencyFromProperty = $this->currency;
        $takenActualCurrencyFromMethod = $this->getCurrency();

        $this->assertSame($expected, $takenActualCurrencyFromMethod);
        $this->assertSame($expected, $takenActualCurrencyFromProperty);
    }

    /**
     * Test setting "currency" field value with invalid argument.
     *
     * @return void
     * @throws InvalidCurrencyException
     */
    public function testSettingCurrencyWithInvalidArgument(): void
    {
        $actual = "usd";

        $this->expectException(InvalidCurrencyException::class);
        $this->expectExceptionMessage("Invalid currency code: $actual");

        $this->setCurrency($actual);
    }

    /**
     * Test initial value of "currency" field
     *
     * @return void
     */
    public function testCurrencyFieldInitialValue(): void
    {
        $expected = "AZN";

        $actual = $this->getCurrency();

        $this->assertSame($expected, $actual);
    }
}
