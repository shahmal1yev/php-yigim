<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes;

interface ReferenceCommandAttributeContract
{
    public function setReference(string $reference): void;
    public function getReference(): string;
}