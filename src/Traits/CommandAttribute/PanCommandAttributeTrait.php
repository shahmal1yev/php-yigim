<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute;

trait PanCommandAttributeTrait
{
    private string $pan;

    public function setPan(string $pan): void
    {
        $this->pan = $pan;
    }

    public function getPan(): string
    {
        return $this->pan;
    }
}