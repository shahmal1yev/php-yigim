<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes;

trait BillerCommandAttributeTrait
{
    private string $biller;

    public function setBiller(string $biller): void
    {
        $this->biller = $biller;
    }

    public function getBiller(): string
    {
        return $this->biller;
    }
}