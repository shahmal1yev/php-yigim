<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes;

trait ExpiryJsonResponseAttributeTrait
{
    public function getExpiry(): string
    {
        return $this->response->expiry;
    }
}