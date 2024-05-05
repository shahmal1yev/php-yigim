<?php

namespace EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes;

/**
 * Trait PanJsonResponseAttributeTrait
 *
 * A trait for extracting the PAN (Primary Account Number) attribute from a JSON response.
 *
 * @package EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes
 */
trait PanJsonResponseAttributeTrait
{
    /**
     * Get the PAN from the JSON response.
     *
     * @return string The PAN extracted from the JSON response.
     */
    public function getPan(): string
    {
        return $this->response->pan;
    }
}
