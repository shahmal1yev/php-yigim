<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes;

trait SaveCommandAttributeTrait
{
    private bool $save;

    public function setSave(bool $save): void
    {
        $this->save = $save;
    }

    public function getSave(): bool
    {
        return $this->save;
    }
}