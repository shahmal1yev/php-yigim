<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute;

trait AmountCommandAttributeTrait
{
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }
}