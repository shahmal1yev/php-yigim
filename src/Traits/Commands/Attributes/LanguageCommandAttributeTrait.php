<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes;

use Shahmal1yev\EasyPay\Yigim\Exceptions\InvalidLanguageException;
use Shahmal1yev\EasyPay\Yigim\Helpers\Arr;

/**
 * Trait LanguageCommandAttributeTrait
 *
 * Trait containing methods to manage the language attribute of Yigim payment system commands.
 * The language attribute represents the language used for the template.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes
 */
trait LanguageCommandAttributeTrait
{
    /**
     * Supported languages.
     *
     * @var array $SUPPORTED_LANGUAGES
     */
    private const array SUPPORTED_LANGUAGES = [
        'az',
        'en',
        'ru'
    ];

    /**
     * The language used for the template.
     * Default value: "az"
     *
     * @var string $language
     */
    private string $language = "az";

    /**
     * Set the language attribute.
     *
     * @param string $language The language code (e.g., "az", "en", "ru").
     * @throws InvalidLanguageException If the provided language code is not supported.
     */
    public function setLanguage(string $language): void
    {
        if (! in_array($language, self::SUPPORTED_LANGUAGES)) {
            throw new InvalidLanguageException("Invalid language code: $language");
        }

        $this->language = $language;
    }

    /**
     * Get the language attribute.
     *
     * @return string The language code.
     */
    public function getLanguage(): string
    {
        return $this->language;
    }
}
