<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute;

trait SaveCommandAttributeTrait
{
    public function setSave(bool $save): void
    {
        $this->save = $save;
    }

    public function getSave(): bool
    {
        return $this->save;
    }
}