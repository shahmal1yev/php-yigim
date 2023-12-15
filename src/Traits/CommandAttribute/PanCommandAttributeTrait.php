<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute;

trait PanCommandAttributeTrait
{
    public function setPan(string $pan): void
    {
        $this->pan = $pan;
    }

    public function getPan(): string
    {
        return $this->pan;
    }
}