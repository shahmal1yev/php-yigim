<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes;

trait LanguageCommandAttributeTrait
{
    private string $language;

    public function setLanguage(string $language): void
    {
        $this->language = $language;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }
}