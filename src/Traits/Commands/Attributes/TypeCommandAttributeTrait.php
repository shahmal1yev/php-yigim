<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes;

use Shahmal1yev\EasyPay\Yigim\Exceptions\TypeUnsupportedArgumentException;
use Shahmal1yev\EasyPay\Yigim\Helpers\Arr;

/**
 * Trait TypeCommandAttributeTrait
 *
 * Trait containing methods to manage the type attribute of Yigim payment system commands.
 * The type attribute represents the type of the command, such as SMS or DMS.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes
 */
trait TypeCommandAttributeTrait
{
    /**
     * Supported values for the type attribute.
     */
    private const array TYPE_SUPPORTED_VALUES = [
        "SMS",
        "DMS"
    ];

    /**
     * The type of the command.
     *
     * @var string|null $type Possible values: "SMS" (Single) or "DMS" (Dual Message System)
     */
    private ?string $type = null;

    /**
     * Set the type attribute.
     *
     * @param string $type The type of the command.
     * @throws TypeUnsupportedArgumentException
     */
    public function setType(string $type): void
    {
        if (! in_array($type, self::TYPE_SUPPORTED_VALUES))
            throw new TypeUnsupportedArgumentException("Unsupported 'type' provided: $type");

        $this->type = $type;
    }

    /**
     * Get the type attribute.
     *
     * @return string|null The type of the command.
     */
    public function getType(): ?string
    {
        return $this->type;
    }
}
