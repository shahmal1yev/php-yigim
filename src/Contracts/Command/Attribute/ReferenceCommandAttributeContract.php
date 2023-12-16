<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute;

interface ReferenceCommandAttributeContract
{
    public function setReference(string $reference): void;
    public function getReference(): string;
}