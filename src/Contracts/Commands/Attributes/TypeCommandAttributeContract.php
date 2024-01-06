<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes;

interface TypeCommandAttributeContract
{
    public function setType(string $type): void;
    public function getType(): string;
}