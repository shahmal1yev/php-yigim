<?php

namespace EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes;

/**
 * Trait CurrencyJsonResponseAttributeTrait
 *
 * Trait for retrieving the currency attribute from a JSON response object.
 *
 * @package EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes
 */
trait CurrencyJsonResponseAttributeTrait
{
    /**
     * Get the currency attribute from the JSON response.
     *
     * @return string The currency value.
     */
    public function getCurrency(): string
    {
        return $this->response->currency;
    }
}
