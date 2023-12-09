<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttribute;

interface LanguageCommandAttributeContract
{
    public function setLanguage(string $language): void;
    public function getLanguage(): string;
}