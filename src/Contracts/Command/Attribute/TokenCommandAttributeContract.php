<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute;

interface TokenCommandAttributeContract
{
    public function setToken(string $token): void;
    public function getToken(): string;
}