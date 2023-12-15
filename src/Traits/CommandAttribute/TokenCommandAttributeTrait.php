<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute;

trait TokenCommandAttributeTrait
{
    public function setToken(string $token): void
    {
        $this->token = $token;
    }

    public function getToken(): string
    {
        return $this->token;
    }
}