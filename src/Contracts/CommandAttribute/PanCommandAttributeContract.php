<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttribute;

interface PanCommandAttributeContract
{
    public function setPan(string $pan): void;
    public function getPan(): string;
}