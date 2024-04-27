<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes;

/**
 * Trait SystemJsonResponseAttributeTrait
 *
 * Provides a method to retrieve the system attribute from a JSON response object.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes
 */
trait SystemJsonResponseAttributeTrait
{
    /**
     * Get the system attribute from the JSON response object.
     *
     * @return string The value of the system attribute.
     */
    public function getSystem(): string
    {
        return $this->response->system;
    }
}
