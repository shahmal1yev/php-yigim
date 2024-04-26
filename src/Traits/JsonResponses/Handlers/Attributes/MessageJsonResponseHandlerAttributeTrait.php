<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Handlers\Attributes;

/**
 * Trait MessageJsonResponseHandlerAttributeTrait
 *
 * Trait for extracting message attribute from JSON responses.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Handlers\Attributes
 */
trait MessageJsonResponseHandlerAttributeTrait
{
    /**
     * Get the message from the JSON response.
     *
     * @return string The message.
     */
    public function getMessage(): string
    {
        return $this->response->message;
    }
}
