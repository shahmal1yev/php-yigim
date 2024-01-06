<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute;

trait TokenCommandAttributeTrait
{
    private string $token;

    public function setToken(string $token): void
    {
        $this->token = $token;
    }

    public function getToken(): string
    {
        return $this->token;
    }
}