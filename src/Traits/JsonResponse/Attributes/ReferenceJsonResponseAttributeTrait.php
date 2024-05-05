<?php

namespace EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes;

/**
 * Trait ReferenceJsonResponseAttributeTrait
 *
 * Trait for extracting reference information from JSON responses.
 *
 * @package EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes
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
