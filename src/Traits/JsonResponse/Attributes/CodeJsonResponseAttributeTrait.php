<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes;

/**
 * Trait CodeJsonResponseAttributeTrait
 *
 * Trait for extracting code attribute from JSON responses.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Handlers\Attributes
 */
trait CodeJsonResponseAttributeTrait
{
    /**
     * Get the code from the JSON response.
     *
     * @return string The code.
     */
    public function getCode(): string
    {
        return $this->response->code;
    }
}
