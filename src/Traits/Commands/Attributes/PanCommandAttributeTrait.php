<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes;

/**
 * Trait PanCommandAttributeTrait
 *
 * This trait provides methods to set and get the PAN (Primary Account Number) attribute for a command.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes
 */
trait PanCommandAttributeTrait
{
    /**
     * @var string The PAN (Primary Account Number) attribute.
     */
    private string $pan;

    /**
     * Set the PAN (Primary Account Number) attribute.
     *
     * @param string $pan The PAN to set.
     * @return void
     */
    public function setPan(string $pan): void
    {
        $this->pan = $pan;
    }

    /**
     * Get the PAN (Primary Account Number) attribute.
     *
     * @return string The PAN.
     */
    public function getPan(): string
    {
        return $this->pan;
    }
}
