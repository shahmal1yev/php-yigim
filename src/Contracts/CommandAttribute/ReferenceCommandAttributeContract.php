<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttribute;

interface ReferenceCommandAttributeContract
{
    public function setReference(string $reference): void;
    public function getReference(): string;
}