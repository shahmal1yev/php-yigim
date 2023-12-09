<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttribute;

interface DescriptionCommandAttributeContract
{
    public function setDescription(string $description): void;
    public function getDescription(): string;
}