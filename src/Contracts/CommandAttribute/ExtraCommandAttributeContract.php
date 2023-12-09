<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttribute;

interface ExtraCommandAttributeContract
{
    public function setExtra(string $extra): void;
    public function getExtra(): string;
}