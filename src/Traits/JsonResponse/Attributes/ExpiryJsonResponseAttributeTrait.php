<?php

namespace EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes;

/**
 * Trait ExpiryJsonResponseAttributeTrait
 *
 * Provides a method to retrieve the expiry attribute from a JSON response.
 *
 * @package EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes
 */
trait ExpiryJsonResponseAttributeTrait
{
    /**
     * Get the expiry attribute from the JSON response.
     *
     * @return string The expiry attribute.
     */
    public function getExpiry(): string
    {
        return $this->response->expiry;
    }
}
