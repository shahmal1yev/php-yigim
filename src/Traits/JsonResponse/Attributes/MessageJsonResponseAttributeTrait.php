<?php

namespace EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes;

/**
 * Trait MessageJsonResponseAttributeTrait
 *
 * Trait for extracting message attribute from JSON responses.
 *
 * @package EasyPay\PHP\Yigim\Traits\JsonResponse\Handlers\Attributes
 */
trait MessageJsonResponseAttributeTrait
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
