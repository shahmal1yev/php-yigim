<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes;

interface BillerCommandAttributeContract
{
    public function setBiller(string $biller): void;
    public function getBiller(): string;
}