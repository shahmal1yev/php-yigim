<?php

namespace EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes;

/**
 * Trait TokenJsonResponseAttributeTrait
 *
 * Provides a method to retrieve the "token" attribute from the response object.
 *
 * @package EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes
 */
trait TokenJsonResponseAttributeTrait
{
    /**
     * Get the value of the "token" attribute from the response object.
     *
     * @return string The value of the "token" attribute.
     */
    public function getToken(): string
    {
        return $this->response->token;
    }
}
