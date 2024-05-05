<?php

namespace EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes;

/**
 * Trait RrnJsonResponseAttributeTrait
 *
 * Provides a method to retrieve the RRN (Retrieval Reference Number) attribute from a JSON response.
 *
 * @package EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes
 */
trait RrnJsonResponseAttributeTrait
{
    /**
     * Get the RRN (Retrieval Reference Number) from the JSON response.
     *
     * @return string The RRN.
     */
    public function getRrn(): string
    {
        return $this->response->rrn;
    }
}
