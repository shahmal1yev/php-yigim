<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute;

interface CurrencyCommandAttributeContract
{
    public function setCurrency(string $currency): void;
    public function getCurrency(): string;
}