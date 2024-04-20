<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes;

/**
 * Trait DescriptionCommandAttributeTrait
 *
 * Trait containing methods to manage the description attribute of Yigim payment system commands.
 * The description attribute represents the payment description for displaying on the card input page.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes
 */
trait DescriptionCommandAttributeTrait
{
    /**
     * The payment description for displaying on the card input page.
     *
     * @var string|null $description
     */
    private ?string $description = null;

    /**
     * Set the payment description.
     *
     * @param string $description The payment description for displaying on the card input page.
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Get the payment description.
     *
     * @return string|null The payment description for displaying on the card input page.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
}
