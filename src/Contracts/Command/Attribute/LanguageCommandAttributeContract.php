<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute;

interface LanguageCommandAttributeContract
{
    public function setLanguage(string $language): void;
    public function getLanguage(): string;
}