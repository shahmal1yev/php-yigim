<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes;

interface AmountCommandAttributeContract
{
    public function setAmount(int $amount): void;
    public function getAmount(): int;
}