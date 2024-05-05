<?php

namespace EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes;

/**
 * Trait CodeJsonResponseAttributeTrait
 *
 * Trait for extracting code attribute from JSON responses.
 *
 * @package EasyPay\PHP\Yigim\Traits\JsonResponse\Handlers\Attributes
 */
trait CodeJsonResponseAttributeTrait
{
    /**
     * Get the code from the JSON response.
     *
     * @return int The code.
     */
    public function getCode(): int
    {
        return $this->response->code;
    }
}
