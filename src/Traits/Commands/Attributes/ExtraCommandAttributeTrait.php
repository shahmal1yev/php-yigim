<?php

namespace EasyPay\PHP\Yigim\Traits\Commands\Attributes;

/**
 * Trait ExtraCommandAttributeTrait
 *
 * Trait containing methods to manage the extra attribute of Yigim payment system commands.
 * The extra attribute represents URL-encoded parameters.
 *
 * @package EasyPay\PHP\Yigim\Traits\Commands\Attributes
 */
trait ExtraCommandAttributeTrait
{
    /**
     * The URL-encoded parameters.
     *
     * @var string $extra
     */
    private string $extra;

    /**
     * Set the extra attribute.
     *
     * @param string $extra The URL-encoded parameters.
     */
    public function setExtra(string $extra): void
    {
        $this->extra = $extra;
    }

    /**
     * Get the extra attribute.
     *
     * @return string The URL-encoded parameters.
     */
    public function getExtra(): string
    {
        return $this->extra;
    }
}
