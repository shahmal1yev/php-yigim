<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes;

interface CallbackCommandAttributeContract
{
    public function setCallback(string $callback): void;
    public function getCallback(): string;
}