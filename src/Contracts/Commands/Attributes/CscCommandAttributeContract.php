<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes;

interface CscCommandAttributeContract
{
    public function setCsc(string $csc): void;
    public function getCsc(): string;
}