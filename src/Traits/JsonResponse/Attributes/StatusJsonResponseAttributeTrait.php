<?php

namespace EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes;

/**
 * Trait StatusJsonResponseAttributeTrait
 *
 * Trait for accessing the status attribute in a JSON response.
 *
 * @package EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes
 */
trait StatusJsonResponseAttributeTrait
{
    /**
     * Get the status attribute from the JSON response.
     *
     * @return string The value of the status attribute.
     */
    public function getStatus(): string
    {
        return $this->response->status;
    }
}
