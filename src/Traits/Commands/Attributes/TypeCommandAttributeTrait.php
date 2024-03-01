<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes;

trait TypeCommandAttributeTrait
{
    private string $type;
    
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getType(): string
    {
        return $this->type;
    }
}