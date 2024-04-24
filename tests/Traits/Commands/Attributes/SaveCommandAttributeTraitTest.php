<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Traits\Commands\Attributes;

use Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes\SaveCommandAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class SaveCommandAttributeTraitTest
 *
 * Test cases for the SaveCommandAttributeTraitTest class.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Tests\Traits\Commands\Attributes
 */
class SaveCommandAttributeTraitTest extends TestCase
{
    use SaveCommandAttributeTrait;

    /**
     * Test setting and getting "save" field.
     *
     * @return void
     */
    public function testSettingAndGettingSaveField(): void
    {
        $expected = true;

        $this->setSave($expected);

        $takenActualSaveValueFromProperty = $this->save;
        $takenActualSaveValueFromMethod = $this->getSave();

        $this->assertSame($expected, $takenActualSaveValueFromProperty);
        $this->assertSame($expected, $takenActualSaveValueFromMethod);
    }

    /**
     * Test initial value of "save" field.
     *
     * @return void
     */
    public function testInitialValueOfSaveField(): void
    {
        $expected = null;

        $takenActualSaveValueFromProperty = $this->save;
        $takenActualSaveValueFromMethod = $this->getSave();

        $this->assertSame($expected, $takenActualSaveValueFromProperty);
        $this->assertSame($expected, $takenActualSaveValueFromMethod);
    }
}
