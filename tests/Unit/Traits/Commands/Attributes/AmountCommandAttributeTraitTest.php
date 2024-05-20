<?php

namespace EasyPay\PHP\Yigim\Tests\Unit\Traits\Commands\Attributes;

use EasyPay\PHP\Yigim\Exceptions\InvalidAmountException;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\AmountCommandAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class SaveCommandAttributeTraitTest
 *
 * Test cases for the SaveCommandAttributeTraitTest class.
 *
 * @package EasyPay\PHP\Yigim\Tests\Traits\Commands\Attributes
 */
class AmountCommandAttributeTraitTest extends TestCase
{
    use AmountCommandAttributeTrait;

    /**
     * Test set value for "amount" field with a valid argument.
     *
     * @return void
     * @throws InvalidAmountException
     */
    public function testSetAmountWithValidArgument(): void
    {
        $expected = rand(1, 100);

        $this->setAmount($expected);

        $takenAmountFromProperty = $this->amount;
        $takenAmountFromMethod = $this->getAmount();

        $this->assertSame($expected, $takenAmountFromProperty);
        $this->assertSame($expected, $takenAmountFromMethod);
    }

    /**
     * Test set a value less than 0 to the "amount" field.
     *
     * @return void
     * @throws InvalidAmountException
     */
    public function testSetAmountWithLessThanZeroArgument(): void
    {
        $actual = -12;
        $this->expectException(InvalidAmountException::class);
        $this->expectExceptionMessage("Amount must be greater than zero: $actual");
        $this->setAmount($actual);
    }
}
