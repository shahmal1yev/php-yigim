<?php

namespace EasyPay\PHP\Yigim\Traits\Commands\Attributes;

/**
 * Trait ReferenceCommandAttributeTrait
 *
 * Trait containing methods to manage the reference attribute of Yigim payment system commands.
 * The reference attribute represents a unique payment (order) ID for future usage.
 *
 * @package EasyPay\PHP\Yigim\Traits\Commands\Attributes
 */
trait ReferenceCommandAttributeTrait
{
    /**
     * The unique payment (order) ID for future usage.
     *
     * @var string $reference
     */
    private string $reference;

    /**
     * Set the reference attribute.
     *
     * @param string $reference The unique payment (order) ID.
     */
    public function setReference(string $reference): void
    {
        $this->reference = $reference;
    }

    /**
     * Get the reference attribute.
     *
     * @return string The unique payment (order) ID.
     */
    public function getReference(): string
    {
        return $this->reference;
    }
}
