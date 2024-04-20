<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes;

/**
 * Trait CallbackCommandAttributeTrait
 *
 * Trait containing methods to manage the callback attribute of Yigim payment system commands.
 * The callback attribute represents the webhook URL triggered when the payment status changes.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes
 */
trait CallbackCommandAttributeTrait
{
    /**
     * The webhook URL triggered when the payment status changes.
     *
     * @var string $callback
     */
    private string $callback;

    /**
     * Set the callback attribute.
     *
     * @param string $callback The webhook URL.
     */
    public function setCallback(string $callback): void
    {
        $this->callback = $callback;
    }

    /**
     * Get the callback attribute.
     *
     * @return string The webhook URL.
     */
    public function getCallback(): string
    {
        return $this->callback;
    }
}
