<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes;

/**
 * Trait ReferenceJsonResponseAttributeTrait
 *
 * Trait for extracting reference information from JSON responses.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes
 */
trait ReferenceJsonResponseAttributeTrait
{
    /**
     * Get the reference value from the JSON response.
     *
     * @return string The reference value.
     */
    public function getReference(): string
    {
        return $this->response->reference;
    }
}
