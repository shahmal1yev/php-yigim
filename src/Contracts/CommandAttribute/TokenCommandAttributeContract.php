<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttribute;

interface TokenCommandAttributeContract
{
    public function setToken(string $token): void;
    public function getToken(): string;
}