<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute;

interface ExpiryCommandAttributeContract
{
    public function setExpiry(string $expiry): void;
    public function getExpiry(): string;
}