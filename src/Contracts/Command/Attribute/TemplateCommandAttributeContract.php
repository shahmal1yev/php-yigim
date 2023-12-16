<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute;

interface TemplateCommandAttributeContract
{
    public function setTemplate(string $template): void;
    public function getTemplate(): string;
}