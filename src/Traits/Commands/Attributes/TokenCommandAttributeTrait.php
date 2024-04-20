<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes;

use Shahmal1yev\EasyPay\Yigim\Exceptions\InvalidTokenException;

/**
 * Trait TokenCommandAttributeTrait
 *
 * Trait containing methods to manage the token attribute of Yigim payment system commands.
 * The token attribute represents the card's unique token (optional).
 *
 * @package Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes
 */
trait TokenCommandAttributeTrait
{
    /**
     * The card's unique token.
     *
     * @var string|null $token
     */
    private ?string $token = null;

    /**
     * Set the token attribute.
     *
     * @param string $token The card's unique token.
     * @throws InvalidTokenException If the provided token is not valid.
     */
    public function setToken(string $token): void
    {
        // Perform validation if needed
        if (strlen($token) === 0)
            throw new InvalidTokenException("Invalid token provided: $token");

        $this->token = $token;
    }

    /**
     * Get the token attribute.
     *
     * @return string|null The card's unique token, or null if not set.
     */
    public function getToken(): ?string
    {
        return $this->token;
    }
}
