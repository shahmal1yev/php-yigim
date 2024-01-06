<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes;

trait ExpiryJsonResponseHandlerAttributeTrait
{
    public function getExpiry(): string
    {
        return $this->response->expiry;
    }
}