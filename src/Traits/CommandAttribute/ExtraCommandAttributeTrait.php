<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute;

trait ExtraCommandAttributeTrait
{
    public function setExtra(string $extra): void
    {
        $this->extra = $extra;
    }

    public function getExtra(): string
    {
        return $this->extra;
    }
}