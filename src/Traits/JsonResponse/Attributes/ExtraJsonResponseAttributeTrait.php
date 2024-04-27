<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes;

/**
 * Trait ExtraJsonResponseAttributeTrait
 *
 * Trait for extracting the "extra" attribute from a JSON response.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes
 */
trait ExtraJsonResponseAttributeTrait
{
    /**
     * Get the value of the "extra" attribute from the JSON response.
     *
     * @return string The value of the "extra" attribute.
     */
    public function getExtra(): string
    {
        return $this->response->extra;
    }
}
