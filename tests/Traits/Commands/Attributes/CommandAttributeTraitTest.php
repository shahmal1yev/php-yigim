<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Traits\Commands\Attributes;

use Shahmal1yev\EasyPay\Yigim\Exceptions\XTypeUnsupportedArgumentException;
use Shahmal1yev\EasyPay\Yigim\Helpers\Arr;
use Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes\CommandAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class CommandAttributeTraitTest
 *
 * Test cases for the CommandAttributeTrait class.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Tests\Traits\Commands\Attributes
 */
class CommandAttributeTraitTest extends TestCase
{
    use CommandAttributeTrait;

    /**
     * Test setting xMerchant attribute.
     *
     * @return void
     */
    public function testSettingXMerchant(): void
    {
        $expected = "xMerchant value";

        $this->setXMerchant($expected);

        $this->assertSame($expected, $this->getXMerchant());
        $this->assertSame($expected, $this->xMerchant);
    }

    /**
     * Test setting xSignature attribute.
     *
     * @return void
     */
    public function testSettingXSignature(): void
    {
        $expected = "xSignature value";

        $this->setXSignature($expected);

        $this->assertSame($expected, $this->getXSignature());
        $this->assertSame($expected, $this->xSignature);
    }

    /**
     * Test setting xType attribute with supported values.
     *
     * @throws XTypeUnsupportedArgumentException
     * @return void
     */
    public function testSettingXTypeWithSupportedValues(): void
    {
        $randomIndex = rand(0, count(self::X_TYPE_SUPPORTED_VALUES) - 1);
        $expected = Arr::get(self::X_TYPE_SUPPORTED_VALUES, $randomIndex);

        $this->setXType($expected);

        $this->assertSame($expected, $this->getXType());
        $this->assertSame($expected, $this->xType);
    }

    /**
     * Test setting xType attribute with unsupported values.
     *
     * @return void
     */
    public function testSettingXTypeWithUnsupportedValues(): void
    {
        do
            $randomValue = uniqid();
        while(in_array(
            $randomValue,
            self::X_TYPE_SUPPORTED_VALUES
        ));

        $this->expectException(XTypeUnsupportedArgumentException::class);
        $this->setXType($randomValue);
    }

    /**
     * Test xType default value is supported.
     *
     * @return void
     */
    public function testXTypeDefaultValueIsSupported(): void
    {
        $takenDefaultValueFromMethod = $this->getXType();
        $takenDefaultValueFromProperty = $this->xType;

        $this->assertTrue(in_array($takenDefaultValueFromMethod, self::X_TYPE_SUPPORTED_VALUES));
        $this->assertTrue(in_array($takenDefaultValueFromProperty, self::X_TYPE_SUPPORTED_VALUES));
    }

    /**
     * Test xType default value.
     *
     * @return void
     */
    public function testXTypeDefaultValue(): void
    {
        $takenDefaultValueFromMethod = $this->getXType();
        $takenDefaultValueFromProperty = $this->xType;

        $this->assertSame("JSON", $takenDefaultValueFromMethod);
        $this->assertSame("JSON", $takenDefaultValueFromProperty);
    }

    /**
     * Test getAttributes method returns correct array.
     *
     * @return void
     */
    public function testGetAttributesReturnsCorrectArray(): void
    {
        $object = new class {
            use CommandAttributeTrait;

            private string $property1 = 'property 1 value';
            private int $property2 = 22;
            private bool $property3 = true;
        };

        $expectedAttributes = [
            'property1' => 'property 1 value',
            'property2' => 22,
            'property3' => true,
            'xType' => 'JSON',
        ];

        $this->assertEquals($expectedAttributes, $object->getAttributes());
    }
}
