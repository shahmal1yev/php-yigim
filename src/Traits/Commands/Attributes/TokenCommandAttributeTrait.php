<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes;

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