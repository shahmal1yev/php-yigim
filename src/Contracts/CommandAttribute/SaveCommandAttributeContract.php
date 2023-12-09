<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttribute;

interface SaveCommandAttributeContract
{
    public function setSave(bool $save): void;
    public function getSave(): bool;
}