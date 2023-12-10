<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute;

trait ReferenceJsonResponseHandlerAttributeTrait
{
    public function getReference(): string
    {
        return $this->response->reference;
    }
}