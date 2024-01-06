<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes;

trait ExpiryCommandAttributeTrait
{
    private string $expiry;

    public function setExpiry(string $expiry): void
    {
        $this->expiry = $expiry;
    }

    public function getExpiry(): string
    {
        return $this->expiry;
    }
}