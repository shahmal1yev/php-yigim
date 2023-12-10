<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute;

trait ExpiryJsonResponseHandlerAttributeTrait
{
    public function getExpiry(): string
    {
        return $this->response->expiry;
    }
}