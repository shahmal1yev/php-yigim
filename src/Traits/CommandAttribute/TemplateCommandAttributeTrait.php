<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute;

trait TemplateCommandAttributeTrait
{
    private string $template;

    public function setTemplate(string $template): void
    {
        $this->template = $template;
    }

    public function getTemplate(): string
    {
        return $this->template;
    }
}