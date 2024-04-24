<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes;

use Shahmal1yev\EasyPay\Yigim\Exceptions\InvalidExpiryArgument;
use Shahmal1yev\EasyPay\Yigim\Exceptions\InvalidMonthArgument;
use Shahmal1yev\EasyPay\Yigim\Exceptions\InvalidYearArgument;

/**
 * Trait ExpiryCommandAttributeTrait
 *
 * Trait for managing expiry command attribute.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes
 */
trait ExpiryCommandAttributeTrait
{
    /**
     * @var string $expiry The expiry attribute.
     */
    private string $expiry;

    /**
     * Set the expiry attribute.
     *
     * @param string $expiry The expiry attribute to set.
     *
     * @return void
     * @see https://www.php.net/manual/en/datetime.format.php
     *
     * @throws InvalidExpiryArgument If the expiry argument is not a valid date format.
     */
    public function setExpiry(string $expiry): void
    {
        $format = "my";

        if (! date_create_from_format($format, $expiry))
            throw new InvalidExpiryArgument(
                "The expiry argument must be a valid date format: $expiry. Use '$format' format instead."
            );

        $this->expiry = $expiry;
    }

    /**
     * Get the expiry attribute.
     *
     * @return string The expiry attribute.
     */
    public function getExpiry(): string
    {
        return $this->expiry;
    }
}
