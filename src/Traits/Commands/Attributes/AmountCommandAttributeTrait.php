<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes;

trait AmountCommandAttributeTrait
{
    private int $amount;

    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }
}