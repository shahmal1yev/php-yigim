<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttribute;

interface TypeCommandAttributeContract
{
    public function setType(string $type): void;
    public function getType(): string;
}