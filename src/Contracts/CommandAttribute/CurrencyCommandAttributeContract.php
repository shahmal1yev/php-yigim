<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttribute;

interface CurrencyCommandAttributeContract
{
    public function setCurrency(string $currency): void;
    public function getCurrency(): string;
}