<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute;

trait CommandAttributeTrait
{
    private string $xMerchant;
    private string $xSignature;
    private string $xType;

    public function setXMerchant(string $xMerchant): void
    {
        $this->xMerchant = $xMerchant;
    }
    public function getXMerchant(): string
    {
        return $this->xMerchant;
    }
    public function setXSignature(string $xSignature): void
    {
        $this->xSignature = $xSignature;
    }
    public function getXSignature(): string
    {
        return $this->xSignature;
    }
    public function setXType(string $xType): void
    {
        $this->xType = $xType;
    }
    public function getXType(): string
    {
        return $this->xType;
    }
}