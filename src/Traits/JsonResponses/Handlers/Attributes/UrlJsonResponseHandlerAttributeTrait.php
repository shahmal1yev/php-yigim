<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Handlers\Attributes;

/**
 * Trait UrlJsonResponseHandlerAttributeTrait
 *
 * Trait for extracting URL attribute from JSON responses.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Handlers\Attributes
 */
trait UrlJsonResponseHandlerAttributeTrait
{
    /**
     * Get the URL from the JSON response.
     *
     * @return string The URL.
     */
    public function getUrl(): string
    {
        return $this->response->url;
    }
}
