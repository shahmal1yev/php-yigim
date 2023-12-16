<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute;

interface SaveCommandAttributeContract
{
    public function setSave(bool $save): void;
    public function getSave(): bool;
}