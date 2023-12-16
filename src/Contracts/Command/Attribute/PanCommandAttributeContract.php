<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute;

interface PanCommandAttributeContract
{
    public function setPan(string $pan): void;
    public function getPan(): string;
}