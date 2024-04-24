<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes;

use Shahmal1yev\EasyPay\Yigim\Exceptions\InvalidCallbackURLException;

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
     * @throws InvalidCallbackURLException If an invalid URL is provided for the $callback variable.
     *
     * @see https://www.php.net/manual/en/filter.constants.php#constant.filter-validate-url How is the validity of the URL being checked?
     */
    public function setCallback(string $callback): void
    {
        if (! filter_var($callback, FILTER_VALIDATE_URL))
            throw new InvalidCallbackURLException("Provided invalid URL for 'callback' field: $callback");

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
