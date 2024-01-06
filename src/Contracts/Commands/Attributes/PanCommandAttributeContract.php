<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes;

interface PanCommandAttributeContract
{
    public function setPan(string $pan): void;
    public function getPan(): string;
}