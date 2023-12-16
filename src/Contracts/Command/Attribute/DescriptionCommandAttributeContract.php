<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute;

interface DescriptionCommandAttributeContract
{
    public function setDescription(string $description): void;
    public function getDescription(): string;
}