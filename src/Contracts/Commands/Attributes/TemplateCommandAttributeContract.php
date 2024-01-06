<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes;

interface TemplateCommandAttributeContract
{
    public function setTemplate(string $template): void;
    public function getTemplate(): string;
}