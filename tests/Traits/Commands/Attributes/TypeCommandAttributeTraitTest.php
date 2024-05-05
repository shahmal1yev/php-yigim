<?php

namespace EasyPay\PHP\Yigim\Tests\Traits\Commands\Attributes;

use EasyPay\PHP\Yigim\Exceptions\TypeUnsupportedArgumentException;
use EasyPay\PHP\Yigim\Helpers\Arr;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\TypeCommandAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class TypeCommandAttributeTraitTest
 *
 * Test cases for the TypeCommandAttributeTrait class.
 *
 * @package EasyPay\PHP\Yigim\Tests\Traits\Commands\Attributes
 */
class TypeCommandAttributeTraitTest extends TestCase
{
    use TypeCommandAttributeTrait;

    /**
     * Test setting type field with supported values.
     *
     * @return void
     * @throws TypeUnsupportedArgumentException
     */
    public function testSettingTypeWithSupportedValues(): void
    {
        $randomIndex = rand(0, count(self::TYPE_SUPPORTED_VALUES) - 1);
        $expected = Arr::get(self::TYPE_SUPPORTED_VALUES, $randomIndex);

        $this->setType($expected);

        $takenActualTypeFromMethod = $this->getType();
        $takenActualTypeFromProperty = $this->type;

        $this->assertSame($expected, $takenActualTypeFromMethod);
        $this->assertSame($expected, $takenActualTypeFromProperty);
    }

    /**
     * Test setting type field with unsupported value.
     *
     * @return void
     * @throws TypeUnsupportedArgumentException
     */
    public function testSettingTypeWithUnsupportedValues(): void
    {
        do
            $unsupportedValue = uniqid();
        while(in_array(
            $unsupportedValue,
            self::TYPE_SUPPORTED_VALUES,
        ));

        $this->expectException(TypeUnsupportedArgumentException::class);
        $this->setType($unsupportedValue);
    }
}
