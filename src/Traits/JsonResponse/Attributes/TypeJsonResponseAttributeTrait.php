<?php

namespace EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes;

/**
 * Trait TypeJsonResponseAttributeTrait
 *
 * Provides a method to retrieve the "type" attribute from the response object.
 *
 * @package EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes
 */
trait TypeJsonResponseAttributeTrait
{
    /**
     * Get the value of the "type" attribute from the response object.
     *
     * @return string The value of the "type" attribute.
     */
    public function getType(): string
    {
        return $this->response->type;
    }
}
