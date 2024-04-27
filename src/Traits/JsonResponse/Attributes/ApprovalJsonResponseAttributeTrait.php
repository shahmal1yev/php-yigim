<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes;

/**
 * Trait ApprovalJsonResponseAttributeTrait
 *
 * Trait for extracting the approval attribute from a JSON response.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes
 */
trait ApprovalJsonResponseAttributeTrait
{
    /**
     * Get the approval attribute from the JSON response.
     *
     * @return string The approval attribute value.
     */
    public function getApproval(): string
    {
        return $this->response->approval;
    }
}
