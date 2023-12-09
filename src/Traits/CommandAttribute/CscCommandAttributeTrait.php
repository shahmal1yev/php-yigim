<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute;

trait CscCommandAttributeTrait
{
    private string $csc;

    public function setCsc(string $csc): void
    {
        $this->csc = $csc;
    }

    public function getCsc(): string
    {
        return $this->csc;
    }
}