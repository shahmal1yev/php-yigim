<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute;

interface CallbackCommandAttributeContract
{
    public function setCallback(string $callback): void;
    public function getCallback(): string;
}