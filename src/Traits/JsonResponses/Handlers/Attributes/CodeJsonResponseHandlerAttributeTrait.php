<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Handlers\Attributes;

/**
 * Trait CodeJsonResponseHandlerAttributeTrait
 *
 * Trait for extracting code attribute from JSON responses.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Handlers\Attributes
 */
trait CodeJsonResponseHandlerAttributeTrait
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
