<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes;

/**
 * Trait IssuerJsonResponseAttributeTrait
 *
 * A trait to retrieve the issuer attribute from JSON response.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes
 */
trait IssuerJsonResponseAttributeTrait
{
    /**
     * Get the issuer attribute from the JSON response.
     *
     * @return string The issuer attribute value.
     */
    public function getIssuer(): string
    {
        return $this->response->issuer;
    }
}
