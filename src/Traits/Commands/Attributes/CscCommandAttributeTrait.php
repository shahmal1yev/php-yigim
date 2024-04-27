<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes;

/**
 * Trait CscCommandAttributeTrait
 *
 * This trait provides methods to set and get the CSC (Card Security Code) attribute for a command.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes
 */
trait CscCommandAttributeTrait
{
    /**
     * The Card Security Code.
     *
     * @var string $csc The Card Security Code.
     */
    private string $csc;

    /**
     * Set the Card Security Code.
     *
     * @param string $csc The Card Security Code to set.
     * @return void
     */
    public function setCsc(string $csc): void
    {
        $this->csc = $csc;
    }

    /**
     * Get the Card Security Code.
     *
     * @return string The Card Security Code.
     */
    public function getCsc(): string
    {
        return $this->csc;
    }
}
