<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute;

interface CscCommandAttributeContract
{
    public function setCsc(string $csc): void;
    public function getCsc(): string;
}