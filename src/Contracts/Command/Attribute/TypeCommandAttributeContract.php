<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute;

interface TypeCommandAttributeContract
{
    public function setType(string $type): void;
    public function getType(): string;
}