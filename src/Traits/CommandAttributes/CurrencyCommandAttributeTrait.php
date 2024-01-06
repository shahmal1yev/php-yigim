<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes;

trait CurrencyCommandAttributeTrait
{
    private string $currency;

    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }
}