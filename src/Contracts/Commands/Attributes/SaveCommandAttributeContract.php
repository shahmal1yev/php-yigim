<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes;

interface SaveCommandAttributeContract
{
    public function setSave(bool $save): void;
    public function getSave(): bool;
}