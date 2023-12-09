<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute;

trait DescriptionCommandAttributeTrait
{
    private string $description;

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}