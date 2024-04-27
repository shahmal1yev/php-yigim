<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes;

/**
 * Trait DatetimeJsonResponseAttributeTrait
 *
 * Trait for extracting datetime information from JSON responses.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes
 */
trait DatetimeJsonResponseAttributeTrait
{
    /**
     * Get the datetime value from the JSON response.
     *
     * @return string The datetime value.
     */
    public function getDatetime(): string
    {
        return $this->response->datetime;
    }
}
