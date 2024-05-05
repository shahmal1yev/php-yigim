<?php

namespace EasyPay\PHP\Yigim\Traits\Commands\Attributes;

/**
 * Trait TemplateCommandAttributeTrait
 *
 * Trait containing methods to manage the template attribute of Yigim payment system commands.
 * The template attribute represents the name of the template for the card input page.
 *
 * @package EasyPay\PHP\Yigim\Traits\Commands\Attributes
 */
trait TemplateCommandAttributeTrait
{
    /**
     * The name of the template for the card input page.
     *
     * @var string $template
     */
    private string $template;

    /**
     * Set the template name.
     *
     * @param string $template The name of the template for the card input page.
     */
    public function setTemplate(string $template): void
    {
        $this->template = $template;
    }

    /**
     * Get the template name.
     *
     * @return string The name of the template for the card input page.
     */
    public function getTemplate(): string
    {
        return $this->template;
    }
}
