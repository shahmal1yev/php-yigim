<?php

namespace EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes;

/**
 * Trait ThreeDSJsonResponseAttributeTrait
 *
 * Trait to extract the "3ds" attribute from JSON response.
 *
 * @package EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes
 */
trait ThreeDSJsonResponseAttributeTrait
{
    /**
     * Get the "3ds" attribute from the JSON response.
     *
     * @return string The value of the "3ds" attribute.
     */
    public function get3ds(): string
    {
        return $this->response->{"3ds"};
    }
}
