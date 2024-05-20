<?php

namespace EasyPay\PHP\Yigim\Tests\Unit\Traits\Commands\Attributes;

use EasyPay\PHP\Yigim\Traits\Commands\Attributes\CscCommandAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class CscCommandAttributeTraitTest
 *
 * This class tests the CscCommandAttributeTrait to ensure that the CSC (Card Security Code) field can be set and retrieved correctly.
 *
 * @package EasyPay\PHP\Yigim\Tests\Traits\Commands\Attributes
 */
class CscCommandAttributeTraitTest extends TestCase
{
    use CscCommandAttributeTrait;

    /**
     * Test setting and getting "csc" field
     *
     * @return void
     */
    public function testSettingAndGettingCscField(): void
    {
        $expected = "csc string";

        $this->setCsc($expected);

        $takenActualCscFromProperty = $this->csc;
        $takenActualCscFromMethod = $this->getCsc();

        $this->assertSame($expected, $takenActualCscFromProperty);
        $this->assertSame($expected, $takenActualCscFromMethod);
    }
}
