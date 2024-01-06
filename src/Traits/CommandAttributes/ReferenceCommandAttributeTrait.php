<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes;

trait ReferenceCommandAttributeTrait
{
    private string $reference;

    public function setReference(string $reference): void
    {
        $this->reference = $reference;
    }

    public function getReference(): string
    {
        return $this->reference;
    }
}