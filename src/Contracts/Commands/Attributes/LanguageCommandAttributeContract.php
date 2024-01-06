<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes;

interface LanguageCommandAttributeContract
{
    public function setLanguage(string $language): void;
    public function getLanguage(): string;
}