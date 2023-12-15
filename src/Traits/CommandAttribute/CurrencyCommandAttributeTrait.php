<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute;

trait CurrencyCommandAttributeTrait
{
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }
}