<?php

namespace EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes;

/**
 * Trait UrlJsonResponseAttributeTrait
 *
 * Trait for extracting URL attribute from JSON responses.
 *
 * @package EasyPay\PHP\Yigim\Traits\JsonResponse\Handlers\Attributes
 */
trait UrlJsonResponseAttributeTrait
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
