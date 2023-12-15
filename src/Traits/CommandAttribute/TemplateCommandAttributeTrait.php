<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute;

trait TemplateCommandAttributeTrait
{
    public function setTemplate(string $template): void
    {
        $this->template = $template;
    }

    public function getTemplate(): string
    {
        return $this->template;
    }
}