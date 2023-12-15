<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute;

trait ReferenceCommandAttributeTrait
{
    public function setReference(string $reference): void
    {
        $this->reference = $reference;
    }

    public function getReference(): string
    {
        return $this->reference;
    }
}