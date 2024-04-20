<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes;

use Shahmal1yev\EasyPay\Yigim\Exceptions\XTypeUnsupportedArgumentException;
use Shahmal1yev\EasyPay\Yigim\Helpers\Arr;

/**
 * Trait CommandAttributeTrait
 *
 * Trait containing common command attributes shared among different Yigim payment system commands.
 * These attributes are used to configure and authenticate payment requests.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes
 */
trait CommandAttributeTrait
{
    /**
     * Supported values for the response type.
     */
    private const array X_TYPE_SUPPORTED_VALUES = [
        "JSON"
    ];

    /**
     * Merchant name.
     *
     * @var string $xMerchant
     */
    private string $xMerchant;

    /**
     * Signature for authentication.
     *
     * @var string $xSignature
     */
    private string $xSignature;

    /**
     * Response type.
     *
     * @var string $xType Possible values: "JSON"
     */
    private string $xType;

    /**
     * Set the merchant name.
     *
     * @param string $xMerchant The merchant name.
     */
    public function setXMerchant(string $xMerchant): void
    {
        $this->xMerchant = $xMerchant;
    }

    /**
     * Get the merchant name.
     *
     * @return string The merchant name.
     */
    public function getXMerchant(): string
    {
        return $this->xMerchant;
    }

    /**
     * Set the signature for authentication.
     *
     * @param string $xSignature The signature for authentication.
     */
    public function setXSignature(string $xSignature): void
    {
        $this->xSignature = $xSignature;
    }

    /**
     * Get the signature for authentication.
     *
     * @return string The signature for authentication.
     */
    public function getXSignature(): string
    {
        return $this->xSignature;
    }

    /**
     * Set the response type.
     *
     * @param string $xType The response type.
     * @throws XTypeUnsupportedArgumentException If the provided XType is not supported.
     */
    public function setXType(string $xType): void
    {
        if (! Arr::exists(self::X_TYPE_SUPPORTED_VALUES, $xType))
            throw new XTypeUnsupportedArgumentException("Unsupported 'xType' provided: $xType");

        $this->xType = $xType;
    }

    /**
     * Get the response type.
     *
     * @return string The response type.
     */
    public function getXType(): string
    {
        return $this->xType;
    }

    /**
     * Get all attributes as an associative array.
     *
     * @return array An associative array of attributes.
     */
    public function getAttributes(): array
    {
        return array_filter(get_object_vars($this));
    }
}
