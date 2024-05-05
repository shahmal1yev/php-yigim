<?php

namespace EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes;

/**
 * Trait DatetimeJsonResponseAttributeTrait
 *
 * Trait for extracting datetime information from JSON responses.
 *
 * @package EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes
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
