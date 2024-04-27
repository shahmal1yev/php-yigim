<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes;

/**
 * Trait BillerJsonResponseAttributeTrait
 *
 * Trait for retrieving the biller attribute from JSON response.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes
 */
trait BillerJsonResponseAttributeTrait
{
    /**
     * Get the biller attribute from the JSON response.
     *
     * @return string The biller attribute value.
     */
    public function getBiller(): string
    {
        return $this->response->biller;
    }
}
