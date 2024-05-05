<?php

namespace EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes;

/**
 * Trait AmountJsonResponseAttributeTrait
 *
 * Trait for extracting the amount attribute from a JSON response.
 *
 * @package EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes
 */
trait AmountJsonResponseAttributeTrait
{
    /**
     * Get the amount from the JSON response.
     *
     * @return int The amount value.
     */
    public function getAmount(): int
    {
        return $this->response->amount;
    }
}
