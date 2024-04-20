<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes;

/**
 * Trait BillerCommandAttributeTrait
 *
 * Trait containing methods to manage the biller attribute of Yigim payment system commands.
 * The biller attribute represents the name of the biller provided by the acquirer.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes
 */
trait BillerCommandAttributeTrait
{
    /**
     * The name of the biller provided by the acquirer.
     *
     * @var string $biller
     */
    private string $biller;

    /**
     * Set the biller name.
     *
     * @param string $biller The name of the biller provided by the acquirer.
     */
    public function setBiller(string $biller): void
    {
        $this->biller = $biller;
    }

    /**
     * Get the biller name.
     *
     * @return string The name of the biller provided by the acquirer.
     */
    public function getBiller(): string
    {
        return $this->biller;
    }
}
