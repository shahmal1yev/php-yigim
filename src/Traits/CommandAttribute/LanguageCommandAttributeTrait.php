<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute;

trait LanguageCommandAttributeTrait
{
    public function setLanguage(string $language): void
    {
        $this->language = $language;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }
}