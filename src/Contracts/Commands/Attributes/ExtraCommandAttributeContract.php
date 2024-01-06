<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes;

interface ExtraCommandAttributeContract
{
    public function setExtra(string $extra): void;
    public function getExtra(): string;
}