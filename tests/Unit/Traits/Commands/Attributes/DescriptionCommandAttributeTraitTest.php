<?php

namespace EasyPay\PHP\Yigim\Tests\Unit\Traits\Commands\Attributes;

use EasyPay\PHP\Yigim\Traits\Commands\Attributes\DescriptionCommandAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class DescriptionCommandAttributeTraitTest
 *
 * Test cases for the DescriptionCommandAttributeTraitTest class.
 *
 * @package EasyPay\PHP\Yigim\Tests\Traits\Commands\Attributes
 */
class DescriptionCommandAttributeTraitTest extends TestCase
{
    use DescriptionCommandAttributeTrait;

    /**
     * Test setting and getting "description" field
     *
     * @return void
     */
    public function testSettingAndGettingDescriptionField(): void
    {
        $expected = "description string";

        $this->setDescription($expected);

        $takenActualDescriptionFromProperty = $this->description;
        $takenActualDescriptionFromMethod = $this->getDescription();

        $this->assertSame($expected, $takenActualDescriptionFromProperty);
        $this->assertSame($expected, $takenActualDescriptionFromMethod);
    }

    /**
     * Test initial value of "description" field.
     *
     * @return void
     */
    public function testDescriptionFieldInitialValue(): void
    {
        $expected = null;
        $actual = $this->getDescription();

        $this->assertSame($expected, $actual);
    }
}
