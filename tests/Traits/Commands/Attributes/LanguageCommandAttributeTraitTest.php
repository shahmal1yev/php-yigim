<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Traits\Commands\Attributes;

use Shahmal1yev\EasyPay\Yigim\Exceptions\InvalidLanguageException;
use Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes\LanguageCommandAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class LanguageCommandAttributeTraitTest
 *
 * Test cases for the LanguageCommandAttributeTrait class.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Tests\Traits\Commands\Attributes
 */
class LanguageCommandAttributeTraitTest extends TestCase
{
    use LanguageCommandAttributeTrait;

    /**
     * Test setting and getting "language" field value with valid argument.
     *
     * @return void
     * @throws InvalidLanguageException
     */
    public function testSettingAndGettingLanguageFieldWithValidArgument(): void
    {
        $expected = 'ru';

        $this->setLanguage($expected);

        $takenActualLanguageFromMethod = $this->getLanguage();
        $takenActualLanguageFromProperty = $this->language;

        $this->assertSame($expected, $takenActualLanguageFromMethod);
        $this->assertSame($expected, $takenActualLanguageFromProperty);
    }

    /**
     * Test setting "language" field with invalid argument.
     *
     * @return void
     * @throws InvalidLanguageException
     */
    public function testSettingLanguageFieldWithInvalidArgument(): void
    {
        do
            $actual = uniqid();
        while(in_array($actual, self::SUPPORTED_LANGUAGES));

        $this->expectException(InvalidLanguageException::class);
        $this->expectExceptionMessage("Invalid language code: $actual");

        $this->setLanguage($actual);
    }

    /**
     * Test getting initial value of "language" field.
     *
     * @return void
     */
    public function testLanguageFieldInitialValue(): void
    {
        $expected = 'az';

        $actualMethodValue = $this->getLanguage();
        $actualPropertyValue = $this->language;

        $this->assertSame($expected, $actualMethodValue);
        $this->assertSame($expected, $actualPropertyValue);
    }
}
