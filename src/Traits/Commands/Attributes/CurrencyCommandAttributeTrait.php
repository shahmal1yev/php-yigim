<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes;

use Shahmal1yev\EasyPay\Yigim\Exceptions\InvalidCurrencyException;

/**
 * Trait CurrencyCommandAttributeTrait
 *
 * Trait containing methods to manage the currency attribute of Yigim payment system commands.
 * The currency attribute represents the numeric ISO 4217 currency code.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes
 */
trait CurrencyCommandAttributeTrait
{
    /**
     * The numeric ISO 4217 currency code.
     *
     * This property represents the currency code used for transactions.
     * It follows the ISO 4217 standard for currency codes.
     * The default value is "AZN" (Azerbaijani Manat).
     *
     * @var string $currency
     */
    private string $currency = "AZN";

    /**
     * Set the currency attribute.
     *
     * @param string $currency The numeric ISO 4217 currency code.
     * @throws InvalidCurrencyException If the provided currency code is not valid.
     */
    public function setCurrency(string $currency): void
    {
        // Validate the currency code (you can customize this validation according to your requirements)
        if (! preg_match('/^[A-Z]{3}$/', $currency))
            throw new InvalidCurrencyException("Invalid currency code: $currency");

        $this->currency = $currency;
    }

    /**
     * Get the currency attribute.
     *
     * @return string The numeric ISO 4217 currency code.
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }
}
