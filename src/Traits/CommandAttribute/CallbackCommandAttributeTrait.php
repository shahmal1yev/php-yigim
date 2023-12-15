<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute;

trait CallbackCommandAttributeTrait
{
    public function setCallback(string $callback): void
    {
        $this->callback = $callback;
    }

    public function getCallback(): string
    {
        return $this->callback;
    }
}