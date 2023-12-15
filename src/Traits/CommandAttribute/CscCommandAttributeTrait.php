<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute;

trait CscCommandAttributeTrait
{
    public function setCsc(string $csc): void
    {
        $this->csc = $csc;
    }

    public function getCsc(): string
    {
        return $this->csc;
    }
}