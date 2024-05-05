<?php

namespace EasyPay\PHP\Yigim\Traits\Commands\Attributes;

use InvalidArgumentException;

/**
 * Trait SaveCommandAttributeTrait
 *
 * Trait containing methods to manage the save attribute of Yigim payment system commands.
 * The save attribute indicates whether to save card data (true) or not (false).
 *
 * @package EasyPay\PHP\Yigim\Traits\Commands\Attributes
 */
trait SaveCommandAttributeTrait
{
    /**
     * Indicates whether to save card data.
     *
     * @var bool|null $save
     */
    private ?bool $save = null;

    /**
     * Set the save attribute.
     *
     * @param bool $save Whether to save card data.
     */
    public function setSave(bool $save): void
    {
        $this->save = $save;
    }

    /**
     * Get the save attribute.
     *
     * @return bool|null Whether to save card data.
     */
    public function getSave(): ?bool
    {
        return $this->save;
    }
}
