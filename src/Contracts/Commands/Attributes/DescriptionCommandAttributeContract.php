<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes;

interface DescriptionCommandAttributeContract
{
    public function setDescription(string $description): void;
    public function getDescription(): string;
}