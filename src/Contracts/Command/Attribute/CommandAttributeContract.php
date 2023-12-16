<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute;

interface CommandAttributeContract
{
    public function setXMerchant(string $xMerchant): void;
    public function getXMerchant(): string;
    public function setXSignature(string $xSignature): void;
    public function getXSignature(): string;
    public function setXType(string $xType): void;
    public function getXType(): string;
}