<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute;

trait ExpiryCommandAttributeTrait
{
    public function setExpiry(string $expiry): void
    {
        $this->expiry = $expiry;
    }

    public function getExpiry(): string
    {
        return $this->expiry;
    }
}