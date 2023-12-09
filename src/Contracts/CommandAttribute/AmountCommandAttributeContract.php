<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttribute;

interface AmountCommandAttributeContract
{
    public function setAmount(int $amount): void;
    public function getAmount(): int;
}