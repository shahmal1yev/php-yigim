<?php

namespace EasyPay\PHP\Yigim\Tests\Traits\Commands\Attributes;

use EasyPay\PHP\Yigim\Exceptions\InvalidExpiryArgument;
use EasyPay\PHP\Yigim\Exceptions\InvalidMonthArgument;
use EasyPay\PHP\Yigim\Exceptions\InvalidYearArgument;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\ExpiryCommandAttributeTrait;
use PHPUnit\Framework\TestCase;


/**
 * Class ExpiryCommandAttributeTraitTest
 *
 * Test cases for the ExpiryCommandAttributeTrait class.
 *
 * @package EasyPay\PHP\Yigim\Tests\Traits\Commands\Attributes
 */
class ExpiryCommandAttributeTraitTest extends TestCase
{
    use ExpiryCommandAttributeTrait;

    /**
     * Test setting and getting "expiry" field with valid argument.
     *
     * @return void
     *
     * @throws InvalidExpiryArgument
     */
    public function testSettingAndGettingExpiryWithValidArgument(): void
    {
        $expected = "0927";

        $this->setExpiry($expected);

        $takenActualExpiryFromProperty = $this->expiry;
        $takenActualExpiryFromMethod = $this->getExpiry();

        $this->assertSame($expected, $takenActualExpiryFromMethod);
        $this->assertSame($expected, $takenActualExpiryFromProperty);
    }

    /**
     * Test setting "expiry" field with invalid argument.
     *
     * @return void
     */
    public function testSettingAndGettingExpiryWithInvalidMonthArgument(): void
    {
        $actual = "092027";

        $this->expectException(InvalidExpiryArgument::class);
        $this->expectExceptionMessage("The expiry argument must be a valid date format: $actual. Use 'my' format instead.");

        $this->setExpiry($actual);
    }
}
