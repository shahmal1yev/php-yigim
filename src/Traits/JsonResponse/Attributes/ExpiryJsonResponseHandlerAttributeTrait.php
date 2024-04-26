<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Attributes;

trait ExpiryJsonResponseHandlerAttributeTrait
{
    public function getExpiry(): string
    {
        return $this->response->expiry;
    }
}