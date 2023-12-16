<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute;

interface ExtraCommandAttributeContract
{
    public function setExtra(string $extra): void;
    public function getExtra(): string;
}