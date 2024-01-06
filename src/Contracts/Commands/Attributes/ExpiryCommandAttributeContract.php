<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes;

interface ExpiryCommandAttributeContract
{
    public function setExpiry(string $expiry): void;
    public function getExpiry(): string;
}