<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttribute;

interface CallbackCommandAttributeContract
{
    public function setCallback(string $callback): void;
    public function getCallback(): string;
}