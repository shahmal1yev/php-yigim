<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttribute;

interface TemplateCommandAttributeContract
{
    public function setTemplate(string $template): void;
    public function getTemplate(): string;
}