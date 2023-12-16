<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute;

interface BillerCommandAttributeContract
{
    public function setBiller(string $biller): void;
    public function getBiller(): string;
}