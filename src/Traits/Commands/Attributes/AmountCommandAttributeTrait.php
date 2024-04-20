<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes;

use Shahmal1yev\EasyPay\Yigim\Exceptions\InvalidAmountException;

/**
 * Trait AmountCommandAttributeTrait
 *
 * Trait containing methods to manage the amount attribute of Yigim payment system commands.
 * The amount attribute represents the payment amount in coins.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes
 */
trait AmountCommandAttributeTrait
{
    /**
     * The payment amount in coins.
     *
     * @var int $amount
     */
    private int $amount;

    /**
     * Set the amount attribute.
     *
     * @param int $amount The payment amount in coins.
     * @throws InvalidAmountException If the provided amount is not a positive integer.
     */
    public function setAmount(int $amount): void
    {
        if ($amount < 0)
            throw new InvalidAmountException("Amount must be a positive integer.");

        $this->amount = $amount;
    }

    /**
     * Get the amount attribute.
     *
     * @return int The payment amount in coins.
     */
    public function getAmount(): int
    {
        return $this->amount;
    }
}
